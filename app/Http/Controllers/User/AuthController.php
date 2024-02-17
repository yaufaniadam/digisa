<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\RegisterAccountRequest;
use App\Http\Requests\UserLoginRequest;
use App\Mail\NewUserRegistration;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->back();
        }

        return view('user.pages.auth.login');
    }

    public function loginAttempt(UserLoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {

            if (Auth::user()->role_id != 2) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()
                    ->back()
                    ->withError('Email atau password yang anda masukkan tidak sesuai.')
                    ->onlyInput('email');
            }

            if (Auth::user()->status_id == 0) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()
                    ->back()
                    ->withError('Mohon maaf, pendaftaran akun anda belum disetujui oleh admin.')
                    ->onlyInput('email');
            }


            if (Auth::user()->status_id == 2) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()
                    ->back()
                    ->withError('Akun anda dibekukan.')
                    ->onlyInput('email');
            }

            $request->session()->regenerate();
            $user = User::find(Auth::user()->id);
            Auth::setUser($user);
            return redirect()->intended();
        }

        return redirect()
            ->back()
            ->withError('Email atau password yang anda masukkan tidak sesuai.')
            ->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('public.login');
    }

    public function register()
    {
        return view('user.pages.auth.register');
    }

    public function registration(RegisterAccountRequest $request)
    {
        // dd($request->validated());
        $user = UserService::registerNewUser($request);

        Mail::to('badkorayonkasihan@gmail.com')->send(new NewUserRegistration($user));

        return redirect()->back()->with('success', 'Pendaftaran selesai. Mohon tunggu konfirmasi dari admin');
    }

    public function forgotPasswordForm()
    {
        return view('user.pages.auth.forgot-password');
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status',    'Link reset password telah dikirim ke email anda.')
            : back()->withErrors(['email' => 'Email tidak terdaftar']);
    }

    public function resetPasswordForm($token)
    {
        return view('user.pages.auth.reset-password')
            ->with([
                'token' => $token
            ]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);


        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => $password
                ]);

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('public.login')->with('status', 'Password anda telah diperbarui. Silahkan login kembali.')
            : back()->withErrors('error', 'Email tidak terdaftar');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('user.pages.auth.login');
    }

    public function loginAttempt(UserLoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {

            if (Auth::user()->verification_status == 0) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return back()
                    ->withErrors(['login_failed' => 'Mohon maaf, pendaftaran akun anda belum disetujui oleh admin.'])
                    ->onlyInput('email');
            }


            if (Auth::user()->verification_status == 2) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return back()
                    ->withErrors(['login_failed' => 'Akun anda dibekukan.'])
                    ->onlyInput('email');
            }

            $request->session()->regenerate();
            $user = User::find(Auth::user()->id);
            Auth::setUser($user);
            return redirect()->intended();
        }

        return back()
            ->withErrors('error', 'Email atau password yang anda masukkan tidak sesuai.')
            ->onlyInput('email');
    }
}

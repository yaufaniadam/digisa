<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAccountRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        DB::transaction(function () use ($request) {
            User::create($request->validated());
        });

        return redirect()->back()->with('success', 'Pendaftaran selesai. Mohon tunggu konfirmasi dari admin');
    }
}

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
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // dd(Auth::user());

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
            // dd($auth);
            return redirect()->intended();
        }

        return redirect()
            ->back()
            ->withError('Email atau password yang anda masukkan tidak sesuai.')
            ->onlyInput('email');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('public.login');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.pages.auth.login');
    }

    public function loginAttempt(UserLoginRequest $request)
    {
        $credentials = $request->validated();

        // dd($credentials);

        if (Auth::attempt($credentials)) {

            if (User::find(Auth::user()->id)->role_id != 1) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()
                    ->back()
                    ->withError('Email atau password yang anda masukkan tidak sesuai.')
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

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}

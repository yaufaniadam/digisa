<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role_id == 2 && Auth::user()->status_id == 1) {
            return $next($request);
        }

        $request->session()->put('url.intended', $request->url());
        return redirect()->to(route('public.login'))->withError('Anda harus login terlebih dahulu');
    }
}

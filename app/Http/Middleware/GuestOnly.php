<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestOnly
{
    public function handle(Request $request, Closure $next)
    {
        // Jika SUDAH login → arahkan ke dashboard
        if (Auth::check() && !session()->has('redirect_after_success')) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}

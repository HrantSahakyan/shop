<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCompany
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
//        return route('login');
        if (Auth::check() && Auth::user()->user_type === 'company') {
            return $next($request);
        }
        return redirect()->route('login');
    }
}

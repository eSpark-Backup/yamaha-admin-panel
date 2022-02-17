<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfAccountLocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // Check if the logged in account is temporarily locked.
        if (session('auth.account_locked_at') && !session('auth.password_confirmed_at')) {
            return \redirect(route('password.confirm'));
        } else {
            // Remove entry from session which tell us that the account is locked temporarily.
            session()->remove('auth.account_locked_at');
        }

        return $next($request);
    }
}

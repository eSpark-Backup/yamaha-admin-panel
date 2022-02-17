<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AuthorizeIfRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {

        // Check if the requests passes the parameters
        if ($request->user()->role_id && $request->user()->role_id === Role::whereSlug($role)->value('id')) return $next($request);

        // Check if the request is type ajax and return the json response.
        if ($request->ajax() && $request->is('/api/*')) return \response()->json(['message' => 'unauthenticated'], 401);

        if ($role === \App\Models\Role::ADMIN) {
            return \redirect('/');
        } else if ($role === \App\Models\Role::AGENT) {
            return \redirect(RouteServiceProvider::HOME);
        }

        // Redirect page if the request type is not ajax.
        return \abort(401);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Http\Request;

class AuthenticateWithUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string    $role
     * 
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {

        // Check if the requests passes the parameters
        if ($request->user()->role_id && $request->user()->role_id === Role::whereSlug($role)->value('id')) return $next($request);

        // Check if the request is type ajax and return the json response.
        if ($request->ajax() && $request->is('/api/*')) return \response()->json(['message' => 'unauthenticated'], 401);

        // Redirect page if the request type is not ajax.
        return \abort(401);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{

    /**
     * Lock active account temporarily.
     *
     * @param \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\RedirectResponse 
     * @throws \Illuminate\Contracts\Container\BindingResolutionException 
     */
    public function lock(Request $request)
    {
        // Create an entry to session which tells us when the user account locked. 
        Session::put('auth.account_locked_at', \strtotime(\now()));

        // Remove previous entry of password confirmation from session.
        Session::remove('auth.password_confirmed_at');

        return \back();
    }
}

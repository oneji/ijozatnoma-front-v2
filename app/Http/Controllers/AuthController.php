<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Show login form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Show verification form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showVerifyForm()
    {
        if(!Session::has('phone')) {
            return redirect()->route('login');
        }

        return view('auth.verify');
    }

    /**
     * Show register form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }
}

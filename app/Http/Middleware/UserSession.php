<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class UserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Redirect if user is not authenticated
        if(Session::has('user')) {
            return $next($request);
        } else {
            return redirect()->route('loginForm');
        }
        
        // Redirect if user is going to Login page
        // if()
    }
}

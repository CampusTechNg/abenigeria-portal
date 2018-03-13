<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware
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
        // 1. User should be authenticated

        // 2. Authenticated user should have the role 'Admin'

        if(Auth::checK()){
            if(Auth::user()->role == 'Admin'){

                return $next($request);
            } else {
                
                return abort('403');
            }

        } else {
            return abort('404');
        }
    }
}

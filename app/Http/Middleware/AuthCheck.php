<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Route;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        $route = Route::currentRouteName();
        if ($route !='loginUser' && !auth()->guard('web')->check()) { 
            return redirect()->route('login.form')->with('error', 'Please log in to access this page.');
        }
        return $next($request);
    }
}

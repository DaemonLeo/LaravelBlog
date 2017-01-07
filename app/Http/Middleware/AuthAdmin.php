<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param   string $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
        //echo Auth::guard($guard)->check(); exit;
        if (!Auth::guard($guard)->check()) {
                return redirect('/admin/login');
        }

        return $next($request);
    }
}

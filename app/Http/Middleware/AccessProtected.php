<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AccessProtected
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
        $accessProtected = User::select('admin')->where(env('ADMIN_LOGIN'), $request[env('ADMIN_LOGIN')])->get()->toArray();

        if(!empty($accessProtected) and $accessProtected[0]['admin'] != 1) {
            return  redirect('/admin/login');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class Login
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
        if (!session('token')){
            return redirect('/login');
        }
        if (DB::table('website_admin')->find(1)->token!=session('token')){
            return redirect('/login');
        }
        return $next($request);
    }
}

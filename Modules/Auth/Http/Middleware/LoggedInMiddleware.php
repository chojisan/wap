<?php

namespace Modules\Auth\Http\Middleware;

use Sentinel;
use Closure;
use Illuminate\Http\Request;

class LoggedInMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( Sentinel::check())
        {
            return $next($request);
        }
        else{
            return redirect('/auth/login');
        }
    }
}

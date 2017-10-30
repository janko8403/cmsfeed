<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUserPermission
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
        if ( Auth::check() || is_user() )
        {
            return redirect('/access-denied');
        }

        return $next($request);
    }
}

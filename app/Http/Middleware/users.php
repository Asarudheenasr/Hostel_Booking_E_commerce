<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class users
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
        if(!Auth::check() || Auth::user()->type!='user'){
            return redirect('login')->withErrors(['please check username and password']);
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class VendorMiddleware
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
        if(Auth::user() &&  Auth::user()->user_type == 2 && Auth::user()->vendor_approval == 1) {
            return $next($request);
    }
        return redirect('/home');
    }
}

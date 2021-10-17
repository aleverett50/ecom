<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetSession
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
        // this middleware will set a session before any pages load
       // session()->forget('shipping');
       // session(['shipping'=> '3.99']);

        return $next($request);
    }
}

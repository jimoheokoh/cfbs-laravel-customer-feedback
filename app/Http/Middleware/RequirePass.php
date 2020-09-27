<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequirePass
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
        //a middleware to allow access without full auth
        //not implemented yet
    }
}

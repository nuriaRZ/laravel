<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MayorEdad
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
        if($request->route('edad')<18)
            return redirect()->route('frutas');
        else
        return $next($request);
    }
}

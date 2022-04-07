<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrupoCreacionGuias
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */

    public function handle($request, Closure $next)
    {   
        if (Auth::User()->idRole != '1' && Auth::User()->idRole != '2' && Auth::User()->idRole != '5')
        {
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class security
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
        if (auth()->user()){
            if(auth()->user()->role_id == 121){
                return $next($request);
            }
            return redirect(route('login'));
        }
        return redirect(route('login'));
    }

}

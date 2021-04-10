<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckBlocked
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
            if (auth()->check() && auth()->user()->blocked_status == 'yes') {
                auth()->logout();
                toastr()->error('انت محظور من الموقع');
                return redirect()->route('login');
            }

        return $next($request);


    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class SiswaMiddleware
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
        if (auth()->guard('siswa')->check()) {
            return $next($request);
        } else {
            return redirect()->route('loginSiswa');
        }
    }
}

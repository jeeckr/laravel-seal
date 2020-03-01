<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check() && Auth::user()->role->id == 1) {
        //     return redirect()->route('admin');
        // } else if (Auth::guard($guard)->check() && Auth::user()->role->id == 2) {
        //     return redirect()->route('homeSiswa');
        // } else if (Auth::guard($guard)->check() && Auth::guru()->role->id == 3) {
        //     return redirect()->route('guru');
        // } else {
        //     return $next($request);
        // }

        if (auth()->guard('admin')->check()) {
            return redirect()->route('admin');
        }
        if (auth()->guard('guru')->check()) {
            return redirect()->route('homeGuru');
        }
        if (auth()->guard('siswa')->check()) {
            return redirect()->route('homeSiswa');
        }
        if (auth()->guard('kepsek')->check()) {
            return redirect()->route('homeKepsek');
        }

        return $next($request);
    }
}

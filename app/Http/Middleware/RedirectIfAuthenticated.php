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
    public function handle($request, Closure $next)
    {
//        if (Auth::guard($guard)->check()) {
//            return redirect(RouteServiceProvider::HOME);
//        }

//        if (auth('web')->check()) {
//            return redirect(RouteServiceProvider::HOME);
//        }
        if (auth('influencer')->check()) {
            return redirect(RouteServiceProvider::Influencer);
        }

        if (auth('business')->check()) {
            return redirect(RouteServiceProvider::Business);
        }
        return $next($request);
    }
}

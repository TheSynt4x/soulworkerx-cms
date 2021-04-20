<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;


class GuestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!request()->user()) {
            return redirect(RouteServiceProvider::HOME)->with('info', __('messages.need_auth'));
        }

        return $next($request);
    }
}

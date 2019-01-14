<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
{
    /**
     * Check if user is authenticated as an administrative user before moving forward with the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user() && \Auth::user()->admin) {
            return $next($request);
        }

        return redirect('home');
    }
}

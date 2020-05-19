<?php

namespace App\Http\Middleware;

use Closure;

class ReportMiddleware
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
        $user = Auth::user();
        if(!$user->hasAnyrole(['admin'])){
            return redirect()->route('home');
        }
        return $next($request);
    }
}

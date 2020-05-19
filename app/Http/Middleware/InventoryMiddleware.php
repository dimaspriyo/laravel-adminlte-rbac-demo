<?php

namespace App\Http\Middleware;

use Closure;

class InventoryMiddleware
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
        if(!$user->hasAnyrole(['admin', 'supervisor','staff'])){
            return redirect()->route('home');
        }
        return $next($request);
    }
}

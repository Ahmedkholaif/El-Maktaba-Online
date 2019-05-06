<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AdminMiddleware
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
       
        $user = $request->user();
        if (! $user){
            return redirect('/');
        }
        if (Auth::user()->is_admin == 1) {
            return $next($request);
        }
        return redirect('unauthorized');
    }
}

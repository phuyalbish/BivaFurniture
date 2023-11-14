<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminLogin
{

    //   protected function redirectTo(Request $request)
    // {
    //     return route('loginadmin');

    //     // return $request->expectsJson() ? null : view('login');
    // }
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->input('pass') === 'password') {
            return $next($request);
        }
        else{
            return redirect('loginadmin');
        }
        // return dd('what the heck');
        // return $next($request);
    }
}

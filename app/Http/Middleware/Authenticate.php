<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    
    protected function redirectTo(Request $request)
    {
        return route('loginadmin');

        // return $request->expectsJson() ? null : view('login');
    }
}

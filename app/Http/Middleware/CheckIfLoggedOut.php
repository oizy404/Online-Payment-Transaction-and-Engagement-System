<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Auth;

class CheckIfLoggedOut{
    
    public function handle(Request $request, Closure $next){
        if(!Auth::check()){
            return redirect()->route("admin-home");
        }
        return $next($request);
    }
}

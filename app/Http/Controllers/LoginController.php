<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request only('username','password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin-home');
        }
        return back()->withErrors({
            "Invalid Login"
        });
    }
}

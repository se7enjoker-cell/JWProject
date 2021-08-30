<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            dd(123);
            // Authentication passed...
            // return redirect()->intended('dashboard');
        }
        else{
            dd(456);
        }
    }
}

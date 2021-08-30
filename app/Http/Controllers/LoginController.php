<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only(
            'username', 'password'
        );
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            dd(123);
            // return redirect()->intended('dashboard');
        }
        else{
            dd(456);
        }
     }
}

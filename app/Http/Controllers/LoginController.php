<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only(
            'username', 'password'
        );
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->route('dashboard');
            return 111;
        }
        else{
            return redirect()->route('login');        }
     }
}

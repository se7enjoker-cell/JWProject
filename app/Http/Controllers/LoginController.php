<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only([
            'username' => ['required', 'username'],
            'password' => ['required'],
        ]);
        dd($credentials);
    }
}

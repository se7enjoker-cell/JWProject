<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;


class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $user = User::all();
        dd($user);
     }
}

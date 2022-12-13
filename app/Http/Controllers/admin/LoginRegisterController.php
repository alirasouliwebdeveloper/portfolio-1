<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    public function login()
    {
        return view('');
    }

    public function signIn(Request $request)
    {
//        if (Auth::check()) {
//            // The user is logged in...
//        }
    }
}

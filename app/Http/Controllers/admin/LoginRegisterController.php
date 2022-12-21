<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember_me = $request->has('remember') ? true : false;

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'active' => 1], $remember_me)) {
            $user = \auth()->user();
            Auth::login($user);
            toastr()->success('Login is successful. Welcome ' . $user['name']);
            return redirect()->route('dashboard');
        } else {
            toastr()->error('Ops! Email or Password is not correct. Pleas check it again.');
            return redirect()->route('login');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'terms' => 'required'
        ], [
            'terms.required' => 'You must accept our terms. Please check it.'
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        toastr()->success('Register is successful. Login with your Email and Password');
        return redirect()->route('login');
    }

    public function logOut()
    {
        Auth::logout();
        toastr()->success('LogOut successful.');
        return redirect()->route('login');
    }
}

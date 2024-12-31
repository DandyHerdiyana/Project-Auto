<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use hash;
use Auth;
class AuthController extends Controller
{
    public function login()
    {
        if(!empty(Auth::check()))
        {
            return redirect()->route('admin/dashboard');
        }
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        $remember = $request->remember ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, $remember]))
        {
            return redirect()->route('admin/dashboard');
        }
        else
        {
            return redirect()->back()->with('error', 'Email or Password is incorrect');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}

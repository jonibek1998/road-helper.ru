<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('front.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'name' => $request->get('login'),
            'password' => $request->get('password')
        ])){
            return redirect('/');
        }

        return redirect()->back()->with('status', 'Неправильный логин или пароль');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}

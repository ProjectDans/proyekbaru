<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginpage()
    {
        return view('Login.index');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/home');
        }
        return redirect('/');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    public function register()
    {
        return view('register.index');
    }
    public function postregister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'level' => 'bendahara',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('welcome');
    }
}

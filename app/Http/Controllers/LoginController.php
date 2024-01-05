<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginuser(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/homegame');
        }
        return redirect('/login');
    }

    public function register()
    {
        return view('register');
    }

    public function registeruser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email, // Use 'email' instead of 'name'
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}

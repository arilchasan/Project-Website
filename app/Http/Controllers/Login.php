<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('sign.login', ["data_user" => User::all()]); 
    }

     public function authent(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        
        if(!Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('succes', 'Login Berhasil!');
        }

        return back()->with('loginError', 'Login Gagal!');
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}

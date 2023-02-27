<?php

namespace App\Http\Controllers;

use App\Models\InfoProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function index()
    {
        return view('register.register', ["data_user" => User::all(),]); 
    }
    public function create()
    {
        return view('register.create', ["data_user" => User::all()]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',

        ]);

          $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('succes', 'Registrasi Berhasil !');
    }

    public function edit(User $user)
    {
        return view('register.edit', [
            "user" => $user,
            "data_user" => User::all(),
        ]);
    }
    

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email:dns',           
            'alamat' => 'required',
            'no_telp' => 'required',
        ];

         $validateData = $request->validate($rules);

        User::where('id', $user->id)
            ->update($validateData);
        return redirect('/profile')->with('succes', 'Data berhasil diedit !');

        
    }
}

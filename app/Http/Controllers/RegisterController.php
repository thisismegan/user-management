<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'name'  => ['required', 'max:30'],
            'password' => ['required', 'confirmed', Password::min(8)]
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
            'photo'  => "profil.jpg"
        ]);

        return redirect('/')->with('success', 'akun telah di buat. silahkan login');
    }
}

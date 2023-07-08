<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function index()
    {

        return view('auth/login');
    }

    public function login(Request $request)
    {
        $creadentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($creadentials)) {
            $request->session()->put('email', Auth::user()->email);
            if (Auth::user()->role_id == 3) {
                return redirect()->route('home');
            }
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login-page')->with('failed', 'Email atau password salah');
        }
    }

    public function register()
    {
        return view('auth/register');
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
            'role_id' => 3,
            'photo'  => "default.png"
        ]);

        return redirect()->route('login-page')->with('success', 'akun telah di buat. silahkan login');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}

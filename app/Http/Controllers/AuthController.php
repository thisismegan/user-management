<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->route('dashboard');
        } else {
            return redirect('/')->with('failed', 'Email atau password salah');
        }
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}

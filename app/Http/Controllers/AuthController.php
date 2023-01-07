<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
Use Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('main.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('Berhasil', 'Login Berhasil!');
            return redirect()->intended('/dashboard');
        }

        Alert::error('Gagal', 'Username atau password salah!');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}

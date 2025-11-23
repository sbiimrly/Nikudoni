<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // SHOW SIGNUP PAGE
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    // REGISTER
    public function signup(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:100',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6|confirmed',
            'no_hp'     => 'nullable|string|max:20',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'no_hp'     => $request->no_hp,
        ]);

        return redirect()->route('signin.page')
                         ->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    // LOGIN FORM
    public function showLoginForm()
    {
        return view('auth.signin');
    }

    // LOGIN PROCESS
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // ADMIN
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // USER
            return redirect()->route('home.page');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home.page')
                         ->with('success', 'Anda telah logout.');
    }
}

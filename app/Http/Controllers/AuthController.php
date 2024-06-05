<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======

namespace App\Http\Controllers;

use Illuminate\Http\Request;
>>>>>>> origin/master
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
<<<<<<< HEAD

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('welcome');
        }
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('welcome');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('welcome');
    }

=======
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Użytkownik został pomyślnie uwierzytelniony
            return redirect()->intended('welcome');
        } else {
            // Nieudane uwierzytelnienie
            return redirect()->back()->withErrors(['message' => 'Nieprawidłowe dane logowania']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
>>>>>>> origin/master
}

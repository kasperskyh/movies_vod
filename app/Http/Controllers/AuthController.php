<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
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
}

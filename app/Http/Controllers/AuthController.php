<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = auth()->user();

            if ($user->role == 'admin') {
                return redirect()->route('dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->route('userDashboard');
            } else {
                Auth::logout();
                return redirect('/login')->withErrors(['message' => 'Unauthorized acses']);
            }
        }
        dd(Auth::attempt($credentials));

        return redirect()->back()->withErros(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

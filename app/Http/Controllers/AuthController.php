<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegisterForm() {
        return view('register');
    }

    // Handle registration request
    public function register(Request $request) {
        $validatedData = $request->validate([
            'phone' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['phone'],
            'phone' => $validatedData['phone'],
            'password' => bcrypt($validatedData['password']),
        ]);

        if ($user){
            return response()->json(['status' => 'success', 'message' => 'Logged in successfully']);

        }
        return response()->json(['status' => 'fail', 'message' => 'The provided credentials do not match our records.'], 401);
    }

    // Show the login form
    public function showLoginForm() {
        return view('login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['status' => 'success', 'message' => 'Logged in successfully']);
        }

        return response()->json(['status' => 'fail', 'message' => 'The provided credentials do not match our records.'], 401);
    }


    // Handle logout request
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
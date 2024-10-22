<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Register function
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone_number' => 'required'
        ]);

        $user = User::create([
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully']);
    }
     // Login function
     public function userLogin(Request $request)
     {
         // Validasi input login
         $request->validate([
             'username' => 'required',
             'password' => 'required'
         ]);

         // Mengambil username dan password dari request
         $credentials = $request->only('username', 'password');

         // Mengecek apakah username dan password cocok
         if (Auth::attempt($credentials)) {
             // Redirect ke dashboard jika login berhasil
             return redirect()->route('user.dashboard');
         }

         // Jika gagal login, kembalikan ke halaman sebelumnya dengan error
         return back()->withErrors([
             'username' => 'The provided credentials do not match our records.',
         ]);
     }

     public function showUserLoginForm()
    {
        return view('user.login');
    }
}

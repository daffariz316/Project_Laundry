<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showAdminLoginForm()
    {
        return view('Admin.login');
    }
    public function showAdminRegisForm()
    {
        return view('Admin.register');
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Ambil data admin yang berhasil login
            $admin = Auth::guard('admin')->user();
            // Simpan data admin ke dalam sesi
            $request->session()->put('admin', $admin);

            return redirect()->route('Admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
public function adminRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8',
            // Add other validation rules if needed
        ]);

        $admin = new Admin();
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin-login')->with('success', 'Admin signup successful! Please login.');
    }

    public function showUserLoginForm()
    {
        return view('User.login');
    }
    public function showUserRegisForm()
    {
        return view('User.register');
    }
}

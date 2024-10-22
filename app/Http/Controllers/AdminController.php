<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showRegisterForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins|max:255',
            'email' => 'required|email|unique:admins|max:255',
            'password' => 'required|min:8|confirmed',
        ]);

        $admin = new Admin();
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin.login')->with('success', 'Registration successful. Please log in.');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
{
    // Validate the input
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    // Prepare the credentials for authentication
    $credentials = $request->only('username', 'password');

    // Attempt to authenticate the admin user
    if (Auth::guard('admin')->attempt($credentials)) {
        // Authentication passed
        $admin = Auth::guard('admin')->user(); // Get the authenticated user
        $request->session()->put('admin', $admin); // Store admin data in session

        return redirect()->route('admin.dashboard')->with('success', 'Welcome back!');
    }

    // Authentication failed
    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ]);
}

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }

    public function index()
    {
        $admins = Admin::all();
        return view('admin.akun', compact('admins'));
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('user.register');
    }
    // Register function
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone_number' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('user.login')->with('success', 'Registration successful! Please login.');
    }

    public function showLoginForm()
    {
        return view('user.login');
    }

     // Login function
     public function userLogin(Request $request)
     {
         $request->validate([
             'username' => 'required',
             'password' => 'required'
         ]);

         $credentials = $request->only('username', 'password');

         if (Auth::attempt($credentials)) {
             return redirect()->route('user.dashboard-u');
         }

         return back()->withErrors([
             'username' => 'The provided credentials do not match our records.',
         ]);
     }
     public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
    public function index()
{
    // Mengambil semua data user dari database
    $users = User::all();

    // Mengirim data ke view
    return view('admin.user', compact('users'));
}
// public function showUserCount() // Ganti nama metode
// {
//     $user_c = User::count(); // Menghitung jumlah user
//     return view('admin.dashboard',['user_c' => $user_c]); // Ganti 'your-view-name' dengan nama view Anda
// }

// public function showProfile(){
//     $user = Auth::user();
//     return view('user.profile', compact('user'));
// }
// // Menampilkan form edit profil
// public function editProfileForm()
// {
//     // Ambil data pengguna yang sedang login
//     $user = auth()->user();

//     // Tampilkan halaman form edit profil dengan data pengguna
//     return view('user.edit', ['user' => $user]);
// }

public function profile()
{
    // Ambil data pengguna yang sedang login
    $user = Auth::user();

    return view('user.profile', ['user' => $user]);
}

public function edit()
    {
        $user = Auth::user(); // Ambil pengguna yang sedang login
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        // Validasi data input
        $request->validate([
            'username' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:6|confirmed', // Password opsional
        ]);

        $user = Auth::user(); // Ambil pengguna yang sedang login

        // Perbarui informasi pengguna
        $user->username = $request->input('username');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');

        // Perbarui password jika diisi
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save(); // Simpan perubahan

        return redirect()->route('user.profile')->with('success', 'Profil berhasil diperbarui.');
    }
}

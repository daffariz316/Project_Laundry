<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Waiting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        // Logika untuk dashboard admin
        return view('admin.dashboard');
    }
    public function loadWaiting(){
        // $wait = Waiting::all();
        // return view('Admin.waiting', ['wait' => $wait]);
        return view('Admin.waiting');
    }
    public function loadAdmin(){
        $admins = Admin::all();
        return view('admin.akun', ['admins' => $admins]);
    }
    public function loadPengguna(){
        return view('admin.user');
    }

    public function loadDashboard(){
        return view('user.dashboard-u');
    }

//     public function showDashboardData()
// {
//     $waitings = Waiting::all(); // Ambil semua data dari tabel 'waitings'
//     $user_c = User::count(); // Menghitung jumlah user

//     // Kirim kedua data ke view admin.dashboard
//     return view('admin.dashboard', [
//         'waitings' => $waitings,
//         'user_c' => $user_c
//     ]);
// }
public function showDashboardData()
{
    $waitings = Waiting::orderBy('updated_at') // Mengurutkan data berdasarkan tanggal update
                       ->take(10) // Ambil hanya 10 data teratas
                       ->get();
    $user_c = User::count(); // Menghitung jumlah user

    // Kirim kedua data ke view admin.dashboard
    return view('admin.dashboard', [
        'waitings' => $waitings,
        'user_c' => $user_c
    ]);
}


public function servis(){
    return view('user.servis');
}
public function antrian(){
    return view('user.antrian');
}
public function showDashboard()
{
    return view('user.dashboard-u', [
        'user' => auth()->user()
    ]);
}

}

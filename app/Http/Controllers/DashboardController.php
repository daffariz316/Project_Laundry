<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
    // public function loadAkunAdmin(){
    //     return view('admin.akun');
    // }
    public function loadAdmin(){
        $admins = Admin::all();
        return view('admin.akun', ['admins' => $admins]);
    }
    public function loadPengguna(){
        return view('admin.pengguna');
    }
}

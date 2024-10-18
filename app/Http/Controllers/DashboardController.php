<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Waiting;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        // Logika untuk dashboard admin
        return view('Admin.dashboard');
    }
    public function loadWaiting()
    {
        // $wait = Waiting::all();
        // return view('Admin.waiting', ['wait' => $wait]);
        return view('Admin.waiting');
    }
    public function loadPengguna()
    {
        return view('Admin.pengguna');
    }
    public function loadAkunAdmin()
    {
        return view('Admin.akun_admin');
    }


    public function userDashboard()
    {
        return view('User.dashboard');
    }
    public function loadAkunUser()
    {
        return view('User.akun_user');
    }
}

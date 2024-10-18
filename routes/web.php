<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('User.dashboard');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
//admin routes
Route::get('/admin', [DashboardController::class, 'adminDashboard']);
Route::get('/Waiting', [DashboardController::class, 'loadWaiting']);
Route::get('/Pengguna', [DashboardController::class, 'loadPengguna']);
Route::get('/Akun_admin', [DashboardController::class, 'loadAkunAdmin']);
Route::get('/user', [DashboardController::class, 'userDashboard']);



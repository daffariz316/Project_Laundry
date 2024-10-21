<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WaitingController;

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

// Rute untuk dashboard pengguna (user)
Route::permanentRedirect('/', '/home');
Route::get('/home', [DashboardController::class, 'userDashboard'])->name('user.dashboard');


//auth user
Route::get('/login', [AuthController::class, 'showUserLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'userLogin']);
Route::get('/register', [AuthController::class, 'showUserRegisForm'])->name('register');
Route::post('/register', [AuthController::class, 'userRegister']);
//Auth Admin
Route::get('/admin-login', [AuthController::class, 'showAdminLoginForm'])->name('admin-login');
Route::post('/admin-login', [AuthController::class, 'adminLogin']);
Route::get('/admin-register', [AuthController::class, 'showAdminRegisForm'])->name('admin-register');
Route::post('/admin-register', [AuthController::class,'adminRegister']);


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//admin routes
Route::get('/admin', [DashboardController::class, 'adminDashboard']);
Route::get('/Waiting', [DashboardController::class, 'loadWaiting']);
Route::get('/Pengguna', [DashboardController::class, 'loadPengguna']);
Route::get('/Akun_admin', [DashboardController::class, 'loadAkunAdmin']);



// Route untuk menampilkan halaman biaya
Route::get('/Waiting', [WaitingController::class, 'index'])->name('waiting.index');

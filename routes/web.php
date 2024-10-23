<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WaitingController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('admin/register', [AdminController::class, 'showRegisterForm'])->name('admin.register');
Route::post('admin/register', [AdminController::class, 'register']);
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Rute untuk dashboard admin
Route::get('admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');


// Route untuk menampilkan halaman waiting list
Route::get('/waiting', [DashboardController::class, 'loadWaiting']);
// Route untuk menampilkan halaman biaya
Route::get('/waiting', [WaitingController::class, 'index'])->name('waiting.index');

// Rute untuk menampilkan formulir penambahan data
Route::get('/waiting/create', [WaitingController::class, 'create'])->name('waiting.create');
// Rute untuk menyimpan data ke database
Route::post('/waitings', [WaitingController::class, 'store'])->name('waitings.store');
Route::get('waitings/{id}/edit', [WaitingController::class, 'edit'])->name('waitings.edit');
Route::put('waitings/{id}', [WaitingController::class, 'update'])->name('waitings.update');
Route::delete('waitings/{id}', [WaitingController::class, 'destroy'])->name('waitings.destroy');
Route::get('/admin/dashboard', [WaitingController::class, 'loadData'])->name('admin.dashboard');

//admins
Route::get('/admin',[DashboardController::class,'loadAdmin']);
Route::get('/admins', [adminController::class, 'index'])->name('admins.index');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');

///akun pengguna
Route::get('/admin/pengguna', [DashboardController::class, 'loadPengguna']);
// Route::middleware(['auth'])->group(function () {
//     Route::get('admin/dashboard', function () {
//         return view('admin.dashboard'); // Buat view dashboard
//     })->name('admin.dashboard');
// });

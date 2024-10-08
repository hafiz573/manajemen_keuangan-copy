<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\keuanganUserController;
use App\Http\Controllers\SimpananUserController;
use App\Http\Controllers\NasabahUserController;
use App\Http\Controllers\PinjamanUserController;
use App\Http\Controllers\RekeningUserController;

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



// Rute untuk halaman utama
// Route::get('/dashboard', function () {
//     return view('pages.home');
// });

Route::get('/', function () {
    return view('pages.login');
});

// Rute resource untuk NasabahController
Route::resource('nasabah', NasabahController::class);
Route::resource('simpanan', SimpananController::class);
Route::resource('rekening', RekeningController::class);
Route::resource('pinjaman', PinjamanController::class);
Route::resource('keuangan', KeuanganController::class);
Route::resource('admin', AdminController::class);
Route::resource('keuanganuser', KeuanganUserController::class);
Route::resource('simpananuser',SimpananUserController::class);
Route::resource('pinjamanuser',PinjamanUserController::class);
Route::resource('rekeninguser',RekeningUserController::class);
Route::resource('nasabahuser',NasabahUserController::class);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout'])->name('logout');




Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::middleware(['auth','role:user'])->group(function(){
    Route::get('user/dashboard', [DashboardController::class, 'Userindex'])->name('userDashboard');
});

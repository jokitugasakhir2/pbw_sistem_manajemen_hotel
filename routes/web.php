<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResepsionisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);
Route::post("/register", [RegisterController::class, 'register']);

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// Route::get('/guest/dashboard/home', [GuestController::class, 'index'])->name('guest.dashboard');
Route::get('/resepsionis/dashboard', [ResepsionisController::class, 'index'])->name('resepsionis.dashboard');
Route::get('/finance/dashboard', [GuestController::class, 'index'])->name('finance.dashboard');
Route::get('/room_master/dashboard', [GuestController::class, 'index'])->name('room_master.dashboard');

Route::post('/role', [AdminController::class, 'assign_role']);

Route::post('/room', [ResepsionisController::class, 'assign_new_room']);

// Route::get('/guest/detail_kamar', [GuestController::class, 'index'])->name('guest.dashboard');


Route::get('/guest/dashboard/{section}', [GuestController::class, 'show_feature']);

Route::post('/check_date_temp', [GuestController::class, 'send_to_payment']);
Route::post('/pay_room_booking', [GuestController::class, 'create_pay_booking']);

Route::get('/resepsionis/dashboard/{section}', [ResepsionisController::class, 'resepsionis_dashboard']);
Route::get('/resepsionis/dashboard/list_konfirmasi', [ResepsionisController::class, 'showListKonfirmasi'])->name('resepsionis.list_konfirmasi');
Route::get('/resepsionis/dashboard/list_verifikasi', [ResepsionisController::class, 'showListVerifikasi'])->name('resepsionis.list_verifikasi');
Route::get('/resepsionis/dashboard/calender', [ResepsionisController::class, 'showCalender'])->name('resepsionis.calender');

Route::get('/resepsionis/dashboard/detail_verifikasi', [ResepsionisController::class, 'showDetailVerifikasi'])->name('resepsionis.detail_verifikasi');
Route::get('/resepsionis/dashboard/detail_konfirmasi', [ResepsionisController::class, 'showDetailKonfirmasi'])->name('resepsionis.detail_konfirmasi');
Route::get('/resepsionis/dashboard/list_kamar_status', [ResepsionisController::class, 'showDetailKonfirmasi'])->name('resepsionis.list_kamar_status');
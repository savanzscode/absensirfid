<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return redirect('/login');
});

// Rute untuk halaman login dan register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Rute untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk dashboard, menggunakan middleware auth untuk mencegah akses tanpa login
Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index'); // Display all admins
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create'); // Show form to create a new admin
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store'); // Store a new admin
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit'); // Show form to edit an admin
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update'); // Update an existing admin
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy'); // Delete an admin

//  Route::get('/', [PagesController::class, 'dashboard']);
// DATA KARYAWAN
Route::get('/karyawan', [KaryawanController::class,'index'])->name('home');
Route::get('/tambah-karyawan', [KaryawanController::class,'create']);
Route::get('/edit-karyawan/{id}', [KaryawanController::class,'edit']);
Route::post('/postkaryawan', [KaryawanController::class,'store']);
Route::post('/editkaryawan', [KaryawanController::class,'update']);
Route::get('/hapus-karyawan/{id}', [KaryawanController::class,'destroy']);

// DATA ABSEN
Route::get('/absensi', [PagesController::class, 'absensi']);

// PRESENSI
Route::get('/scan', [PagesController::class,'scan_absen']);

// FUNGSI REALTIME
Route::get('/reader', [PagesController::class,'reader']);
Route::get('/nokartu', [PagesController::class,'nokartu']);


// FUNGSI GET LINK ARDUINO
Route::get('/postkartu/{id}', [PagesController::class,'temp']);
Route::get('/mode', [PagesController::class,'mode']);





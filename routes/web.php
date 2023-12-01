<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\JMakananController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\PenerimaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController; 


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
    return view('dashboard');
})->middleware('auth');

Route::get('/profil', function () {
    return view('themes.profil');
})->name('profil');

// ==========================================
// ADMIN
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/kelola-donatur', function () {
    return view('admin.kelola_donatur');
})->name('kelola_donatur');

// ==========================================
// DONATUR
Route::get('/donatur-dashboard', function () {
    return view('donatur.dashboard');
})->name('donatur.dashboard');

Route::get('/donatur-eksplor', function () {
    return view('donatur.eksplor');
})->name('eksplor');


Route::get('/donatur-form_donasi', function () {
    return view('donatur.form_donasi');
})->name('form_donasi');

Route::get('/donatur-proses_donasi', function () {
    return view('donatur.proses_donasi');
})->name('proses_donasi');

// ==========================================
// PENERIMA
Route::get('/penerima-dashboard', function () {
    return view('penerima.dashboard');
})->name('penerima.dashboard');

Route::get('/eksplorasi-penerima', [PenerimaController::class, 'eksplorasi'])->name('eksplorasi_penerima');

Route::get('/detail-penerima/{id}', [PenerimaController::class, 'show'])->name('detail_penerima');


// ==========================================
Route :: resource('/kelola_jenis',JMakananController::class)->middleware('auth');

Route :: resource('/donasi',DonasiController::class)->middleware('auth');

Route :: resource('/donatur',DonaturController::class)->middleware('auth');

Route :: resource('/penerima',PenerimaController::class)->middleware('auth');

// web.php
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

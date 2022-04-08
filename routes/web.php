<?php

use App\Http\Controllers\DashboardWebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome',['title' => 'Welcome to the BPS Website']);
// });

Route::get('/beranda',[DashboardWebsiteController::class, 'index'])->name('web.index');
//PETA
Route::get('/petajumlahpenduduk',[DashboardWebsiteController::class, 'petaJumlahPenduduk'])->name('web.jumlahpenduduk');
Route::get('/petajumlahpengangguran',[DashboardWebsiteController::class, 'petaJumlahPengangguran'])->name('web.jumlahpengangguran');
Route::get('/petajumlahpendudukmiskin',[DashboardWebsiteController::class, 'petaJumlahPendudukMiskin'])->name('web.jumlahpendudukmiskin');

//VISUALISASI

Route::get('/visualisasijumlahpenduduk', [DashboardWebsiteController::class, 'visualisasiJumlahPenduduk'])->name('web.visualisasijumlahpenduduk');
Route::get('/visualisasijumlahpengangguran', [DashboardWebsiteController::class, 'visualisasiJumlahPengangguran'])->name('web.visualisasijumlahpengangguran');
Route::get('/visualisasijumlahpendudukmiskin', [DashboardWebsiteController::class, 'visualisasiJumlahPendudukMiskin'])->name('web.visualisasijumlahpendudukmiskin');

Route::get('/kesimpulan', [DashboardWebsiteController::class, 'kesimpulan'])->name('web.kesimpulan');

Route::get('/tentang-kami', [DashboardWebsiteController::class, 'about'])->name('web.about');
//2017 VISUALISASI
//2018
//2019
//2020

//Kesimpulan

//About

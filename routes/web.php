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

Route::get('/',[DashboardWebsiteController::class, 'index'])->name('web.index');
//PETA
Route::get('/jumlahpenduduk',[DashboardWebsiteController::class, 'petaJumlahPenduduk'])->name('web.jumlahpenduduk');
Route::get('/jumlahpengangguran',[DashboardWebsiteController::class, 'petaJumlahPengangguran'])->name('web.jumlahpengangguran');
Route::get('/jumlahpendudukmiskin',[DashboardWebsiteController::class, 'petaJumlahPendudukMiskin'])->name('web.jumlahpendudukmiskin');

//VISUALISASI

Route::get('/visualisasijumlahpenduduk2017', [DashboardWebsiteController::class, 'visualisasiJumlahPenduduk2017'])->name('web.visualisasijumlahpenduduk2017');
Route::get('/visualisasijumlahpengangguran2017', [DashboardWebsiteController::class, 'visualisasiJumlahPengangguran2017'])->name('web.visualisasijumlahpengangguran2017');
Route::get('/visualisasijumlahpendudukmiskin2017', [DashboardWebsiteController::class, 'visualisasiJumlahPendudukMiskin2017'])->name('web.visualisasijumlahpendudukmiskin2017');

Route::get('/visualisasijumlahpenduduk2018', [DashboardWebsiteController::class, 'visualisasiJumlahPenduduk2018'])->name('web.visualisasijumlahpenduduk2018');
Route::get('/visualisasijumlahpengangguran2018', [DashboardWebsiteController::class, 'visualisasiJumlahPengangguran2018'])->name('web.visualisasijumlahpengangguran2018');
Route::get('/visualisasijumlahpendudukmiskin2018', [DashboardWebsiteController::class, 'visualisasiJumlahPendudukMiskin2018'])->name('web.visualisasijumlahpendudukmiskin2018');

Route::get('/visualisasijumlahpenduduk2019', [DashboardWebsiteController::class, 'visualisasiJumlahPenduduk2019'])->name('web.visualisasijumlahpenduduk2019');
Route::get('/visualisasijumlahpengangguran2019', [DashboardWebsiteController::class, 'visualisasiJumlahPengangguran2019'])->name('web.visualisasijumlahpengangguran2019');
Route::get('/visualisasijumlahpendudukmiskin2019', [DashboardWebsiteController::class, 'visualisasiJumlahPendudukMiskin2019'])->name('web.visualisasijumlahpendudukmiskin2019');

Route::get('/visualisasijumlahpenduduk2020', [DashboardWebsiteController::class, 'visualisasiJumlahPenduduk2020'])->name('web.visualisasijumlahpenduduk2020');
Route::get('/visualisasijumlahpengangguran2020', [DashboardWebsiteController::class, 'visualisasiJumlahPengangguran2020'])->name('web.visualisasijumlahpengangguran2020');
Route::get('/visualisasijumlahpendudukmiskin2020', [DashboardWebsiteController::class, 'visualisasiJumlahPendudukMiskin2020'])->name('web.visualisasijumlahpendudukmiskin2020');

Route::get('/kesimpulan', [DashboardWebsiteController::class, 'kesimpulan'])->name('web.kesimpulan');

Route::get('/about', [DashboardWebsiteController::class, 'about'])->name('web.about');
//2017 VISUALISASI
//2018
//2019
//2020

//Kesimpulan

//About

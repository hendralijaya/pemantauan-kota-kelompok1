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

Route::get('/jumlahpenduduk2017', [DashboardWebsiteController::class, 'jumlahPenduduk2017'])->name('web.jumlahpenduduk2017');
Route::get('/jumlahpengangguran2017', [DashboardWebsiteController::class, 'jumlahPengangguran2017'])->name('web.jumlahpengangguran2017');
Route::get('/jumlahpendudukmiskin2017', [DashboardWebsiteController::class, 'jumlahPendudukMiskin2017'])->name('web.jumlahpendudukmiskin2017');

Route::get('/jumlahpenduduk2018', [DashboardWebsiteController::class, 'jumlahPenduduk2018'])->name('web.jumlahpenduduk2018');
Route::get('/jumlahpengangguran2018', [DashboardWebsiteController::class, 'jumlahPengangguran2018'])->name('web.jumlahpengangguran2018');
Route::get('/jumlahpendudukmiskin2018', [DashboardWebsiteController::class, 'jumlahPendudukMiskin2018'])->name('web.jumlahpendudukmiskin2018');

Route::get('/jumlahpenduduk2019', [DashboardWebsiteController::class, 'jumlahPenduduk2019'])->name('web.jumlahpenduduk2019');
Route::get('/jumlahpengangguran2019', [DashboardWebsiteController::class, 'jumlahPengangguran2019'])->name('web.jumlahpengangguran2019');
Route::get('/jumlahpendudukmiskin2019', [DashboardWebsiteController::class, 'jumlahPendudukMiskin2019'])->name('web.jumlahpendudukmiskin2019');

Route::get('/jumlahpenduduk2020', [DashboardWebsiteController::class, 'jumlahPenduduk2020'])->name('web.jumlahpenduduk2020');
Route::get('/jumlahpengangguran2020', [DashboardWebsiteController::class, 'jumlahPengangguran2020'])->name('web.jumlahpengangguran2020');
Route::get('/jumlahpendudukmiskin2020', [DashboardWebsiteController::class, 'jumlahPendudukMiskin2020'])->name('web.jumlahpendudukmiskin2020');

Route::get('/visualisasi2017', [DashboardWebsiteController::class, 'visualisasi2017'])->name('web.visualisasi2017');
Route::get('/visualisasi2018', [DashboardWebsiteController::class, 'visualisasi2018'])->name('web.visualisasi2018');
Route::get('/visualisasi2019', [DashboardWebsiteController::class, 'visualisasi2019'])->name('web.visualisasi2019');
Route::get('/visualisasi2020', [DashboardWebsiteController::class, 'visualisasi2020'])->name('web.visualisasi2020');

Route::get('/kesimpulan', [DashboardWebsiteController::class, 'kesimpulan'])->name('web.kesimpulan');

Route::get('/about', [DashboardWebsiteController::class, 'about'])->name('web.about');
//2017 VISUALISASI
//2018
//2019
//2020

//Kesimpulan

//About

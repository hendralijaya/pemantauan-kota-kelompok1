<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.beranda',['title' => 'Welcome to the  Website']);
    }

    public function petaJumlahPenduduk()
    {
        return view('peta.jumlahpenduduk.jumlahpenduduk', ['title' => 'Peta Jumlah Pengangguran di Jawa Barat Tahun 2017 - 2020']);
    }

    public function petaJumlahPengangguran()
    {
        return view('peta.jumlahpengangguran.jumlahpengangguran', ['title' => 'Peta Jumlah Pengangguran di Jawa Barat Tahun 2017 - 2020']);
    }

    public function petaJumlahPendudukMiskin()
    {
        return view('peta.jumlahpendudukmiskin.jumlahpendudukmiskin', ['title' => 'Peta Jumlah Penduduk Miskin di Jawa Barat Tahun 2017 - 2020']);
    }

    public function visualisasiJumlahPenduduk()
    {
        return view('visualisasi.jumlahpenduduk.jumlahpenduduk', ['title' => 'Visualisasi Jumlah Penduduk di Jawa Barat Tahun 2017 - 2020']);
    }

    public function visualisasiJumlahPengangguran()
    {
        return view('visualisasi.jumlahpengangguran.jumlahpengangguran', ['title' => 'Visualisasi Jumlah Pengangguran di Jawa Barat Tahun 2017 - 2020']);
    }

    public function visualisasiJumlahPendudukMiskin()
    {
        return view('visualisasi.jumlahpendudukmiskin.jumlahpendudukmiskin', ['title' => 'Visualisasi Jumlah Penduduk Miskin di Jawa Barat Tahun 2017 - 2020']);
    }

    public function kesimpulan()
    {
        return view();
    }

    public function about()
    {
        return view();
    }
}

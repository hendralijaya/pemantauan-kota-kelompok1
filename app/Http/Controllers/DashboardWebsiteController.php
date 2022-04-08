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
        return view('welcome',['title' => 'Welcome to the  Website']);
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

    public function visualisasiJumlahPenduduk2017()
    {
        return view();
    }

    public function visualisasiJumlahPengangguran2017()
    {
        return view();
    }

    public function visualisasiJumlahPendudukMiskin2017()
    {
        return view();
    }

    public function visualisasiJumlahPenduduk2018()
    {
        return view();
    }

    public function visualisasiJumlahPengangguran2018()
    {
        return view();
    }

    public function visualisasiJumlahPendudukMiskin2018()
    {
        return view();
    }

    public function visualisasiJumlahPenduduk2019()
    {
        return view();
    }

    public function visualisasiJumlahPengangguran2019()
    {
        return view();
    }

    public function visualisasiJumlahPendudukMiskin2019()
    {
        return view();
    }

    public function visualisasiJumlahPenduduk2020()
    {
        return view();
    }

    public function visualisasiJumlahPengangguran2020()
    {
        return view();
    }

    public function visualisasiJumlahPendudukMiskin2020()
    {
        return view();
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

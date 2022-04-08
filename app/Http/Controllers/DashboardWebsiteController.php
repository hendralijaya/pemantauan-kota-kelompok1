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

    public function petaJumlahPenduduk2017()
    {
        return view('peta.jumlahpenduduk.2017', ['title' => 'Peta Jumlah Pengangguran 2017']);
    }

    public function petaJumlahPengangguran2017()
    {
        return view();
    }

    public function petaJumlahPendudukMiskin2017()
    {
        return view();
    }

    public function petaJumlahPenduduk2018()
    {
        return view();
    }

    public function petaJumlahPengangguran2018()
    {
        return view();
    }

    public function petaJumlahPendudukMiskin2018()
    {
        return view();
    }

    public function petaJumlahPenduduk2019()
    {
        return view();
    }

    public function petaJumlahPengangguran2019()
    {
        return view();
    }

    public function petaJumlahPendudukMiskin2019()
    {
        return view();
    }

    public function petaJumlahPenduduk2020()
    {
        return view();
    }

    public function petaJumlahPengangguran2020()
    {
        return view();
    }

    public function petaJumlahPendudukMiskin2020()
    {
        return view();
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

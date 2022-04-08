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

    public function jumlahPenduduk2017()
    {
        return view();
    }

    public function jumlahpengangguran2017()
    {
        return view();
    }

    public function jumlahpendudukmiskin2017()
    {
        return view();
    }

    public function jumlahpenduduk2018()
    {
        return view();
    }

    public function jumlahpengangguran2018()
    {
        return view();
    }

    public function jumlahpendudukmiskin2018()
    {
        return view();
    }

    public function jumlahpenduduk2019()
    {
        return view();
    }

    public function jumlahpengangguran2019()
    {
        return view();
    }

    public function jumlahpendudukmiskin2019()
    {
        return view();
    }

    public function jumlahpenduduk2020()
    {
        return view();
    }

    public function jumlahpengangguran2020()
    {
        return view();
    }

    public function jumlahpendudukmiskin2020()
    {
        return view();
    }

    public function visualisasi2017()
    {
        return view();
    }

    public function visualisasi2018()
    {
        return view();
    }

    public function visualisasi2019()
    {
        return view();
    }

    public function visualisasi2020()
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

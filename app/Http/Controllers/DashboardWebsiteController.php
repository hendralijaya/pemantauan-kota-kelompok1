<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dashboard::all();
        foreach ($data as $d) {
            $d['jumlah_penduduk'] = number_format($d['jumlah_penduduk'],0,',','.');
        }
        return view('dashboard.beranda',[
            'title' => 'Welcome to the  Website',
            'data' => $data
        ]);
    }

    public function petaJumlahPenduduk()
    {
        return view('peta.jumlahpenduduk.jumlahpenduduk', ['title' => 'Peta Jumlah Pengangguran di Jawa Barat Tahun 2016 - 2020']);
    }

    public function petaJumlahPengangguran()
    {
        return view('peta.jumlahpengangguran.jumlahpengangguran', ['title' => 'Peta Jumlah Pengangguran di Jawa Barat Tahun 2017 - 2020']);
    }

    public function petaJumlahPendudukMiskin()
    {
        return view('peta.jumlahpendudukmiskin.jumlahpendudukmiskin', ['title' => 'Peta Jumlah Penduduk Miskin di Jawa Barat Tahun 2016 - 2020']);
    }

    public function petaAngkaHarapanHidup()
    {
        $angkaHarapanHidup = DB::select('SELECT *,
        CASE
        WHEN angka_harapan_hidup > 72 THEN "Diatas rata-rata"
        WHEN angka_harapan_hidup = 72 THEN "rata-rata"
        WHEN angka_harapan_hidup < 72 THEN "Dibawah rata-rata"
        END AS status

        FROM harapan_hidup
        WHERE kabupaten_kota NOT IN( SELECT kabupaten_kota FROM harapan_hidup WHERE kabupaten_kota = "Jawa Barat" )
        ORDER BY tahun ASC, harapan_hidup.angka_harapan_hidup DESC');
        return view('peta.jumlahangkaharapanhidup.jumlahangkaharapanhidup', [
            'title' => 'Peta Angka Harapan Hidup di Jawa Barat Tahun 2016 - 2020',
            'data' => $angkaHarapanHidup
        ]);
    }

    public function kesimpulan()
    {
        return view('dashboard.kesimpulan', ['title' => 'Kesimpulan']);
    }

    public function about()
    {
        return view('dashboard.tentangkami', ['title' => 'Tentang Kami']);
    }
}

@extends('patrials.main') @section('container')
<div id="main">
    <div class="page-heading">
        <h3>Pengangguran di Jawa Barat Tahun 2017-2020</h3>
    </div>

    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="row">
        <div class="col-12">
            <div
                class="tableauPlaceholder"
                id="viz1650705988502"
                style="position: relative; border-radius : 10px"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Peta Jumlah Pengangguran di Jawa Barat (Satuan Jiwa) "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPenganggurandiJawaBaratSatuanJiwa&#47;sheet2&#47;1_rss.png"
                            style="border: none" /></a></noscript
                ><object class="tableauViz" style="display: none">
                    <param
                        name="host_url"
                        value="https%3A%2F%2Fpublic.tableau.com%2F"
                    />
                    <param name="embed_code_version" value="3" />
                    <param name="site_root" value="" />
                    <param
                        name="name"
                        value="PetaJumlahPenganggurandiJawaBaratSatuanJiwa&#47;sheet2"
                    />
                    <param name="tabs" value="no" />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPenganggurandiJawaBaratSatuanJiwa&#47;sheet2&#47;1.png"
                    />
                    <param name="animate_transition" value="yes" />
                    <param name="display_static_image" value="yes" />
                    <param name="display_spinner" value="yes" />
                    <param name="display_overlay" value="yes" />
                    <param name="display_count" value="yes" />
                    <param name="language" value="en-US" />
                    <param name="filter" value="publish=yes" />
                </object>
            </div>
            <script type="text/javascript">
                var divElement = document.getElementById("viz1650705988502");
                var vizElement = divElement.getElementsByTagName("object")[0];
                vizElement.style.width = "100%";
                vizElement.style.height = divElement.offsetWidth * 0.5 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>
        <div class="col-12" style="margin-top: 30px">
            <div
                class="tableauPlaceholder"
                id="viz1650037095958"
                style="position: relative; border-radius: 10px"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Visualisasi Jumlah Pengangguran di Jawa Barat "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur&#47;1_rss.png"
                            style="border: none" /></a></noscript
                ><object class="tableauViz" style="display: none">
                    <param
                        name="host_url"
                        value="https%3A%2F%2Fpublic.tableau.com%2F"
                    />
                    <param name="embed_code_version" value="3" />
                    <param name="site_root" value="" />
                    <param
                        name="name"
                        value="VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur"
                    />
                    <param name="tabs" value="no" />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPenganggurandiJawaBarat&#47;ChartNganggur&#47;1.png"
                    />
                    <param name="animate_transition" value="yes" />
                    <param name="display_static_image" value="yes" />
                    <param name="display_spinner" value="yes" />
                    <param name="display_overlay" value="yes" />
                    <param name="display_count" value="yes" />
                    <param name="language" value="en-US" />
                    <param name="filter" value="publish=yes" />
                </object>
            </div>
            <script type="text/javascript">
                var divElement = document.getElementById("viz1650037095958");
                var vizElement = divElement.getElementsByTagName("object")[0];
                vizElement.style.width = "100%";
                vizElement.style.height = divElement.offsetWidth * 0.5 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>

        <div class="col-12" style="margin-top: 30px">
            <h4>Detail</h4>
            <p style="text-align: justify">
                Berdasarkan hasil pengumpulan data pengangguran provinsi Jawa Barat, tahun 2020 merupakan tahun dimana pertumbuhan
                pengangguran meningkat sangat pesat. Hal ini disebabkan oleh pandemi COVID-19 yang melanda sehingga banyak perusahaan
                yang tutup (gulung tikar), melakukan PHK besar besaran dan banyak usaha yang tidak boleh dibuka seperti hotel,
                pelabuhan, restoran dan masih banyak lainnya.
            </p>

            <p style="text-align: justify">

            </p>
        </div>
        <div class="col-12" style="margin-top: 30px">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-last">
                            <h4>Tabel</h4>
                            <p class="text-subtitle text-muted">Perbandingan Angka Pengangguran di Setiap Wilayah Kabupaten atau Kota di Jawa Barat dengan Rata - Rata Angka Harapan Hidup Provinsi Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Status Angka Pengangguran di Jawa Barat
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Kabupaten atau Kota</th>
                                        <th>Persentase Pengangguran</th>
                                        <th>Jumlah Penduduk Pengangguran</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ( $data as $d)
                                    <tr>
                                        <td>{{ $d->nama_kabupaten_kota }}</td>
                                        <td>{{ $d->persentase_tingkat_pengangguran_terbuka . "%" }}</td>
                                        <td>{{ $d->jumlah_pengangguran_angka . " jiwa" }}</td>
                                        <td>{{ $d->tahun }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        {{-- COBA --}}
        <div class="col-12" style="margin-top: 30px">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-1 order-last">
                            <h4>Tabel</h4>
                            <p class="text-subtitle text-muted">Perbandingan Angka Pengangguran di Setiap Wilayah Kabupaten atau Kota di Jawa Barat dengan Rata - Rata Angka Harapan Hidup Provinsi Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Status Angka Pengangguran di Jawa Barat
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table2">
                                <thead>
                                    <tr>
                                        <th>Nama Kabupaten atau Kota</th>
                                        <th>Persentase Pengangguran</th>
                                        <th>Jumlah Pengangguran</th>
                                        <th>Selisih Pengangguran</th>
                                        <th>Tahun</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $data2018 as $d18)
                                    <tr class="table-light">
                                        <td>{{ $d18->nama_kabupaten_kota }}</td>
                                        <td>{{ $d18->persentase_tingkat_pengangguran_terbuka . "%" }}</td>
                                        <td>{{ $d18->jumlah_pengangguran_angka }}</td>
                                        @forelse ( $data2017 as $d17)
                                            @if ($d18->nama_kabupaten_kota == $d17->nama_kabupaten_kota)
                                            <td>{{ $d18->jumlah_pengangguran_angka - $d17->jumlah_pengangguran_angka }}</td>
                                        <td>{{ $d18->tahun }}</td>
                                        <td class="text-center">
                                            @if ($d18->jumlah_pengangguran_angka - $d17->jumlah_pengangguran_angka > 0)
                                            <span class="badge bg-success">Naik</span>
                                            @elseif ($d18->jumlah_pengangguran_angka - $d17->jumlah_pengangguran_angka < 0)
                                            <span class="badge bg-danger">Turun</span>
                                            @else
                                            <span class="badge bg-warning">Stagnan</span>
                                            @endif
                                            @endif
                                        </td>
                                        @empty
                                        @endforelse
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse
                                    @forelse ( $data2019 as $d19)
                                    <tr class="table-light">
                                        <td>{{ $loop->iteration + 27 }}</td>
                                        <td>{{ $d19->nama_kabupaten_kota }}</td>
                                        <td>{{ $d19->jumlah_pengangguran_angka }}</td>
                                        @forelse ( $data2018 as $d18)
                                            @if ($d19->nama_kabupaten_kota == $d18->nama_kabupaten_kota)
                                            <td>{{ $d19->jumlah_pengangguran_angka - $d18->jumlah_pengangguran_angka }}</td>
                                        <td>{{ $d19->tahun }}</td>
                                        <td class="text-center">
                                            @if ($d19->jumlah_pengangguran_angka - $d18->jumlah_pengangguran_angka > 0)
                                            <span class="badge bg-success">Naik</span>
                                            @elseif ($d19->jumlah_pengangguran_angka - $d18->jumlah_pengangguran_angka < 0)
                                            <span class="badge bg-danger">Turun</span>
                                            @else
                                            <span class="badge bg-warning">Stagnan</span>
                                            @endif
                                            @endif
                                        </td>
                                        @empty
                                        @endforelse
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse
                                    @forelse ( $data2020 as $d20)
                                    <tr class="table-light">
                                        <td>{{ $loop->iteration+54 }}</td>
                                        <td>{{ $d20->nama_kabupaten_kota }}</td>
                                        <td>{{ $d20->jumlah_pengangguran_angka }}</td>
                                        @forelse ( $data2019 as $d19)
                                            @if ($d20->nama_kabupaten_kota == $d19->nama_kabupaten_kota)
                                            <td>{{ $d20->jumlah_pengangguran_angka - $d19->jumlah_pengangguran_angka }}</td>
                                        <td>{{ $d20->tahun }}</td>
                                        <td class="text-center">
                                            @if ($d20->jumlah_pengangguran_angka - $d19->jumlah_pengangguran_angka > 0)
                                            <span class="badge bg-success">Naik</span>
                                            @elseif ($d20->jumlah_pengangguran_angka - $d19->jumlah_pengangguran_angka < 0)
                                            <span class="badge bg-danger">Turun</span>
                                            @else
                                            <span class="badge bg-warning">Stagnan</span>
                                            @endif
                                            @endif
                                        </td>
                                        @empty
                                        @endforelse
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center table-danger">Tidak ada data</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection

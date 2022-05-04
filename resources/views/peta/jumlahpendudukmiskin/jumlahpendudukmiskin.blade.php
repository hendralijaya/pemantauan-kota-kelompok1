@extends('patrials.main') @section('container')
<div id="main">
    <div class="page-heading">
        <h3>Penduduk Miskin di Jawa Barat Tahun 2016-2020</h3>
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
                id="viz1650706392693"
                style="position: relative"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Peta Jumlah Penduduk Miskin di Jawa Barat (Ribuan Jiwa) "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPendudukMiskindiJawaBaratRibuanJiwa&#47;PetaJumlahPendudukMiskin&#47;1_rss.png"
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
                        value="PetaJumlahPendudukMiskindiJawaBaratRibuanJiwa&#47;PetaJumlahPendudukMiskin"
                    />
                    <param name="tabs" value="no" />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaJumlahPendudukMiskindiJawaBaratRibuanJiwa&#47;PetaJumlahPendudukMiskin&#47;1.png"
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
                var divElement = document.getElementById("viz1650706392693");
                var vizElement = divElement.getElementsByTagName("object")[0];
                vizElement.style.width = "100%";
                vizElement.style.height = divElement.offsetWidth * 0.5 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>
        <div class="col-12" style="margin-top: 30px ">
            <div class='tableauPlaceholder' id='viz1651655520031' style='position: relative; border-radius: 10px'><noscript><a href='#'><img
                            alt='Visualisasi Garis Jumlah Penduduk Miskin di Jawa Barat (Ribuan Jiwa) '
                            src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiGarisJumlahPendudukMiskindiJawaBarat2016-2020&#47;ChartGarisMiskin&#47;1_rss.png'
                            style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='VisualisasiGarisJumlahPendudukMiskindiJawaBarat2016-2020&#47;ChartGarisMiskin' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image'
                        value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiGarisJumlahPendudukMiskindiJawaBarat2016-2020&#47;ChartGarisMiskin&#47;1.png' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                    <param name='filter' value='publish=yes' /></object></div>
            <script type='text/javascript'>
                var divElement = document.getElementById('viz1651655520031');
                var vizElement = divElement.getElementsByTagName('object')[0];
                vizElement.style.width = '100%';
                vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>

        <div class="col-12" style="margin-top: 30px">
            <h4>Detail</h4>
            <p style="text-align: justify">
                Berdasarkan data visualisasi di atas, angka kemiskinan penduduk mengalami penurunan dari tahun 2016 sampai 2019 tetapi
                mengalami sedikit lonjakan penaikan pada tahun 2020 dikarenakan pandemi COVID-19 yang melanda seluruh dunia.
                Program pemerintah daerah Jawa Barat sangat efektif dalam menangani kemiskinan yang terjadi di Jawa Barat. Mulai dari
                program yang mengalokasikan anggaran untuk jaminan kesehatan masyarakat kurang mampu melalui BPJS, melakukan perbaikan
                rumah tidak layak huni sampai meningkatkan peran masyarakat dalam pembangunan akses permodalan serta sinkronisasi
                penanggulangan kemiskinan. Selain upaya diatas ada juga program unggulan Pemprov Jabar yaitu Kredit Mesra, One Pesantren
                One Product, One Village One Company, Desa Digital dan program pengembangan kepariwisataan.
            </p>

            <p style="text-align: justify">
                Kota Bogor merupakan kota yang memiliki jumlah angka kemiskinan tertinggi dengan total 465 ribu jiwa pada Tahun 2020 dan Kota
                Banjar memiliki angka kemiskinan terendah dengan total 11 ribu jiwa pada Tahun 2020.
            </p>
        </div>
    </div>
</div>
@endsection

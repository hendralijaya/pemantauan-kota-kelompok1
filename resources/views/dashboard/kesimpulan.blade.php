@extends('patrials.main')
@section('container')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <!-- Kesimpulan dimulai disini -->
    <div class="page-heading">
        <h3>Kesimpulan</h3>
    </div>


    <div class="row">
        {{-- Analisis Penduduk Miskin dan Angka Harapan Hidup Starts --}}
        <div class="col-12 mt-3 mb-1">
            <h4 class="section-title">Penduduk Miskin dan Angka Harapan Hidup</h4>
        </div>
        <div class="col-6">
        <div class='tableauPlaceholder' id='viz1651204402505' style='position: relative; border-radius: 10px;'><noscript><a href='#'><img
                        alt='Visualisasi Jumlah Penduduk Miskin di Jawa Barat (Ribuan Jiwa) '
                        src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin&#47;1_rss.png'
                        style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin' />
                <param name='tabs' value='no' />
                <param name='toolbar' value='yes' />
                <param name='static_image'
                    value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' /></object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1651204402505');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
        </div>
        <div class="col-6">
            <div
                class="tableauPlaceholder"
                id="viz1650037351329"
                style="position: relative; border-radius: 10px"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Visualisasi Angka Harapan Hidup di Jawa Barat "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiAngkaHarapanHidupdiJawaBarat&#47;ChartHarapanHidup&#47;1_rss.png"
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
                        value="VisualisasiAngkaHarapanHidupdiJawaBarat&#47;ChartHarapanHidup"
                    />
                    <param name="tabs" value="no" />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiAngkaHarapanHidupdiJawaBarat&#47;ChartHarapanHidup&#47;1.png"
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
                var divElement = document.getElementById("viz1650037351329");
                var vizElement = divElement.getElementsByTagName("object")[0];
                vizElement.style.width = "100%";
                vizElement.style.height = divElement.offsetWidth * 0.75 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>
        <div class="col-12 mt-3 mb-1">
            <br>
            <h6>Q : Apa hubungan antara angka persentase penduduk miskin dengan angka harapan hidup di Jawa Barat?</h6>
            <p>A : </p>
            <br>
        </div>
        {{-- Analisis Penduduk Miskin dan Angka Harapan Hidup Ends --}}

        {{-- Analisis Penduduk Miskin dan Jumlah Pengangguran Starts --}}
        <div class="col-12 mt-3 mb-1">
            <hr>
            <h4 class="section-title">Penduduk Miskin dan Jumlah Pengangguran di Jawa Barat</h4>
        </div>

        <div class="col-6">
            <div
                class="tableauPlaceholder"
                id="viz1650036456351"
                style="position: relative; border-radius: 10px"
            >
                <noscript
                    ><a href="#"
                        ><img
                            alt="Visualisasi Jumlah Penduduk Miskin di Jawa Barat "
                            src="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin&#47;1_rss.png"
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
                        value="VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin"
                    />
                    <param name="tabs" value="no" />
                    <param name="toolbar" value="yes" />
                    <param
                        name="static_image"
                        value="https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;VisualisasiJumlahPendudukMiskindiJawaBarat&#47;ChartMiskin&#47;1.png"
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
                var divElement = document.getElementById("viz1650036456351");
                var vizElement = divElement.getElementsByTagName("object")[0];
                vizElement.style.width = "100%";
                vizElement.style.height = divElement.offsetWidth * 0.75 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>

        <div class="col-6">
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
                vizElement.style.height = divElement.offsetWidth * 0.75 + "px";
                var scriptElement = document.createElement("script");
                scriptElement.src =
                    "https://public.tableau.com/javascripts/api/viz_v1.js";
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>
        <div class="col-12 mt-3 mb-1">
            <br>
            <h6>Q : Apa hubungan antara angka persentase penduduk miskin dengan jumlah pengangguran di Jawa Barat?</h6>
            <p>A : </p>
            <br>
        </div>
        {{-- Analisis Penduduk Miskin dan Jumlah Pengangguran Ends --}}

        {{-- Analisis Kepadatan Penduduk Starts --}}
        <div class="col-12 mt-3 mb-1">
            <hr>
            <h4 class="section-title">Kepadatan Penduduk di Jawa Barat</h4>
        </div>

        <div class="col-12">
            <div class='tableauPlaceholder' id='viz1651205732469' style='position: relative; border-radius: 10px;'><noscript><a href='#'><img
                        alt='kepadatan penduduk '
                        src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ke&#47;kepadatanpenduduk_16505328031940&#47;Sheet1&#47;1_rss.png'
                        style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='kepadatanpenduduk_16505328031940&#47;Sheet1' />
                <param name='tabs' value='no' />
                <param name='toolbar' value='yes' />
                <param name='static_image'
                    value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ke&#47;kepadatanpenduduk_16505328031940&#47;Sheet1&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
                <param name='filter' value='publish=yes' /></object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1651205732469');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.5) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
        </div>

        <div class="col-12 mt-3 mb-1">
            <br>
            <h6>Q : Bagaimana kepadatan penduduk yang ada di Jawa Barat?</h6>
            <p>A : </p>
            <br>
        </div>
        {{-- Analisis kepadatan Penduduk Ends --}}

        {{-- Solusi Starts --}}
        <div class="col-12 mt-3 mb-1">
            <hr>
            <h4 class="section-title">Saran dan Solusi</h4>
        </div>

        <div class="col-12">
            <p>Dari data pemantuan provinsi Jawa Barat yang kita miliki tentang permasalahan kemiskinan , pengangguran dan angka harapan hidup. Kami sebagai peneliti memiiki beberapa solusi dalam persoalan tersebut sebagai berikut:</p>
            <ol>
                <li>Menciptakan lapangan kerja yang luas untuk warga</li>
                <li>Pembatasan pajak dan retribusi daerah yg dapat merugikan usaha lokal dan warga daerah</li>
                <li>Pemberlakuan/Penyediaan pinjaman modal atau dana kepada warga</li>
            </ol>
        </div>


    </div>
</div>

@endsection

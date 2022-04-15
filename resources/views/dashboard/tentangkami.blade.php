@extends('patrials.main')
@section('container')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <!-- Tentang kami dimulai disini -->
    <div class="page-heading">
        <h3>Tentang Kami</h3>
    </div>

    <div class="row match-height">
        <div class="col-12 mt-3 mb-1">
            <h4 class="section-title">Tentang Proyek</h4>
        </div>
        <div class="col-12">
            <p class="text-justify" style="text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam accusantium, nam omnis quasi, est dignissimos molestias iusto quo perferendis blanditiis ut earum facilis corrupti aliquid culpa quos similique illo nisi sint nihil repellendus doloremque corporis? Quaerat, similique. Assumenda porro quasi consequuntur. Similique sit aliquam qui sequi quae eveniet, tenetur dignissimos sapiente error odio consequuntur? Aperiam saepe autem cumque rem accusamus numquam dignissimos molestias, quidem sapiente quaerat ea blanditiis nobis iste fugit rerum amet, in explicabo aliquid, culpa quo ex eius? Voluptas est nobis ad corrupti molestiae similique blanditiis sint sapiente, illum quasi doloremque fuga vitae placeat voluptatum quae pariatur libero.</p>
        </div>
    </div>

    <!-- Groups section start -->
    <section id="groups">
        <div class="row match-height">
            <div class="col-12 mt-3 mb-1">
                <h4 class="section-title">Anggota Kelompok</h4>
            </div>
        </div>

        <div class="row match-height">
            <div class="col-12">
                <div class="card-group">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/1.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Delvin</h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.</p>
                                <small class="text-muted">NIM : 2110101012</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/2.png"
                                alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Patricia Ho</h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <small class="text-muted">NIM : 2110101015</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/3.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Hendra Lijaya</h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <small class="text-muted">NIM : 2110101023</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/4.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Yogi Valentino Nadeak</h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <small class="text-muted">NIM : 2110101033</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Groups section ends here -->
    <!-- Tentang kami berakhir disini -->
</div>


@endsection

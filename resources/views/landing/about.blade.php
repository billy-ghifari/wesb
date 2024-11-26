@extends('landing.app')


@section('contents')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5  wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">

        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="{{ asset('landing/img/Group 54.png') }}">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">Tentang Kami</p>
                    <h1 class="mb-4">Wisata Edukasi Susu Batu</h1>
                    <p class="mb-4">Dalam upaya mendukung Program Pemerintah Kota Wisata Batu, maka WESB berupaya
                        untuk meningkatkan pelayanannya pada masyarakat, salah satunya adalah dalam bidang pariwisata.
                        Keberadaan Pabrik Susu yang berlokasi di Desa Beil, Kota Batu menjadi sasaran untuk
                        mengembangkan fungsi tersebut, pada beberapa negara maju atau bahkan pada beberapa Kota di
                        Indonesia, saat ini sudah muncul Wisata Edukasi yang berhubungan dengan pabrik makanan dan
                        minuman susu. Apalagi ditunjang keberadaan Kota Batu sebagai sentra dan Destinasi Wisata di Jawa
                        dan Indonesia, halini tentu saia menambah motivasi untuk merencanakan dan membangun Wahana
                        Wisata Edukasi Susu yang berlokasi di Jalan Ir. Soekarno No. 129, Desa Beji, Kec. Junrejo, Kota
                        Batu, Propinsi Jawa Timur.

                </div>
            </div>
        </div>
    </div>
    <div class="bg-rumput">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title bg-white text-start text-primary pe-3">Visi Dan Misi</p>
                        <h1 class="mb-4">Visi Dan Misi Wisata Edukasi Susu Batu (WESB)</h1>
                        <div class="rounded p-4" style="background-color: white ">
                            <h3>VISI:</h3>
                            <p style="
                        color: black;
                    ">Menciptakan sebuah wujud
                                Destinasi Wisata yang memiliki nilai edukasi, budidaya, hiburan yang
                                berkualitas dan modern dalam hal produksi pengolahan hasil peternakan dan pertanian.</p>
                            <h3>MISI:</h3>

                            <p style="
    color: black;
"><i class="fa fa-check text-primary me-3"></i>Mewujudkan destinasi
                                pariwisata Edukasi Susu Batu
                                yang berbasis kreatif, inovatif, budaya, lingkungan, maju berkembang dan mampu menggerakan
                                peningkatan perekonomian masyarakat yang berkelanjutan.</p>
                            <p style="
    color: black;
"><i class="fa fa-check text-primary me-3"></i>Meningkatkan
                                kualitas
                                obyek dan daya tarik Wisata
                                Edukasi Susu 8
                                Jaringan Pemasaran Pariwisata di Kota Batu.</p>
                            <p style="
    color: black;
"><i class="fa fa-check text-primary me-3"></i>Meningkatkan
                                pengetahuan
                                masyarakat tentang
                                pengelolahan susu yang berkualitas.</p>
                            <p style="
    color: black;
"><i class="fa fa-check text-primary me-3"></i>Meningkatkan
                                pembinaan,
                                pelestarian, dan
                                pengembangan Kebudayaan Daerah.</p>
                            <p style="
    color: black;
"><i class="fa fa-check text-primary me-3"></i>Meningkatkan Sumber
                                Daya
                                Manusia (SD) dan Sumber
                                Daya Alam
                                (SDA) yang berkualitas dan berkembang.</p>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <div class="rounded overflow-hidden">
                            <img class="img-fluid mb-4" src="{{ asset('landing/img/Group 60.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection

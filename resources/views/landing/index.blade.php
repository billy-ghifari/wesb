@extends('landing.app')


@section('contents')
    <!-- Carousel Start -->
    <div class="container-fluid banner px-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($data_banner as $key => $dp_banner)
                    @if ($key === 0)
                        <div class="carousel-item active ">
                        @else
                            <div class="carousel-item">
                    @endif

                    <img class="w-100" style="height: 850px; object-fit: fill;"
                        src="{{ asset('/images_banner') . '/' . $dp_banner->img_banner }}" alt="Image">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <!-- Carousel End -->


    <!-- Servic"e Start -->
    <div class="bg-sapi">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title  text-center text-white px-3 fw-bold">Paket Edukasi</p>
                    <h1 class="mb-5 text-white">Paket Edukasi di Wisata Edukasi Susu Batu</h1>
                </div>
                <div class="row gy-5 gx-4">
                    @foreach ($data_paket as $dp_post)
                        <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item bg-white d-flex h-100">
                                <div class="service-text p-5 pt-0">
                                    <div class="service-icon">
                                        <img class="img-fluid rounded-circle"
                                            src="{{ asset('/images_paket') . '/' . $dp_post->img_paket }}" alt="">
                                    </div>
                                    <h5 class="mb-3">{{ $dp_post->nama_paket }}</h4>
                                        <p class="mb-4">{{ $dp_post->deskripsi_paket }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Gallery Start -->
    <div class="container py-5">
        <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[0]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[1]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[2]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[3]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[4]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[5]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[6]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[7]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="{{ asset('/images_kegiatan') . '/' .$data_galery[8]->img_kegiatan }}" class="img-fluid" alt="image">
                </div>
        </div>
    </div>

    <!-- Gallery End -->
    <div class="bg-rumput">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title  text-center text-black fw-bold px-3">Artikel</p>
                    <h1 class="mb-5">Artikel Menarik Seputar WESB</h1>
                </div>
                <div class="row gy-5 gx-4">
                    @foreach ($data_artikel as $post)
                        <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item bg-white d-flex h-100">
                                <div class="service-text p-5 pt-0">
                                    <img class="rounded mx-auto my-4"
                                        style="height: 200px !important; width: 100% !important; object-fit: cover;"
                                        src="{{ asset('/images_artikel') . '/' . $post->img_post }}" alt="">
                                    <h5 class="mb-3">{{ $post->judul_post }}</h4>
                                        {!! Str::limit( strip_tags( $post->isi_post ), 50 ) !!}
                                        <a class="btn btn-square rounded-circle mt-4"
                                            href="{{ route('post.artikeldetail', $post->id) }}"><i
                                                class="bi bi-chevron-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="d-flex justify-content-center float-center"><a
                        class="btn btn-secondary rounded-pill py-3 px-5 mt-3"
                        href="{{ route('landing.artikelall') }}">Lihat Semua</a></div>

            </div>
        </div>
    </div>
@endsection

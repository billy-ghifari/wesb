@extends('landing.app')


@section('contents')
    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Produk Kami</p>
                <h1 class="mb-5">Produk Unggulan Wisata Edukasi Susu Batu</h1>
            </div>
            <div class="row gx-4">
                @foreach ($data_produk as $produk)
                    <div class="col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item" style="height:450px">
                            <div class="position-relative">
                               
                                <img class="img-fluid" src="{{ asset('/images_produk') . '/' . $produk->img_produk }}"
                                    alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="">{{ $produk->nama_produk }}</a>
                                <span class="text-primary me-1">{{ $produk->deskripsi_produk }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection

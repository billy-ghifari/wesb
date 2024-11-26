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
                        <div class="product-item" style="height:100%" data-bs-toggle="modal"
                            data-bs-target="#Produk{{ $produk->id }}">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('images_produk') . '/' . $produk->img_produk[0] }}"
                                    alt="">
                            </div>
                            <div class="text-center p-4">
                                <div class="d-block h5">{{ $produk->nama_produk }}</div>
                                <span class="text-primary me-1">{{ $produk->deskripsi_produk }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Product End -->
    @if (isset($data_produk))
        @foreach ($data_produk as $produk)
            <!-- Modal -->
            <div class="modal fade" id="Produk{{ $produk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $produk->nama_produk }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselproduk{{ $produk->id }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($produk->img_produk as $key => $image)
                                    @if($key === 0)
                                    <div class="carousel-item active ">
                                        @else
                                        <div class="carousel-item">
                                    @endif
                                            <img src="{{ asset('/images_produk' . '/' . $image) }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselproduk{{ $produk->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselproduk{{ $produk->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
    @endif

@endsection

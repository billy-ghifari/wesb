@extends('landing.app')


@section('contents')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    </div>
    <!-- Page Header End -->
    <!-- Product Start -->
    <div class="bg-rumput">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Artikel Dan Berita</p>
                    <h1 class="mb-5">Artikel Dan Berita Seputar WESB</h1>
                </div>
                <div class="row gy-5 gx-4">
                    @foreach ($data_artikel as $post)
                        <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item bg-white d-flex h-100">
                                <div class="service-text p-5 pt-0">
                                    <img class="rounded mx-auto my-4"
                                        style="height: 200px !important; width: 100% !important; object-fit: cover;"
                                        src="{{ asset('/images_artikel') . '/' . $post->img_post }}" alt="">
                                    <h4 class="mb-3">{{ $post->judul_post}}</h4>
                                    @if ($post->kategori == "Artikel")
                                    <h5 class="badge bg-info text-white"> {{$post->kategori}}</h5>
                                    @else
                                    <h5 class="badge bg-primary text-white"> {{$post->kategori}}</h5>
                                    @endif
                                    
                                    {!! Str::limit( strip_tags( $post->isi_post ), 50 ) !!}
                                        <a class="btn btn-square rounded-circle" href="{{route('post.artikeldetail',$post->id )}}"><i
                                                class="bi bi-chevron-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex my-4 justify-content-left float-left">
                    <div class="my-4 mx-4">
                        {!! $data_artikel->links() !!}
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
    <!-- Product End -->
@endsection

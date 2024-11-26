@extends('landing.app')


@section('contents')
    <!-- Product Start -->
    <div class="bg-rumput">
    <div class="container-xxl py-5">
        <div class="container">
            <center><img class="rounded mx-auto d-block" style="height:300px !important; widht:auto;" src="{{ asset('/images_artikel') . '/' . $data_post->img_post }}"
                alt=""></center>
            <div class="mt-4 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-5">{{ $data_post->judul_post }}</h1>
            </div>
            
            <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class=" product-item" style="height:auto; width :700px; background-color:white;">
                    <div class="position-relative">
                        <div class="text-left p-4">
                            {!! $data_post->isi_post !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Product End -->
@endsection

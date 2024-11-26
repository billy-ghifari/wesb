@extends('landing.app')


@section('contents')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Kontak Kami</p>
                <h1 class="mb-5">Informasi Seputar Wisata Edukasi Susu Batu</h1>
            </div>
            <div class="d-flex row g-5 justify-content-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Butuh Informasi Lebih lanjut?</h3>
                    <p class="mb-4">Jika membutuhkan informasi terkait paket, harga atau pun Informasi
                        lainnya, silahkan isi formulir berikut.
                        </p>
                    <form action="{{  route('landing.actdtpengguna') }}" method="POST" >
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nama_pengguna" id="name" placeholder="Your Name">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email_pengguna" id="email" placeholder="Your Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="nomor_pengguna" placeholder="Subject">
                                    <label for="subject">Nomor yang bisa dihubungi</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="kritik my-2">Kritik Dan Saran</label>
                                <div class="form-floating">
                                    <textarea  id="kritik" style="width:100%" name="kritik_pengguna" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center float-center">
                                <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @endsection

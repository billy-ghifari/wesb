<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WESB - Wisata Edukasi Susu Batu </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="google-site-verification" content="kFcC2MeI4Nvz8p3B5aVv3_NCgAxdAcUTGjb6ULS1WYc" />

    <!-- Favicon -->
    <link href="{{ asset('landing/img/logo wesb.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <div class="container-xxl">
            <a href="{{ route('landing.index') }}" class="navbar-brand d-flex align-items-center">
                <img class="w-100" src="{{ asset('landing/img/logo wesb.png') }}" alt="Image">
                <img class="px-2 img-fluid " src="{{ asset('landing/img/Wisata Edukasi Susu Batu.png') }}">
                <!-- <h1 class="m-0">Milky</h1> -->
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('landing.index') }}" class="nav-item nav-link text-white fw-bold">Beranda</a>
                    <a href="{{ route('landing.tentang') }}" class="nav-item nav-link text-white fw-bold">Tentang</a>
                    <a href="{{ route('landing.produk') }}" class="nav-item nav-link text-white fw-bold">Produk</a>
                    <a href="{{ route('landing.kontak') }}" class="nav-item nav-link text-white fw-bold">Kontak</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('contents')


    <!-- Footer Start -->
    <div class="bg-green">
        <div class="container-xxl py-5 ">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title-white  text-white text-center text-primary px-3">Kontak Kami</p>
                    <h1 class="mb-5 text-white">Informasi lebih lanjut, Silahkan hubungi kami</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="w-100 rounded"
                            src="https://maps.google.com/maps?q=Wisata Edukasi Susu Batu, Jl. Ir. Soekarno No.129, Beji, Kec. Junrejo, Kota Batu, Jawa Timur 65236&t=&z=16&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="min-height: 430px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="mb-4" src="img/Group 61.png" alt="" srcset="">
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                                <i class="fa fa-map-marker-alt text-body"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white">Jl. Ir. Soekarno No.129, Beji, Kec. Junrejo, Kota Batu, Jawa
                                    Timur 65236</h6>
                            </div>
                        </div>
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                                <i class="fab fa-tiktok text-body"></i>
                            </div>
                            <div class="ms-3 mt-auto">
                                <h6 class="text-white">@wesbbatu</h6>
                            </div>
                        </div>
                        <div class="d-flex border-bottom pb-3 mb-3 mt-auto">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                                <i class="fab fa-instagram text-body"></i>
                            </div>
                            <div class="ms-3 mt-auto">
                                <h6 class="text-white">@wesbbatu</h6>
                                <h6 class="text-white">@marketing.wesbbatu</h6>
                                <h6 class="text-white">@rumahsusuweb</h6>
                            </div>
                        </div>
                        <div class="d-flex border-bottom-0 pb-3 mb-3">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                                <i class="fa fa-envelope text-body"></i>
                            </div>
                            <div class="ms-3  mt-auto">
                                <h6 class="text-white">marketingwesb@gmail.com</h6>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="text-center  mb-3 mx-auto">
                    &copy; <a class="fw-semi-bold text-white" href="{{ route('landing.index') }}">Wisata Edukasi Susu
                        Batu (WESB)</a> All Right
                    Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#header-carousel" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    <a href="https://api.whatsapp.com/send?phone=6285859953503"
        class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('landing/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>

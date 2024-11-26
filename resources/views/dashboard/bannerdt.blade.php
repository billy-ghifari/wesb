@extends('dashboard.app')
@section('contents')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ route('logout') }}" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h6>Data Banner Slide</h6>
                                <div class="justify-content-end">
                                    <a class="btn btn-primary" href="{{ route('post.addbanner') }}"> Tambah</a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Gambar</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banner as $post)
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-align-center">
                                                        <img src="{{ asset('/images_banner') . '/' . $post->img_banner }}"
                                                            style="width :200px; object-fit: cover;"; height="100px";
                                                            alt="user1">
                                                    </div>

                                                </td>
                                                <td class="justify-content-center align-middle">
                                                    <a href="{{ route('post.editbanner', $post->id ) }}"
                                                        class="btn btn-info font-weight-bold text-xs mx-2"
                                                        >
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('post.deletebanner', $post->id ) }}"
                                                        class="btn btn-danger font-weight-bold text-xs mx-2"
                                                        >
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                           
                                        @endforeach
                                        
                                    </tbody>
                                    
                                </table>
                                <div class="d-flex mx-4">
                                    {!! $banner->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection

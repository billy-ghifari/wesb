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
                                <h6>{{ isset($data_paket) ? 'Edit Data Paket' : 'Tambah Data Paket' }}</h6>
                                <div class="justify-content-end">

                                </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body px-3 pt-0 pb-2">
                            <form action="{{ isset($data_paket) ? route('post.acteditpaket',$data_paket->id) : route('post.actdtpaket') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Paket</label>
		
                                    <input class="form-control" type="text" name="nama_paket" required="" value="{{ isset($data_paket) ? $data_paket->nama_paket : '' }}"  id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi Paket</label>
                                    <textarea class="form-control" name="deskripsi_paket" required="" id="exampleFormControlTextarea1" rows="3">{{ isset($data_paket) ? $data_paket->deskripsi_paket : '' }}</textarea>
                                </div>
                                @if(isset($data_paket))
                                <div class="d-flex justify-align-center">
                                    <img src="{{ asset('/images_paket') . '/' . $data_paket->img_paket }}"
                                        style="width :200px; object-fit: cover;"; height="200px";
                                        alt="user1">
                                </div>
                                @endif
                                 
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Gambar Paket (Rasio 3:3)</label>
                                    <input class="form-control" type="file"   name="img_paket" id="formFile">
                                </div>
                               
                                <button type="submit" class="btn btn-primary">{{ isset($data_paket) ? 'Edit Data' : ' Tambah' }}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection

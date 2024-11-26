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
                                <h6>{{ isset($data_post) ? 'Edit Data Artikel/Berita' : 'Tambah Data Artikel/Berita' }}</h6>
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
                            <form action="{{ isset($data_post) ? route('post.acteditpost',$data_post->id) : route('post.actdtpost') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Judul</label>
		
                                    <input class="form-control" type="text" name="judul_post" required="" value="{{ isset($data_post) ? $data_post->judul_post : '' }}"  id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
		
                                    <textarea class="form-control" id="editor" name="isi_post"  rows="10" cols="50">{{ isset($data_post) ? $data_post->isi_post : '' }}</textarea>
                                </div>
                                <img class="rounded d-block" width="100px" height="auto"  src="{{ isset($data_post) ? asset('/images_artikel') . '/' . $data_post->img_post : "" }}"
                                alt="">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Gambar (Rasio 5:4)</label>
                                    <input class="form-control" type="file"  name="img_post" id="formFile">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Kategori</label>
                                    <select class="form-select" name="kategori" aria-label="Default select example">
                                        <option selected disabled>Silahkan Pilih</option>
                                        <option value="Artikel">Artikel</option>
                                        <option value="Berita">Berita</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ isset($data_post) ? 'Edit Data' : ' Tambah' }}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

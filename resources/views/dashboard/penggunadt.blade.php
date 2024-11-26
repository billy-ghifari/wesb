@extends('dashboard.app')
@section('contents')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">

                    <h4 class="font-weight-bolder mb-0">Dashboard</h4>
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
                                <h6>Data Pengguna</h6>

                            </div>
                        </div>
                        <div class="card-body px-3 pt-0 pb-2">
                            <div class="table">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Kritik Dan saran</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penggunas as $pengguna)
                                      <tr>
                                        <td>
                                            <p class=" text-center">{{ $pengguna->nama_pengguna }}</p>
                                        </td>
                                        <td>
                                            <p class=" text-center">{{ $pengguna->email_pengguna }}</p>
                                        </td>
                                        <td>
                                            <p class=" text-center">{{ $pengguna->nomor_pengguna }}</p>
                                        </td>
                                        <td class="text-left">
                                          <p >{{ $pengguna->kritik_pengguna }}</p>  
                                        </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>

                            </div>
                            {{-- <div class="p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                style="width:100px">
                                                Nama</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                                style="width:100px">
                                                Email</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                style="width:100px">
                                                Nomor</th>
                                            <th style="width: 100px !important;"
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                                Kriik Dan Saran</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penggunas as $pengguna)
                                            <tr>

                                                <td>
                                                    <p class=" text-center">{{ $pengguna->nama_pengguna }}</p>
                                                </td>
                                                <td>
                                                    <p class=" text-center">{{ $pengguna->email_pengguna }}</p>
                                                </td>
                                                <td>
                                                    <p class=" text-center">{{ $pengguna->nomor_pengguna }}</p>
                                                </td>
                                                <td style="width: 50px !important; ">
                                                  <p style="overflow-wrap: break-word; ">{{ $pengguna->kritik_pengguna }}</p>  
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="d-flex mx-4">
                                    {!! $penggunas->links() !!}
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('frontend.masterFrontend')
@section('title', 'Home Page')

@section('frontend')

{{-- ALERT BERHASIL --}}
    @if (session()->has('validasi'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('validasi') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session::has('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ Session::get('sukses') }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- ALERT GAGAL --}}
    @if (session()->has('validasi'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session()->get('validasi') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session::has('eror'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>{{ Session::get('eror') }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container" id="content">
        <marquee id="marquee"><strong>~ JANGAN SAMPE KETINGGALAN, YUK SEGERA DAFTARKAN ANDA DI EVENT INI SEBELUM KEHABISAN !
                ~</strong></marquee>
        <h1 id="judull">Silahkan Mendaftar</h1>
        <hr>
        <div class="content" style="margin-top: 3rem;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 zoom-effect">
                        <div class="border kotak" id="border">
                            <img src="{{ asset('assets/img/Desain tanpa judul.png') }}" alt=""
                                style="margin-top: 5rem; width:200px;">
                            <h2 style="font-size: 20px">Wajib Lihat Sebelum Mendaftar !</h2>
                            <br>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#staticBackdrop"
                                id="btn-form"><strong>Info</strong></button>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 style="text-align: center">Informasi Event</h5>
                                            <hr>
                                            <div class="ct" style="text-align: left">
                                                <h6>Gathering Gebrak</h6>
                                                <li>Kode : 1</li>
                                                <li>Tanggal : 20 Desember 2020</li>
                                                <li>Jam : 10:00 - 21:00 WIB</li>
                                                <li>Lokasi : Cipondoh</li>
                                                <br>
                                                <h6>Gathering Gebruk</h6>
                                                <li>Kode : 2</li>
                                                <li>Tanggal : 25 Desember 2020</li>
                                                <li>Jam : 10:00 - 21:00 WIB</li>
                                                <li>Lokasi : Jakarta</li>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 zoom-effect">
                        <div class="border kotak" id="border">
                            <img src="{{ asset('assets/img/Desain tanpa judul.png') }}" alt=""
                                style="margin-top: 5rem; width:200px;">
                            <h2 style="font-size: 20px">Silahkan Daftar Di bawah sini !</h2>
                            <br>
                            <a href="{{ route('pendaftaran') }}" class="btn btn-light"><i class="fa fa-upload">&nbsp;
                                    Daftar</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

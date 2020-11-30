@extends('frontend.masterFrontend')
@section('title', 'Home Page')
 
 @section('frontend')
 <!-- Jumbotron -->
 <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <marquee id="marquee"><strong>~ JANGAN SAMPE KETINGGALAN, YUK SEGERA DAFTARKAN ANDA DI EVENT INI SEBELUM KEHABISAN ! ~</strong></marquee>
        <h1 class="display-4">Selamat Datang <span>Di Home Page</span><br> Event <span>Gebrak Gebruk</span></h1>
        <!-- <a href="" class="btn btn-primary tombol">Our Work </a> -->
    </div>
</div>

<!-- Info panel -->
<div class="container" id="info">
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <h5 id="h5">" Jaga lah kebersihan dan selalu 3M : <br> (MENCUCI TANGAN, MEMAKAI MASKER, MENJAGA
                        JARAK)."</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Panel  -->


@endsection
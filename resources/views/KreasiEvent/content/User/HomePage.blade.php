@extends('KreasiEvent.masteruser')
@section('title','KreasiEvent')

@section('KreasiEvent.content.User')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/img/event1.jpg')}}" class="d-block w-100" id="img-crs" alt="img_crsevent">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/event2.jpg')}}" class="d-block w-100" id="img-crs" alt="img_crsevent">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/event3.jpg')}}" class="d-block w-100" id="img-crs" alt="img_crsevent">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- content --}}
    <div class="container" id="ctn-home1">
        <div class="row-align-items" id="row-home1-1">
            <h1 id="p-home1">SELAMAT DATANG DI <br> KreasiEvent</h1>
            <p class="text-center" id="p-home2">Tempat terpercaya bagi anda <br> untuk Event yang lebih menarik dan tertata dengan baik</p>
            <hr id="garis-home">
        </div>
        <div class="row" id="row-home1-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
                    <h1 id="p-home3">VISI</h1>
                    <hr id="garis-home1">
                    <p id="p-home4">TERWUJUDNYA Perusahaan yang CERDAS, TERAMPIL, MANDIRI DAN BERWAWASAN GLOBAL</p>
                    <h1 id="p-home5">MISI</h1>
                    <hr id="garis-home1">
                    <p id="p-home6">Kami bertujuan untuk memberikan pelayanan terbaik dari kami untuk kepuasan Client</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{asset('assets/img/event5.png')}}" alt="" id="img-home1">
            </div>
        </div>
        <div class="row" id="row-home1-3">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{asset('assets/img/ceo.jpg')}}" alt="" id="img-home2">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                    <h1 id="p-home8">SAMBUTAN CEO</h1>
                    <p id="p-home9">
                        Kami mengucapkan selamat datang di Website kami Kreasi Creator Event yang saya 
                        tujukan untuk seluruh masyarakat guna dapat mengakses seluruh informasi 
                        tentang segala profil, aktifitas/kegiatan serta dokumentasi Perusahaan kami. Kami selaku pimpinan sekolah mengucapkan 
                        terima kasih kepada tim pembuat Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal 
                        yang dimiliki oleh Perusahaan.
                    </p>
                    <p id="p-home10">Hormat Kami,<br>
                        Dian Sastro
                    </p>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="ctn-home3">
        <h1 id="p-home13" class="text-center">Layanan Event Kami</h1>
        <p class="text-center" id="p-home14">Inilah Event yang tersedia di Kreasi Creator Event</p>
        
        <div class="row" id="row-home3-2">
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                          <img src="{{asset('assets/img/event1.jpg')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" id="p-home14">Event 1</h5>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                          <img src="{{asset('assets/img/event2.jpg')}}" class="card-img-top img-sekolah" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" id="p-home14">Event2</h5>
                          </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                          <img src="{{asset('assets/img/event3.jpg')}}" class="card-img-top img-sekolah" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" id="p-home14">Event3</h5>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                          <img src="{{asset('assets/img/event4.jpg')}}" class="card-img-top img-sekolah" alt="...">
                          <div class="card-body">
                            <h5 class="card-title" id="p-home14">Event4</h5>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
        </div>
    </div>

    <div class="container" id="ctn-home5">
        <div class="row" id="row-home5-1">
            <div class="card-deck">
                <div class="card">
                  <img src="{{asset('assets/img/event1.jpg')}}" class="card-img-top" id="fotoakhir1" alt="fotoakhir">
                </div>
                <div class="card">
                  <img src="{{asset('assets/img/event2.jpg')}}" class="card-img-top" alt="fotoakhir">
                </div>
                <div class="card">
                  <img src="{{asset('assets/img/event3.jpg')}}" class="card-img-top" id="fotoakhir1" alt="fotoakhir">
                </div>
              </div>
        </div>
        <div class="row" id="row-home5-2">
            <div class="card-deck">
                <div class="card">
                  <img src="{{asset('assets/img/event4.jpg')}}" class="card-img-top" alt="fotoakhir">
                </div>
                <div class="card">
                  <img src="{{asset('assets/img/event5.png')}}" class="card-img-top" alt="fotoakhir">
                </div>
                <div class="card">
                  <img src="{{asset('assets/img/event6.jpg')}}" class="card-img-top" alt="fotoakhir">
                </div>
              </div>
        </div>
    </div>

@endsection
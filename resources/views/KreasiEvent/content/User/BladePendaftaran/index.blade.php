@extends('KreasiEvent.masteruser')
@section('title','Pendaftaran Event')

@section('KreasiEvent.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/event1.jpg')}}" class="card-img img-pendaftaranevent" alt="fotoevent">
    <div class="card-img-overlay">
      <h1 class="card-title text-center title-pendaftaran">Welcome to <br> KreasiEvent</h1>
      <hr id="grs-pendaftaran">
    </div>
</div>
<div class="container" id="index-pendaftaranevent">
    @if (session()->has('validasi'))
    <div class="alert alert-success">
        {{ session()->get('validasi') }}
    </div>
    @endif
    @if (Session::has('sukses'))
        <div class="alert alert-success">
            <p>{{ Session::get('sukses') }}</p>
        </div>
    @endif
    <div class="card" id="card-pendaftaranevent1">
        <div class="card-body">
            <p id="p-pendaftaranevent1">
                Kami adalah Event Organizer yang memiliki kreativitas untuk membuat eventmu lebih menarik.
                <br><br>
                Selamat Bergabung Di KreasiEvent
            </p><br>
            <p id="p-pendaftaranevent2">
                Hormat Kami,
                <br><br>
                <span id="p-pendaftaranevent3">KreasiEvent</span>
            </p>
        </div>
    </div>
    <div class="row-align-items-center" id="row-pendaftaran1">
        <a href="{{route('form.pendaftaranevent')}}" id="btn-pendaftaran"><button class="btn btn-primary btn-lg btn-pendaftaran">DAFTAR &nbsp;<i class='fas fa-chalkboard-teacher'></i></button></a>
    </div>
</div>
@endsection
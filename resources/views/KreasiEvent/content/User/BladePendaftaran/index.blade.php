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
                Selamat Bergabung Di Kreasi Event
            </p><br>
            <p id="p-pendaftaranevent2">
                Hormat Kami,
                <br><br>
                <span id="p-pendaftaranevent3">KreasiEvent</span>
            </p>
            <p id="p-pendaftaranevent4">Informasi Event :</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Click here
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <p id="p-modal1">Event 1</p>
                        <ul>
                            <li>Event name : Deserunt ea est.</li>
                            <li>Event Category : 8</li>
                            <li>Event Location : 39328 Braun Courts Apt. 044Lakinview, IA 85701-6682</li>
                            <li>Event Date : 2020-12-08 20:33:59</li>
                            <li>Event Description : Atque ut ducimus numquam quia esse aliquid et minima. Officia molestias eos et doloremque 
                                itaque porro. Placeat quis provident nulla culpa aliquid voluptatem. Molestias et sapiente fuga omnis. Similique 
                                similique voluptate doloribus minima illum id. Quisquam qui velit voluptatibus vel ut.
                            </li>
                        </ul>
                        <p id="p-modal2">Event 2</p>
                        <ul>
                            <li>Event name : Fugiat vero earum.</li>
                            <li>Event Category : 3</li>
                            <li>Event Location : 7915 Norma Turnpike Maryfort, TN 53304-4123</li>
                            <li>Event Date : 2020-12-09 19:23:45</li>
                            <li>Event Description : Quia dolores autem dolores quo fuga. Non fugit 
                                optio dolor veniam dicta explicabo mollitia perspiciatis. Nihil neque ea velit 
                                consectetur error laboriosam.
                            </li>
                        </ul>
                       
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row-align-items-center" id="row-pendaftaran1">
        <a href="{{route('form.pendaftaranevent')}}" id="btn-pendaftaran"><button class="btn btn-primary btn-lg btn-pendaftaran">DAFTAR &nbsp;<i class='fas fa-chalkboard-teacher'></i></button></a>
    </div>
</div>
<script>
 
    $(function (){
        $('[data-toggle="popover"]').popover();
    });

   </script>
@endsection
@extends('KreasiEvent.masteruser')
@section('title','Form Pendaftaran Event')

@section('KreasiEvent.content.User')
<div class="card bg-dark text-white">
    <img src="{{asset('assets/img/event5.png')}}" class="card-img img-pendaftaranevent" alt="fotoevent">
    <div class="card-img-overlay">
      <h1 class="card-title text-center title-pendaftaran">Come Join Us</h1>
      <hr id="grs-pendaftaran">
    </div>
</div>
<form action="{{route('formevent.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container" id="ctn-formevent">
        <div class="card" id="card-formevent2">
            <div class="card-header ch-2" style="background-color: #002244">
                Form Pendaftaran Event
            </div>
            <div class="card-body">
                <p id="p-formevent1">Biodata Calon Peserta Event</p>
                <hr>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group row" id="form-biodatapegawai1">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="posisi_lamaran_id">Nama</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your Full Name">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai2">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="nama_calon_pegawai">Umur</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai3">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="tanggal_lahir">Email</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai4">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="jenis_kelamin_id">Phone Number</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Your Phone Number">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapegawai5">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="img_pegawai">Profesion</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('profesion') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="profesion" name="profesion" placeholder="Your profesion">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('ANDA YAKIN UNTUK DATA SUDAH DIISI BENAR ?')">Upload</button>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

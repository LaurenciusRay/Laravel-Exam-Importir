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
                        <div class="form-group row" id="form-biodatapeserta1">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="full_name">Nama</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your Full Name">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapeserta2">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="age">Umur</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapeserta3">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="email">Email</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapeserta4">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="phone_number">Phone Number</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Your Phone Number">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" id="form-biodatapeserta5">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="profession">Profesion</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group{{ $errors->has('profesion') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" id="profesion" name="profesion" placeholder="Your profesion">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" id="form-biodatapeserta6">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="event_id">Event 1</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <select name="event_id" {{ $listperson >=2 ? 'disabled' : '' }} id="event_id" class="custom-select">
                                    <option value="">
                                        Choose Event
                                    </option>
                                    @foreach ($data_event as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->event_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($listperson >= 2)
                                    <span class="help-block text-warning">
                                        <strong>Kuota event sudah penuh</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row" id="form-biodatapeserta6">
                            <label class="col-lg-4 col-md-4 col-sm-4 col-form-label" for="event_dua_id">Event 2</label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <select name="event_dua_id" {{ $listpersons >=2 ? 'disabled' : '' }} id="event_dua_id" class="custom-select">
                                    <option value="">
                                        Choose Event
                                    </option>
                                    @foreach ($data_events as $items)
                                        <option value="{{ $items->id }}">
                                            {{ $items->event_names }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($listpersons >= 2)
                                <span class="help-block text-warning">
                                    <strong>Kuota event sudah penuh</strong>
                                </span>
                            @endif
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

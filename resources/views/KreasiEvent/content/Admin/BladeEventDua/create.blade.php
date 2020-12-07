@extends('KreasiEvent.masteradmin')
@section('title','Input Data Event')

@section('KreasiEvent.content.Admin')
    <div class="container ctn-create" id="create-event">
        <h2 id="h2-create">Input Event</h2>
        <h2 id="h2-create">Kreasi Creator Event</h2>
        <hr>
        <form action="{{ route('eventdua.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('event_names') ? ' has-error' : '' }}">
                <label for="event_names">Nama Event</label>
                <input type="text" class="form-control" id="event_names" name="event_names">
            </div>
            <div class="form-group{{ $errors->has('event_categorys') ? ' has-error' : '' }}">
                <label for="event_categorys">Event Category</label>
                <input type="text" class="form-control" id="event_categorys" name="event_categorys">
            </div>
            <div class="form-group{{ $errors->has('event_locations') ? ' has-error' : '' }}">
                <label for="event_locations">Lokasi Event</label>
                <input type="text" class="form-control" id="event_locations" name="event_locations">
            </div>
            <div class="form-group{{ $errors->has('event_dates') ? ' has-error' : '' }}">
                <label for="event_dates">Tanggal Event</label>
                <input type="text" class="form-control" id="event_dates" name="event_dates">
            </div>
            <div class="form-group{{ $errors->has('event_descriptions') ? ' has-error' : '' }}">
                <label for="event_descriptions">Deskripsi Event</label>
                <input type="text" class="form-control" id="event_descriptions" name="event_descriptions">
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA YANG DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('eventdua.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>
@endsection

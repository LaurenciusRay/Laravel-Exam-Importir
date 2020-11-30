@extends('KreasiEvent.masteradmin')
@section('title','Input Data Event')

@section('KreasiEvent.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>
    <div class="container mt-3" id="create-event">
        <h2 id="h2-create">Input Event</h2>
        <h2 id="h2-create">Kreasi Creator Event</h2>
        <hr>
        <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('event_name') ? ' has-error' : '' }}">
                <label for="event_name">Nama Event</label>
                <input type="text" class="form-control" id="event_name" name="event_name">
            </div>
            <div class="form-group{{ $errors->has('event_category') ? ' has-error' : '' }}">
                <label for="event_category">Event Category</label>
                <input type="text" class="form-control" id="event_category" name="event_category">
            </div>
            <div class="form-group{{ $errors->has('event_location') ? ' has-error' : '' }}">
                <label for="event_location">Lokasi Event</label>
                <input type="text" class="form-control" id="event_location" name="event_location">
            </div>
            <div class="form-group{{ $errors->has('event_date') ? ' has-error' : '' }}">
                <label for="event_date">Tanggal Event</label>
                <input type="text" class="form-control" id="event_date" name="event_date">
            </div>
            <div class="form-group{{ $errors->has('event_description') ? ' has-error' : '' }}">
                <label for="event_description">Deskripsi Event</label>
                <input type="text" class="form-control" id="event_description" name="event_description">
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA YANG DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('event.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>
@endsection

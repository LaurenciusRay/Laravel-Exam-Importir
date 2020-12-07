@extends('KreasiEvent.masteradmin')
@section('title', 'Edit Data Event')

@section('KreasiEvent.content.Admin')
    <div class="container ctn-edit" id="edit-event">
        <h2 id="h2-create">Edit Data Event</h2>
        <h2 id="h2-create">Kreasi Creator Event</h2>
        <hr>
        <form action="{{ route('event.update',$event->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group {{ $errors->has('event_name') ? ' has-error' : '' }}">
                <label for="event_name">Nama Event</label>
                <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name }}">
            </div>
            <div class="form-group {{ $errors->has('event_category') ? ' has-error' : '' }}">
                <label for="event_category">Event Category</label>
                <input type="text" class="form-control" id="event_category" name="event_category" value="{{ $event->event_category }}">
            </div>
            <div class="form-group {{ $errors->has('event_location') ? ' has-error' : '' }}">
                <label for="event_location">Lokasi Event</label>
                <input type="text" class="form-control" id="event_location" name="event_location" value="{{ $event->event_location }}">
            </div>
            <div class="form-group {{ $errors->has('event_date') ? ' has-error' : '' }}">
                <label for="event_date">Tanggal Event</label>
                <input type="text" class="form-control" id="event_date" name="event_date" value="{{ $event->event_date }}">
            </div>
            <div class="form-group {{ $errors->has('event_description') ? ' has-error' : '' }}">
                <label for="event_description">Deskripsi Event</label>
                <input type="text" class="form-control" id="event_description" name="event_description" value="{{ $event->event_description }}">
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN SUDAH BENAR ?')">Update</button>
        </form>
        <a href="{{route('event.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>

@endsection
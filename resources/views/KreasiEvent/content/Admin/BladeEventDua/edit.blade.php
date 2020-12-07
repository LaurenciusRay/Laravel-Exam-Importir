@extends('KreasiEvent.masteradmin')
@section('title', 'Edit Data Event Dua')

@section('KreasiEvent.content.Admin')
    <div class="container ctn-edit" id="edit-event">
        <h2 id="h2-create">Edit Data Event</h2>
        <h2 id="h2-create">Kreasi Creator Event</h2>
        <hr>
        <form action="{{ route('eventdua.update',$event_dua->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group {{ $errors->has('event_names') ? ' has-error' : '' }}">
                <label for="event_names">Nama Event</label>
                <input type="text" class="form-control" id="event_names" name="event_names" value="{{ $event_dua->event_names }}">
            </div>
            <div class="form-group {{ $errors->has('event_categorys') ? ' has-error' : '' }}">
                <label for="event_categorys">Event Category</label>
                <input type="text" class="form-control" id="event_categorys" name="event_categorys" value="{{ $event_dua->event_categorys }}">
            </div>
            <div class="form-group {{ $errors->has('event_locations') ? ' has-error' : '' }}">
                <label for="event_locations">Lokasi Event</label>
                <input type="text" class="form-control" id="event_locations" name="event_locations" value="{{ $event_dua->event_locations }}">
            </div>
            <div class="form-group {{ $errors->has('event_dates') ? ' has-error' : '' }}">
                <label for="event_dates">Tanggal Event</label>
                <input type="text" class="form-control" id="event_dates" name="event_dates" value="{{ $event_dua->event_dates }}">
            </div>
            <div class="form-group {{ $errors->has('event_descriptions') ? ' has-error' : '' }}">
                <label for="event_descriptions">Deskripsi Event</label>
                <input type="text" class="form-control" id="event_descriptions" name="event_descriptions" value="{{ $event_dua->event_descriptions }}">
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN SUDAH BENAR ?')">Update</button>
        </form>
        <a href="{{route('eventdua.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>

@endsection
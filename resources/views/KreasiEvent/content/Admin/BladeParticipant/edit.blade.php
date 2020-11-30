@extends('KreasiEvent.masteradmin')
@section('title', 'Edit Data Participant')

@section('KreasiEvent.content.Admin')

<style>
    h2{
        text-align: center;
    }
</style>

    <div class="container mt-3" id="edit-participant">
        <h2 id="h2-create">Edit Data Participant</h2>
        <h2 id="h2-create">Kreasi Creator Event</h2>
        <hr>
        <form action="{{ route('participant.update',$participant->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group {{ $errors->has('full_name') ? ' has-error' : '' }}">
                <label for="full_name">Nama participant</label>
                <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $participant->full_name }}">
            </div>
            <div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                <label for="age">participant Age</label>
                <input type="text" class="form-control" id="age" name="age" value="{{ $participant->age }}">
            </div>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Participant email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $participant->email }}">
            </div>
            <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                <label for="phone_number">Participant Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $participant->phone_number }}">
            </div>
            <div class="form-group {{ $errors->has('profesion') ? ' has-error' : '' }}">
                <label for="profesion">Participant Profesion</label>
                <input type="text" class="form-control" id="profesion" name="profesion" value="{{ $participant->profesion }}">
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK MENGUBAH DATA DAN SUDAH BENAR ?')">Update</button>
        </form>
        <a href="{{route('participant.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>

@endsection
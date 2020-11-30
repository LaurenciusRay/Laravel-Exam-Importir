@extends('backend.dasboardAdmin.masterBackend')
@section('title', 'Admin | Create-Event')

@section('backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Create Event</h1>
        <br>

        {{-- menampilkan error validasi --}}
        {{-- @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        
        <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="event_name"><strong>Event Name</strong></label>
                <input type="text" class="form-control" name="event_name">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_category"><strong>Event Category</strong></label>
                <input type="text" class="form-control" name="event_category">
                @if ($errors->has('event_category'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_category') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_location"><strong>Event Location</strong></label>
                <input type="text" class="form-control" name="event_location">
                @if ($errors->has('event_location'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_location') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_date"><strong>Event Date</strong></label>
                <input type="date" class="form-control" name="event_date">
                @if ($errors->has('event_date'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_date') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_description"><strong>Event Description</strong></label>
                <input type="text" class="form-control" name="event_description">
                @if ($errors->has('event_description'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_description') }}</strong>
                    </span>
                @endif
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')" id="btn1">Upload</button>
            <a href="{{ route('halaman-event') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection

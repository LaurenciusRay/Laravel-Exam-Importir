@extends('backend.dasboardAdmin.masterBackend')
@section('title', 'Admin | Create-Event')

@section('backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Create Event</h1>
        <br>
        <form action="{{ route('event.stores1') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="event_names"><strong>Event Name</strong></label>
                <input type="text" class="form-control" name="event_names">
                @if ($errors->has('event_names'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_names') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_categorys"><strong>Event Category</strong></label>
                <input type="text" class="form-control" name="event_categorys">
                @if ($errors->has('event_categorys'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_categorys') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_locations"><strong>Event Location</strong></label>
                <input type="text" class="form-control" name="event_locations">
                @if ($errors->has('event_locations'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_locations') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_dates"><strong>Event Date</strong></label>
                <input type="date" class="form-control" name="event_dates">
                @if ($errors->has('event_dates'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_dates') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_descriptions"><strong>Event Description</strong></label>
                <input type="text" class="form-control" name="event_descriptions">
                @if ($errors->has('event_descriptions'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_descriptions') }}</strong>
                    </span>
                @endif
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')" id="btn1">Upload</button>
            <a href="{{ route('halaman-events1') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection

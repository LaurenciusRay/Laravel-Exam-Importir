@extends('backend.dasboardAdmin.masterBackend')
@section('title', 'Admin | Edit-Events')

@section('backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Events</h1>
        <br>
        <form action="{{ route('event.updates1', $events->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $events->id }}}}">
                <label for="event_names"><strong>Event Name</strong></label>
                <input type="text" class="form-control" name="event_names" value="{{ $events->event_names }}">
                @if ($errors->has('event_names'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_names') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_categorys"><strong>Event Category</strong></label>
                <input type="text" class="form-control" name="event_categorys" value="{{ $events->event_categorys }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_categorys') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_locations"><strong>Event Location</strong></label>
                <input type="text" class="form-control" name="event_locations" value="{{ $events->event_locations }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_locations') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_dates"><strong>Event Date</strong></label>
                <input type="date" class="form-control" name="event_dates" value="{{ $events->event_dates }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_dates') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_descriptions"><strong>Event Desription</strong></label>
                <input type="text" class="form-control" name="event_descriptions" value="{{ $events->event_descriptions }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_descriptions') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-success"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('halaman-event') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection

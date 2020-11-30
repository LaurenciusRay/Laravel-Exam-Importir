@extends('backend.dasboardAdmin.masterBackend')
@section('title', 'Admin | Edit-Category')

@section('backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Category</h1>
        <br>
        <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $event->id }}}}">
                <label for="event_name"><strong>Event Name</strong></label>
                <input type="text" class="form-control" name="event_name" value="{{ $event->event_name }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_category"><strong>Event Category</strong></label>
                <input type="text" class="form-control" name="event_category" value="{{ $event->event_category }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_category') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_location"><strong>Event Location</strong></label>
                <input type="text" class="form-control" name="event_location" value="{{ $event->event_location }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_location') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_date"><strong>Event Date</strong></label>
                <input type="date" class="form-control" name="event_date" value="{{ $event->event_date }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_date') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_description"><strong>Event Desription</strong></label>
                <input type="text" class="form-control" name="event_description" value="{{ $event->event_description }}">
                @if ($errors->has('event_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('event_description') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-success"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('halaman-event') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection

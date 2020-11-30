@extends('frontend.masterFrontend')
@section('title', 'Pendaftaran')

@section('frontend')
    <div class="container">
        <h2 style="margin-top: 1rem; text-align:center">Pendaftaran</h2>
        <hr>
        <form action="{{ 'pendaftaran-store' }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="full_name"><strong>Event Name</strong></label>
                <input type="text" class="form-control" name="full_name">
                @if ($errors->has('full_name'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('full_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="age"><strong>Age</strong></label>
                <input type="text" class="form-control" name="age">
                @if ($errors->has('age'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('age') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="email"><strong>Email</strong></label>
                <input type="text" class="form-control" name="email">
                @if ($errors->has('email'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="phone_number"><strong>Phone Number</strong></label>
                <input type="text" class="form-control" name="phone_number">
                @if ($errors->has('phone_number'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="profesion"><strong>Profesion</strong></label>
                <input type="text" class="form-control" name="profesion">
                @if ($errors->has('profesion'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('profesion') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="event_id"><strong>Event 1</strong></label>
                <select name="event_id" id="event_id" {{ $check >=2 ? 'disabled' : '' }} class="custom-select">
                    <option value="">
                        Choose Id
                    </option>
                    @foreach ($data_event as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->event_name }}
                        </option>
                    @endforeach
                </select>
                @if ($check >= 2)
                <span class="help-block text-warning">
                    <strong>Kuota event sudah penuh</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="events_id"><strong>Event 1</strong></label>
                <select name="events_id" id="events_id" {{ $check2 >=2 ? 'disabled' : '' }} class="custom-select">
                    <option value="">
                        Choose Id
                    </option>
                    @foreach ($data_events as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->event_names }}
                        </option>
                    @endforeach
                </select>
                @if ($check2 >= 2)
                <span class="help-block text-warning">
                    <strong>Kuota event sudah penuh</strong>
                </span>
                @endif
            </div>
            <button class="btn btn-success" type="submit" onclick="return confirm('Anda Yakin Sudah Benar ?')"
                id="btn1">Upload</button>
            <a href="{{ route('form') }}" class="btn btn-primary">Back</a><br><br>
        </form>
    </div>

@endsection

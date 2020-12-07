@extends('layouts.app')
@section('title', 'Register Admin Kreasi Event')

@section('content')
<div class="container-fluid" id="ctn-formregis">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" id="col-regis1">
            <p id="p-regis1">Registrasi Admin</p>
            <p id="p-regis2">Kreasi Event</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" id="col-regis2">
            <img src="{{asset('assets/img/avatar5.png')}}" alt="" id="img-loginadmin">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="form-regis">
                {{ csrf_field() }}
    
                <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Your Name">
    
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
    
                <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email Address">
    
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
    
                <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Your Password">
    
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
    
                <div class="form-group row">
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Password Confirm">
                    </div>
                </div>
    
                <div class="form-group row">
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

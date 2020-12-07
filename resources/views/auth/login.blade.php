@extends('layouts.app')
@section('title', 'Login Admin Kreasi Event')

@section('content')
<div class="container-fluid" id="ctn-login">
    <div class="row" id="row-login">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <p id="p-login2">Welcome Admin</p>
            <p id="p-login1">Kreasi Event</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <img src="{{asset('assets/img/avatar5.png')}}" alt="" id="img-loginadmin">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}" id="form-login">
                {{ csrf_field() }}
        
                <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input id="email" type="email" class="form-control email-login" name="email" 
                        value="{{ old('email') }}" required autofocus placeholder="Email Address">
        
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
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
        
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
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                        
                        <a class="btn btn-link" href="{{ route('password.request') }}" id="forgot-password">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-lg-3 col-md-3 col-sm-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="checkbox">
                            <label>
                                <p id="p-login3">Belum Terdaftar ? &nbsp;<span><a href="{{ route('register') }}" id="p-login4">Register</a></span></p>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Login</div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                <a href="{{ route('register') }}">Register</a>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
@endsection

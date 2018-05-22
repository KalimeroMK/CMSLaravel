@extends('layouts.login')
@section('content')
<!--Body-->
<body>

    <body class="fix-header fix-sidebar">
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
            </div>
            <!-- Main wrapper  -->
            <div id="main-wrapper">

                <div class="unix-login">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="login-content card">
                                    <div class="login-form">
                                        <h4>Login</h4>

                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                                            {!! csrf_field() !!}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}} loginbox-textbox">
                                                <input type="email" class="form-control" placeholder="Email" name="email"
                                                value="{{ old('email') }}"/>
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} loginbox-textbox">
                                                <input type="password" class="form-control" placeholder="Password" name="password"/>
                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember">
                                                            <span class="text">Remember me</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                           {{--  <div class="loginbox-forgot">
                                                <a href="{{ url('/admin/password/reset') }}">Forgot Password?</a>
                                            </div> --}}
                                            <div class="loginbox-submit">
                                                <button class="btn btn-primary btn-block">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endsection
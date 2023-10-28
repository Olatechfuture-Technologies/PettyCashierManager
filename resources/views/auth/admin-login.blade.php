@extends('layouts.guest-template')
@section('title', 'admin-login')
@section('style')
<style>
    body {
        background-image: url('/frontend/images/sky2.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
@endsection
@section('content')
<div class="loginbox">
    <div class="row">
        <div class="login-right-wrap py-3">
            <a href="/" class="text-center justify-content-center align-center">
                <img class="img-fluid logol mb-2 text-center justify-content-center px-3" src="{{asset('frontend/images/logo/logo-sticky.png')}}" alt="Logo"></a>


            <p class="account-subtitle text-white text-bold py-2">ADMIN Dashboard Login Access</p>
            <div class="container-fluid">
                <form method="POST" action="{{ route('admin.login-attempt') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Password</label>
                        <div class="pass-group">
                            <input type="password" name="password" class="form-control pass-input @error('password') is-invalid @enderror" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cb1">
                                    <label class="custom-control-label" for="cb1">Remember me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                @if (Route::has('password.request'))
                                <a class="forgot-link" href="{{ route('staff.forget-password') }}">Forgot Password ?</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>

                    <div class="text-center dont-have">Don't have an account yet? <a href="register.html">Staff Register</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

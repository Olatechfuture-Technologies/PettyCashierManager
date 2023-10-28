@extends('layouts.frontend-template')
@section('content')
<div class="container">
    <div class="loginbox mt-5">
        <div class="row mt-5">
            <div class="login-right-wrap py-3 mt-5">
                <p class="account-subtitle text-white text-bold py-2">Resident's Register</p>
                <div class="container">
                    <form method="POST" class="form-row" action="{{ route('staff.register') }}">
                        <div class="form-group col-lg-6 col-sm-12 col-md-6">
                            <label class="form-control-label">First Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-6">
                            <label class="form-control-label">SurName</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-6">
                            <label class="form-control-label">Email Address</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-6">
                            <label class="form-control-label">Password</label>
                            <input type="password" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-6">
                            <label class="form-control-label">Confirm Password</label>
                            <input type="password" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-6 mb-0">
                            <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.storeapp')
<style>
input[type="text"]:focus{
outline: none;
border: 1px solid black;
box-shadow: none;
}
input[type="text"]{
outline: none;
border: 1px solid black;
padding: 8px;
box-shadow: none;
}
input[type="email"]:focus{
outline: none;
border: 1px solid black;
padding: 8px
box-shadow: none;
}
input[type="email"]{
outline: none;
border: 1px solid black;
padding: 8px;
box-shadow: none;
}
input[type="password"]:focus{
outline: none;
border: 1px solid black;
box-shadow: none;
padding: 8px
}
input[type="password"]{
outline: none;
border: 1px solid black;
box-shadow: none;
padding: 8px
}
</style>
@section('content')
<div class="container  ">
    <div class="row justify-content-center   ">
        <div class="col-lg-5 col-md-7 col-12 mt-5 ">
            <div class="card ps-lg-5" style="background-color: white" style="height:610px">
                <h5 class="text-center mt-4 fs-1 ">{{ __('Register') }}</h5>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class=" col-form-label text-lg-start">{{ __('Name') }}</label>

                            <div class="col-lg-11">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class=" col-form-label text-lg-start">{{ __('Email Address') }}</label>

                            <div class="col-lg-11">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class=" col-form-label text-lg-start">{{ __('Password') }}</label>

                            <div class="col-lg-11">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class=" col-form-label text-lg-start">{{ __('Confirm Password') }}</label>

                            <div class="col-lg-11">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-5 mt-5">
                            <div class=" text-end">
                                <button type="submit" class="btn btn-dark w-25 ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

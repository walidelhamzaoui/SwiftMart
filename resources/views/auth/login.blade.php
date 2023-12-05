@extends('layouts.storeapp')
<style>
input[type="checkbox"]:checked{
box-shadow: none;
outline: none;
background-color: rgb(10, 9, 9);
}
input[type="checkbox"]:focus{
box-shadow: none;
outline: none;

}
input[type="email"]:focus{
box-shadow: none;
outline: none;
background-color: white;border: 1px solid black !important;;
}
input[type="password"]:focus{
box-shadow: none;
outline: none;
background-color: white;border: 1px solid black !important;;
}
input{
border: 1px solid black !important;
background-color: white}

</style>
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 col-md-7">
            <div class="card">
                <div class="mt-3 text-center fs-4 fw-bold">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3  ">
                            <label for="email" class="col-md-8 col-form-label text-md-start ms-lg-3">{{ __('Email Address') }}</label>

                            <div class="col-md-12 col-lg-11 ms-lg-3 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="password" class="col-md-8 col-form-label text-md-start ms-lg-3">{{ __('Password') }}</label>

                            <div class="col-md-12 col-lg-11 ms-lg-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 col-md-12 ms-lg-3 ms-md-2 d-flex justify-content-between ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class=" text-center">
                                <button type="submit" class="btn  w-50 text-capitalize" style="background-color: rgb(15, 14, 14);color:white">
                                    {{ __('Login') }}
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

@extends('layouts.appp')



@section('content')
    <div style="background-color: white; width: 350px; height: 450px; margin: 0 auto ; border-radius: 5px">
        <div style="padding-top: 80px">
            <div style="justify-content: center; align-items: center; display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="blue" class="bi bi-hexagon-fill"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8.5.134a1 1 0 0 0-1 0l-6 3.577a1 1 0 0 0-.5.866v6.846a1 1 0 0 0 .5.866l6 3.577a1 1 0 0 0 1 0l6-3.577a1 1 0 0 0 .5-.866V4.577a1 1 0 0 0-.5-.866L8.5.134z" />
                </svg>
            </div>
            <h3 style="justify-content: center; align-items: center; display: flex; font-weight: bold; margin-top: 25px">
                Employee Data Master</h3>
        </div>
        <hr style="padding-top: 20px; width: 80%; margin: 0 auto;">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group my-2">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror "
                                name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required
                                autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Enter Your Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <hr style="padding-top: 20px; width: 100%; margin: 0 auto;">
                        <div class="row mb-0">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                
                                <button type="submit" class="btn btn-primary col-md-12 py-2">
                                    <i class="bi bi-box-arrow-in-right" style="font-size: 1.5em;"></i>
                                    <span style="font-size: 1.2em;">{{ __('Log In') }}</span>
                                  </button>
                                  
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"> <i class="bi-hexagon-fill">{{ __('Employee Data MAster') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

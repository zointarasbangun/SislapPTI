@extends('auth.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

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

<body class="hold-transition login-page" style="background: #00ABEC">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="img-container" style="margin-top: 20px;">
                        <img src="{{ asset('img/akhlak.png') }}" alt="Gambar 1" style="margin-right:30px;">
                        <img src="{{ asset('img/pgncom.png') }}" alt="Gambar 2" >
                        <img src="{{ asset('img/pertamina.png') }}" alt="Gambar 3" style="margin-left:30px; ">
                    </div>
                    <h2 class="text-center" style="margin-top: 5px; font-weight: bold;">LOGIN</h2>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" class="form-control" id="email" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block" name="login" ><a href="/beranda" style="color:#fff "><b>Login</a></b></button>
                            </div>
                            <p style="text-align: center;">
                                Kembali ke <a href="/">Landing page</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>

@endsection

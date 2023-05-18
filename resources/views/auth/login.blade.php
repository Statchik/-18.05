@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-5 login-bg">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="d-inline-block auth-logo">
                                <img src="../public/photo/logo/logo.png" width="125">
                            </div>
                            <h4 class="text-dark mt-3">Перейдите на АвтоМир</h4>
                        </div>

                        <div class="p-2 mt-3">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label">{{ __('Электронная почта') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="col-md-4 col-form-label">{{ __('Пароль') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="remeber-me">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Запомнить меня') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="login-btn">
                                    <button type="submit" class="btn-hover color-7">
                                        {{ __('Войти') }}
                                    </button>
                                </div>
                                <div class="pass-btn">
                                    <div class="form-check">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Забыли свой пароль?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- card body -->
                </div>
                <!-- card -->
            </div>
        </div>
        <!-- row -->
    </div>
@endsection

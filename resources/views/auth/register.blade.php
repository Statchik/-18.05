@extends('layouts.app')

@section('content')
    <div class="auth-page-wrapper pt-5">
        <!-- page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-5 login-bg">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="d-inline-block auth-logo">
                                        <img src="../public/photo/logo/logo.png" width="125">
                                    </div>
                                    <h4 class="text-dark mt-3">Зарегистрироваться на Автомир</h4>
                                </div>

                                <div class="p-2 mt-3">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name"
                                                class="col-md-4 col-form-label">{{ __('Ваше имя') }}</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

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
                                            <label for="password"
                                                class="col-md-4 col-form-label">{{ __('Пароль') }}</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password-confirm"
                                                class="col-md-4 col-form-label">{{ __('Подтвердитие пароль') }}</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                        <div class="remeber-me">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Запомнить меня') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="login-btn">
                                            <button type="submit" class="btn-hover color-7">
                                                {{ __('Регистрация') }}
                                            </button>
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
            <!-- container -->
        </div>
        <!-- end page content -->
    </div>
@endsection

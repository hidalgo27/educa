@extends('layouts.app')

@section('content')
{{--    <v-container>--}}
{{--        <v-row justify="center">--}}
{{--            <v-col md="8">--}}
{{--                <v-card>--}}
{{--                    <v-card-text>--}}
{{--                        <form method="POST" action="{{ route('login') }}">--}}
{{--                            @csrf--}}
{{--                            <v-text-field--}}
{{--                                label="Login"--}}
{{--                                name="login"--}}
{{--                                prepend-icon="mdi-account"--}}
{{--                                type="text"--}}
{{--                                value="{{ old('email') }}"--}}
{{--                                required--}}
{{--                                --}}
{{--                            ></v-text-field>--}}

{{--                            <v-text-field--}}
{{--                                id="password"--}}
{{--                                label="Password"--}}
{{--                                name="password"--}}
{{--                                prepend-icon="mdi-lock"--}}
{{--                                type="password"--}}
{{--                            ></v-text-field>--}}

{{--                            <button type="submit" class="btn btn-primary">--}}
{{--                                {{ __('Login') }}--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </v-card-text>--}}
{{--                </v-card>--}}
{{--            </v-col>--}}
{{--        </v-row>--}}
{{--    </v-container>--}}
<div class="container">
    <div class="row justify-center">
        <div class="col-4">
            <div class="card">
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <v-btn class="w-100" color="primary" large>
                                <v-icon left>mdi-facebook</v-icon><span class="text-capitalize">Iniciar</span><span class="text-lowercase">sesión con facebook</span>
                            </v-btn>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col text-center font-weight-bold">
                            o
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            <div class="col">
                                <input id="email" type="email" placeholder="Tu email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            <div class="col">
                                <input id="password" type="password" placeholder="Tu contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col text-center">
                                <v-btn depressed large type="submit" class="w-100 font-weight-medium text-capitalize" color="green accent-4" dark>
                                    Iniciar Sesión
                                </v-btn>
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link caption text-info" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-8">
                    <p class="small font-weight-medium">¿Aún no tienes cuenta en GreenGroup?</p>
                    <v-btn
                        depressed
                        large
                        outlined
                        class="w-100 font-weight-medium text-capitalize"
                        color="light-blue"
                        dark
                        href="register/"
                    >
                        Regístrate
                    </v-btn>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

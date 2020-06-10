@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">


                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <p class="font-weight-medium small">Crea tu cuenta para empezar a estudiar</p>
                            <v-btn class="w-100" color="primary" large href="/login/facebook">
                                <v-icon left>mdi-facebook</v-icon><span class="text-capitalize">Iniciar</span><span class="text-lowercase">Registrarse con facebook</span>
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

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col">
                                <input id="name" type="text" placeholder="Nombre Completo" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col">
                                <input id="email" type="email" placeholder="Correo Electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col">
                                <input id="celular" type="tel" placeholder="Numero de Celular" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular">

                                @error('celular')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            <div class="col">
                                <input id="password-confirm" placeholder="Confirma tu contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col">
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
                                <v-btn depressed large type="submit" class="w-100 font-weight-medium text-capitalize" color="green accent-4" dark>
                                    Crear mi cuenta
                                </v-btn>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center py-8">
                    <p class="small font-weight-medium">¿Ya tienes una cuenta?</p>
                    <v-btn
                        depressed
                        large
                        outlined
                        class="w-100 font-weight-medium text-capitalize"
                        color="light-blue"
                        dark
                        href="/login"
                    >
                        Inicia Sesión
                    </v-btn>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

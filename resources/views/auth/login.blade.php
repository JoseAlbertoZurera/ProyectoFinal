@extends('layouts.plantilla')
@section('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('titulo', 'Leasing | Iniciar sesión')

@section('contenido')
    <div class="container py-5">
        <div class="formulario-login">
            <h3 class="text-center">Iniciar Sesión</h3>

            <form class="p-4" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group was-validated">
                    <label class="form-label" for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Correo
                        electrónico</label>
                    <input class="form-control" type="email" id="email" name="email"
                        title="Introduce tu dirección de correo electrónico" @error('email') is-invalid @enderror required
                        autocomplete="email" autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="password"><i class="fa fa-unlock" aria-hidden="true"></i>
                        Contraseña</label>
                    <input class="form-control" type="password" id="password" pattern=".{8,}" name="password"
                        title="Introduce tu contraseña" @error('password') is-invalid @enderror required
                        autocomplete="current-password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Recuérdame') }}
                    </label>
                </div>

                <button class="btn btn-warning w-100 mt-3" type="submit">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <i class="fa fa-user-circle fa-lg"></i>
                        </div>
                        <div class="col-11">
                            <span class="span-btn">Iniciar Sesión</span>
                        </div>
                    </div>
                </button>

                <button class="btn btn-dark w-100 mt-3">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <img src="{{ asset('images/google.png') }}" width="22" alt="google" />
                        </div>
                        <div class="col-11">
                            <span class="span-btn">Continúa con Google</span>
                        </div>
                    </div>
                </button>

                <div class="form-sub">
                    @if (Route::has('password.request'))
                        <div class="text-center mt-3">
                            <a class="text-link" href="{{ route('password.request') }}">¿Olvido su contraseña?</a>
                            <hr />
                        </div>
                    @endif
                    <div class="p-account text-center">
                        <h5>No tienes cuenta?</h5>
                    </div>
                    <div class="box-body text-center mt-2">
                        <a class="text-link" href="{{ route('register') }}">
                            <i class="fa fa-home"></i>
                            Registrate
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.plantilla')
@section('styles')
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('titulo', 'Leasing | Iniciar sesión')

@section('contenido')
    <div class="container">
        <div class="formulario-login">
            <h3 class="text-center">Iniciar Sesión</h3>

            <form class="p-5" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group was-validated">
                    <label class="form-label" for="email">Correo electronico
                    </label>
                    <input class="form-control" type="email" id="email" name="email" @error('email') is-invalid @enderror
                        required autocomplete="email" autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control" type="password" id="password" pattern=".{8,}"
                        title="Debe introducir minimo 6 caracteres" name="password" @error('password') is-invalid @enderror
                        required autocomplete="current-password" />
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
                        <div class="col-12">
                            <span class="span-btn"> Iniciar Sesión </span>
                        </div>
                    </div>
                </button>

                <button class="btn btn-dark p-2 w-100 mt-3">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('images/google.png') }}" width="25" alt="google" />
                        </div>
                        <div class="col-10">
                            <span> Continúa con Google</span>
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
                    <div class="box-body text-center mt-4">
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

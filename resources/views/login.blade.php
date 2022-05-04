@extends('layouts.plantilla')
@section('styles')
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('titulo', 'Leasing | Iniciar sesión')

@section('contenido')
    <br>
    <br>
    <br>
    <br>
    <div class="formulario-login">
        <h3 class="text-center">Iniciar Sesión</h3>

        <form class="p-5" method="POST">
          @csrf
            <div class="form-group was-validated">
                <label class="form-label" for="email">Correo electronico
                </label>
                <input class="form-control" type="email" id="email" name="email" required />
                <div class="invalid-feedback">
                    Por favor introduce tu dirección de correo.
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Contraseña</label>
                <input class="form-control" type="password" id="password" pattern=".{6,}"
                    title="Debe introducir minimo 6 caracteres" name="password" required />
                <div class="invalid-feedback">
                    Por favor introduzca su contraseña.
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check" />
                <label class="form-check-label" for="check">Mantener conectado</label>
            </div>
            <button class="btn btn-warning w-100 mt-3">
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
                <div class="text-center mt-3">
                    <a class="text-link"
                        href="/forgot-password?login_challenge=cb54ab34724d4f24a017cd3fff9f1658">¿Olvido su contraseña?</a>
                    <hr />
                </div>
                <div class="p-account text-center">
                    <h5>No tienes cuenta?</h5>
                </div>
                <div class="box-body text-center mt-4">
                    <a class="text-link" href="https://www.traum-ferienwohnungen.de/registrieren/">
                        <i class="fa fa-home"></i>
                        Registrate
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection

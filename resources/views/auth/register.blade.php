@extends('layouts.plantilla')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection
@section('titulo', 'Leasing | Registrate')

@section('contenido')
    <div class="container">
        <div class="formulario-login">
            <h4 class="text-center">Crea una nueva cuenta</h4>

            <form class="p-1 mt-1" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group was-validated">
                    <label class="form-label" for="name">Nombre </label>
                    <input class="form-control" type="text" id="name" name="name" @error('name') is-invalid @enderror
                        value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="name">Apellidos </label>
                    <input class="form-control" type="text" id="Apellidos" name="apellidos"
                        @error('apellidos') is-invalid @enderror required />
                    @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>Por favor, introduzca sus apellidos</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="name">Fecha de nacimiento </label>
                    <input class="form-control" type="date" id="fecha-nacimiento" name="fecha_nacimiento" @error('fecha_nacimiento') is-invalid @enderror required />
                    @error('fecha_nacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>Por favor, introduzca una fecha de nacimiento valida</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="name">DNI </label>
                    <input class="form-control" type="text" id="dni" name="dni" placeholder=""
                        pattern="[0-9]{8}[A-Za-z]{1}" title="Debe poner 8 números y una letra" @error('dni') is-invalid @enderror required />
                    @error('dni')
                        <span class="invalid-feedback" role="alert">
                            <strong>Por favor, introduzca un DNI valido</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="name">Telefono </label>
                    <input class="form-control" type="tel" id="telefono" name="telefono" pattern="[0-9]{9}"  @error('telefono') is-invalid @enderror required />
                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>Por favor, introduzca un número de teléfono valido</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="email"> Correo electronico </label>
                    <input class="form-control" type="email" id="email" name="email" @error('email') is-invalid @enderror
                        value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group was-validated">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control" type="password" id="password" name="password" pattern=".{8,}"
                        @error('password') is-invalid @enderror required autocomplete="new-password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group was-validated">
                    <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>

                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" id="check" required />
                    <label class="form-check-label" for="check">Acepta los términos y condiciones generales de Leasing y
                        acepta el procesamiento y uso de sus datos de acuerdo con la
                        declaración de protección de datos.</label>
                </div>
                <hr />
                <button class="btn btn-outline-dark w-100 mt-3" type="submit">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <i class="fa fa-user-circle"></i>
                        </div>
                        <div class="col-10">
                            <span> Registrate</span>
                        </div>
                    </div>
                </button>

                <button class="btn btn-outline-dark w-100 mt-3">
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
                    <div class="text-center mt-4">
                        ¿Ya tienes una cuenta?
                        <a class="text-link" href="{{ route('login') }}">
                            Inicia sesión
                            <i class="fa fa-sign-in"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

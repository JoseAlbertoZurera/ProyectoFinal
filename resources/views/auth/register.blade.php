@extends('layouts.plantilla')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection
@section('titulo', 'Leasing | Registrate')

@section('contenido')
    <div class="container py-5">
        <div class="formulario-login">
            <div class="row">
                <h3 class="text-center col-12">Crea una nueva cuenta</h3>
            </div>

            <form class="p-2 mt-4" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="form-group was-validated col-12">
                        <label class="form-label" for="name"><i class="fa fa-user" aria-hidden="true"></i>
                            Nombre</label>
                        <input class="form-control" type="text" id="name" name="name" title="Introduce tu nombre"
                            @error('name') is-invalid @enderror value="{{ old('name') }}" required autofocus />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group was-validated col-12">
                        <label class="form-label" for="apellidos"><i class="fa fa-user" aria-hidden="true"></i>
                            Apellidos</label>
                        <input class="form-control" type="text" id="apellidos" name="apellidos"
                            title="Introduce tus apellidos" @error('apellidos') is-invalid @enderror
                            value="{{ old('apellidos') }}" required />
                        @error('apellidos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group was-validated col-6">
                        <label class="form-label" for="name"><i class="fa fa-calendar" aria-hidden="true"></i> Fecha de
                            nacimiento</label>
                        <input class="form-control" type="date" id="fecha-nacimiento" name="fecha_nacimiento"
                            title="Introduce tu fecha de nacimiento" @error('fecha_nacimiento') is-invalid @enderror
                            value="{{ old('fecha_nacimiento') }}" required />
                        @error('fecha_nacimiento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group was-validated col-6">
                        <label class="form-label" for="dni"><i class="fa fa-address-card" aria-hidden="true"></i>
                            Dni</label>
                        <input class="form-control" type="text" id="dni" name="dni" pattern="[0-9]{8}[A-Za-z]{1}"
                            title="Debe poner 8 números y una letra" @error('dni') is-invalid @enderror required />
                        @error('dni')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label class="form-label" for="telefono"><i class="fa fa-phone" aria-hidden="true"></i>
                        Teléfono</label>
                    <input class="form-control" type="tel" id="telefono" name="telefono" pattern="[0-9]{9}"
                        title="Introduce tu número de teléfono" @error('telefono') is-invalid @enderror
                        value="{{ old('telefono') }}" required />
                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group was-validated">
                    <label class="form-label" for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Correo
                        electrónico</label>
                    <input class="form-control" type="email" id="email" name="email"
                        title="Introduce tu dirección de correo electrónico" @error('email') is-invalid @enderror
                        required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group was-validated col-6">
                        <label class="form-label" for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            Contraseña</label>
                        <input class="form-control" type="password" id="password" name="password"
                            title="Introduce una contraseña" pattern=".{8,}" @error('password') is-invalid @enderror
                            required />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group was-validated col-6">
                        <label for="password-confirm" class="form-label"><i class="fa fa-unlock"
                                aria-hidden="true"></i>{{ __(' Confirmar Contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            title="Confirma tu contraseña" pattern=".{8,}" @error('password-confirm') is-invalid @enderror
                            required />
                        @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="form-check form-switch mt-3">
                    <input class="form-check-input" type="checkbox" id="check" required>
                    <label class="form-check-label" for="flexSwitchCheckDefault">He leído y acepto los términos y condiciones y la política
                        de privacidad.</label>
                  </div>
                <hr />
                <button class="btn btn-warning w-100 mt-3" type="submit">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <i class="fa fa-user-circle fa-lg"></i>
                        </div>
                        <div class="col-11">
                            <span class="span-btn">Registrarse</span>
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

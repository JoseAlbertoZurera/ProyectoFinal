@extends('layouts.plantilla')
@section ('styles')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
<link href="{{ asset('css/signup.css') }}" rel="stylesheet">
@endsection
@section('titulo', 'Leasing | Registrate')

@section('contenido')
<br>
<br>
<br>
<br>
<div class="formulario-login m-5">
      <h4 class="text-center">Crea una nueva cuenta</h4>

      <form class="p-1 mt-1" method="POST">
        @csrf
        <div class="form-group was-validated">
          <label class="form-label" for="name">Nombre </label>
          <input class="form-control" type="text" id="name" name="nombre" required />
          <div class="invalid-feedback">Por favor introduzca su nombre.</div>
        </div>

        <div class="form-group was-validated">
          <label class="form-label" for="name">Apellidos </label>
          <input class="form-control" type="text" id="Apellidos" name="apellidos" required />
          <div class="invalid-feedback">
            Por favor introduzca sus Apellidos.
          </div>
        </div>

        <div class="form-group was-validated">
          <label class="form-label" for="name">Fecha de nacimiento </label>
          <input
            class="form-control"
            type="date"
            id="fecha-nacimiento"
            name="fecha_nacimiento"
            required
          />
          <div class="invalid-feedback">
            Por favor introduzca su fecha de nacimiento.
          </div>
        </div>

        <div class="form-group was-validated">
          <label class="form-label" for="name">DNI </label>
          <input
            class="form-control"
            type="text"
            id="dni"
            name="dni"
            placeholder=""
            pattern="[0-9]{8}[A-Za-z]{1}"
            title="Debe poner 8 números y una letra"
            required
          />
          <div class="invalid-feedback">Por favor introduzca su DNI.</div>
        </div>

        <div class="form-group was-validated">
          <label class="form-label" for="name">Telefono </label>
          <input
            class="form-control"
            type="tel"
            id="telefono"
            name="telefono"
            pattern="[0-9]{9}"
            required
          />
          <div class="invalid-feedback">
            Por favor introduzca su numero de telefono.
          </div>
        </div>

        <div class="form-group was-validated">
          <label class="form-label" for="email"> Correo electronico </label>
          <input class="form-control" type="email" id="email" name="email" required />
          <div class="invalid-feedback">
            Por favor introduzca su direccion de correo.
          </div>
        </div>
        <div class="form-group was-validated">
          <label class="form-label" for="password">Contraseña</label>
          <input
            class="form-control"
            type="password"
            id="password"
            name="password"
            pattern=".{6,}"
            title="Debe introducir minimo 6 caracteres"
            required
          />
          <div class="invalid-feedback">
            Por favor introduzca su contraseña.
          </div>
        </div>
        <div class="form-group form-check">
          <input class="form-check-input" type="checkbox" id="check" required />
          <label class="form-check-label" for="check"
            >Acepta los términos y condiciones generales de Leasing y
            acepta el procesamiento y uso de sus datos de acuerdo con la
            declaración de protección de datos.</label
          >
        </div>
        <hr />
        <button class="btn btn-outline-dark w-100 mt-3">
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
            <a
              class="text-link"
              href="/forgot-password?login_challenge=cb54ab34724d4f24a017cd3fff9f1658"
            >
              Inicia sesión
              <i class="fa fa-sign-in"></i>
            </a>
          </div>
        </div>
      </form>
    </div>
@endsection
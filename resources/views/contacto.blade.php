@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/contacto.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
@endsection

@section('titulo', 'Leasing | Contacto')

@section('contenido')

    <section class="contacta mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 id="info">Contacta con nosotros</h1>
            <p id="info-p">
              ¿Necesitas ponerte en contacto con nosotros? Puedes rellenar
              nuestro formulario online para enviar un mensaje a nuestro equipo
              de atención al cliente. Trataremos de responder a tu mensaje en un
              plazo de 2 días laborables.
            </p>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <img src="{{ asset('images/contacto/logo.png') }}" alt="logo" id="logo" />
          </div>
        </div>
      </div>
    </section>

    <section class="contacta-2 mt-5">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <div class="formulario-login m-5">
            <h4 class="text-center">CONTACTO</h4>
            <form class="p-1 mt-1 m-5">
              <div class="row">
                <div class="col-md-6 form-group was-validated">
                  <label class="form-label" for="name">Nombre </label>
                  <input class="form-control" type="text" id="name" required />
                  <div class="invalid-feedback">
                    Por favor introduzca su nombre.
                  </div>
                </div>

                <div class="col-md-6 form-group was-validated">
                  <label class="form-label" for="email">
                    Correo electronico
                  </label>
                  <input
                    class="form-control"
                    type="email"
                    id="email"
                    required
                  />
                  <div class="invalid-feedback">
                    Por favor introduzca su direccion de correo.
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group was-validated">
                  <label class="form-label" for="name">Selecciona dia</label>
                  <input
                    class="form-control"
                    type="date"
                    id="fecha-nacimiento"
                    required
                  />
                  <div class="invalid-feedback">
                    Por favor introduzca su fecha de contacto
                  </div>
                </div>

                <div class="col-md-6 form-group was-validated">
                  <label class="form-label" for="name">Telefono </label>
                  <input
                    class="form-control"
                    type="tel"
                    id="telefono"
                    pattern="[0-9]{9}"
                    required
                  />
                  <div class="invalid-feedback">
                    Por favor introduzca su numero de telefono.
                  </div>
                </div>
              </div>
              <div class="form-group was-validated">
                <textarea
                  required=""
                  maxlength="10000"
                  rows="3"
                  class="form-control"
                  name="message"
                  id="message"
                  placeholder="Mensaje *"
                ></textarea>
              </div>

              <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check" />
                <label class="form-check-label" for="check"
                  >He leído y acepto los términos legales descritos en la
                  Política de Privacidad
                </label>
              </div>

              <hr />
              <div class="row">
                <button class="btn btn-dark w-100">
                  <div class="row align-items-center">
                    <div class="col-1">
                      <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="col-11">
                      <span>Enviar</span>
                    </div>
                  </div>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    @endsection
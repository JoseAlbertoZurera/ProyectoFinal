@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/publica.css') }}" rel="stylesheet">

@endsection

@section('titulo', 'Leasing | Publica tu alojamiento')

@section('contenido')
    <section class="contacta-2">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="formulario-login m-5">
                    <h2 class="text-center">Publica tu alojamiento</h2>
                    <form class="m-4">
                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-globe" aria-hidden="true"></i>
                                    Ciudad </label>
                                <input class="form-control" type="text" id="name" name="Introduce una ciudad" required />
                            </div>
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-codepen" aria-hidden="true"></i>
                                    Codigo postal </label>
                                <input class="form-control" type="text" id="codigo" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-address-card"
                                        aria-hidden="true"></i>
                                    Dirección </label>
                                <input class="form-control" type="text" id="direccion" required />
                            </div>

                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-home" aria-hidden="true"></i>
                                    Tipo de alojamiento </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled>Tipo de alojamiento</option>
                                    <option value="1">Casa</option>
                                    <option value="2">Apartamento</option>
                                    <option value="3">Hotel</option>
                                    <option value="4">Hostal</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    Selecciona fecha inicio </label>
                                <input class="form-control" type="date" id="fecha-nacimiento" required />
                            </div>

                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    Selecciona fecha fin</label>
                                <input class="form-control" type="date" id="fecha-nacimiento" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-eur" aria-hidden="true"></i>
                                    Precio / noche</label>
                                <input class="form-control" type="text" id="name" required />
                            </div>
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-camera" aria-hidden="true"></i>
                                    Imagenes</label>
                                <input type="file" id="file" name="file" multiple>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-bed" aria-hidden="true"></i>
                                    Habitaciones </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled>Nº Habitaciones</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-user" aria-hidden="true"></i>
                                    Personas</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled>Nº Personas</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="name"><i class="fa fa-pencil" aria-hidden="true"></i>
                                    Descripcion</label>
                                <textarea required="" maxlength="10000" rows="3" class="form-control" name="message" id="message"
                                    placeholder="Mensaje *"></textarea>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <label class="form-label" for="name"><i class="fa fa-list-ul"
                                            aria-hidden="true"></i>
                                        Caracteristicas</label>
                                    <select class="form-control accordion-item" multiple>
                                        <option selected disabled>Selecciona las caracteristicas</option>
                                        <option value="1">Wifi</option>
                                        <option value="2">Playa</option>
                                        <option value="3">Limpieza</option>
                                        <option value="4">Mascotas</option>
                                        <option value="5">Estacionamiento</option>
                                        <option value="6">Aire acondicionado</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="check" />
                            <label class="form-check-label" for="check">He leído y acepto los términos legales descritos
                                en la Política de Privacidad</label>
                        </div>

                        <hr />
                        <div class="row">
                            <button class="btn btn-dark w-100">
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="col-11">
                                        <span class="span-btn">Enviar</span>
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

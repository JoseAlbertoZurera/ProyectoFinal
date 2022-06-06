@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/publicarAlojamiento.css') }}" rel="stylesheet">

@endsection

@section('titulo', 'Leasing | Publica tu alojamiento')

@section('contenido')
    <section class="contacta-2">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="formulario-login m-5">
                    <h2 class="text-center">Publica tu alojamiento</h2>
                    <form class="m-4" method="POST" action="{{ route('alojamientos.store') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="ciudad"><i class="fa fa-globe" aria-hidden="true"></i>
                                    Ciudad </label>
                                <input class="form-control" type="text" id="ciudad" name="ciudad"
                                    title="Introduce una ciudad" required />
                                @error('ciudad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="codigo_postal"><i class="fa fa-codepen"
                                        aria-hidden="true"></i>
                                    Código postal </label>
                                <input class="form-control" type="number" id="codigo_postal" name="codigo_postal"
                                    title="Introduce un código postal" required />
                            </div>
                        </div>
                        <!-- fefefefef -->
                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="titulo"><i class="fa fa-header" aria-hidden="true"></i>
                                    Título del alojamiento </label>
                                <input class="form-control" type="text" id="titulo" name="titulo"
                                    title="Introduce un título para el alojamiento" required />
                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label"><i class="fa fa-pencil" aria-hidden="true"></i>
                                    Características</label>
                                <!---------List of checkboxes and options----------->
                                <div class="form-check-label">
                                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenu2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Caracteristicas
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item">
                                            <label class="form-check-label" for="wifi"><input class="form-check-input"
                                                type="checkbox" name="wifi" id="wifi" value="1" /> Wifi</label>
                                        </li>
                                        <li class="dropdown-item">
                                            <label for="limpieza" class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="limpieza"
                                                    id="limpieza" value="1" />
                                                Servicio de limpieza
                                            </label>
                                        </li>
                                        <li class="dropdown-item">
                                            <label for="mascotas" class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="mascotas"
                                                    id="mascotas" value="1" />
                                                Admite mascotas
                                            </label>
                                        </li>
                                        <li class="dropdown-item">
                                            <label for="estacionamiento" class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="estacionamiento"
                                                    id="estacionamiento" value="1" />
                                                Servicio de estacionamiento
                                            </label>
                                        </li>
                                        <li class="dropdown-item">
                                            <label for="aire_acondicionado" class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="aire_acondicionado"
                                                    id="aire_acondicionado" value="1" />
                                                Aire acondicionado
                                            </label>
                                        </li>
                                        <li class="dropdown-item">
                                            <label for="playa" class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="playa" id="playa"
                                                    value="1" />
                                                Cerca de la playa
                                            </label>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                        <!-- dweddwd -->

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="direccion"><i class="fa fa-address-card"
                                        aria-hidden="true"></i>
                                    Dirección </label>
                                <input class="form-control" type="text" id="direccion" name="direccion"
                                    title="Introduce una dirección" required />
                            </div>

                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="tipo_alojamiento"><i class="fa fa-home"
                                        aria-hidden="true"></i>
                                    Tipo de alojamiento </label>
                                <select class="form-select" aria-label="Default select example" id="tipo_alojamiento"
                                    name="tipo_alojamiento" title="Selecciona un tipo de alojamiento" required>
                                    <option selected disabled>Tipo de alojamiento</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Hotel">Hotel</option>
                                    <option value="Hostal">Hostal</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="fecha_inicio"><i class="fa fa-calendar"
                                        aria-hidden="true"></i>
                                    Selecciona fecha inicio </label>
                                <input class="form-control" type="date" id="fecha_inicio" name="fecha_inicio"
                                    title="Introduce una fecha de inicio" required />
                            </div>

                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="fecha_fin"><i class="fa fa-calendar"
                                        aria-hidden="true"></i>
                                    Selecciona fecha fin</label>
                                <input class="form-control" type="date" id="fecha_fin" name="fecha_fin"
                                    title="Introduce una fecha de fin" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="precio_noche"><i class="fa fa-eur"
                                        aria-hidden="true"></i>
                                    Precio / noche / persona</label>
                                <input class="form-control" type="number" id="precio_noche" name="precio_noche"
                                    title="Introduce un precio por noche" required />
                            </div>
                            <div class="col-md-6 form-group was-validated">
                                <label for="ruta_imagen" class="form-label"><i class="fa fa-camera"
                                        aria-hidden="true"></i>Imágenes</label>
                                <input class="form-control" id="ruta_imagen" name="ruta_imagen" type="file"
                                    accept="image/*" multiple />
                                @error('ruta_imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="habitaciones"><i class="fa fa-bed"
                                        aria-hidden="true"></i>
                                    Habitaciones </label>
                                <input class="form-control" type="number" id="habitaciones" name="habitaciones"
                                    title="Introduce el número de habitaciones" min="1" max="100">
                            </div>

                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="max_personas"><i class="fa fa-user"
                                        aria-hidden="true"></i>
                                    Personas</label>
                                <input class="form-control" type="number" id="max_personas" name="max_personas"
                                    title="Introduce el número de personas" min="1" max="100">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="descripcion"><i class="fa fa-comment"
                                        aria-hidden="true"></i>
                                    Descripción</label>
                                <textarea maxlength="10000" rows="3" class="form-control" name="descripcion" id="descripcion"
                                    title="Introduce una descripcion del alojamiento" placeholder="Mensaje *"
                                    required></textarea>
                            </div>
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="descripcion_ubicacion"><i class="fa fa-pencil"
                                        aria-hidden="true"></i>
                                    Descripción de la ubicación</label>
                                <textarea maxlength="10000" rows="3" class="form-control" name="descripcion_ubicacion" id="descripcion_ubicacion"
                                    title="Introduce una descripcion de la ubicación" placeholder=""
                                    required></textarea>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="check" required />
                            <label class="form-check-label" for="check">He leído y acepto los términos y condiciones y
                                la
                                política de privacidad</label>
                        </div>

                        <hr />
                        <div class="row">
                            <button type="submit" class="btn btn-dark w-100">
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <div class="col-11">
                                        <span class="span-btn">Publicar alojamiento</span>
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

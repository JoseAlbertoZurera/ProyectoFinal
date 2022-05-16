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
                    <form class="m-4" method="POST" action="{{ route('publicarAlojamiento.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 form-group was-validated">
                                <label class="form-label" for="ciudad"><i class="fa fa-globe" aria-hidden="true"></i>
                                    Ciudad </label>
                                <input class="form-control" type="text" id="ciudad" name="ciudad"
                                    title="Introduce una ciudad" @error('ciudad') is-invalid @enderror required />
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
                                <input class="form-control" type="text" id="codigo_postal" name="codigo_postal"
                                    title="Introduce un código postal" required />
                            </div>
                        </div>

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
                                    name="tipo_alojamiento" title="Selecciona un tipo de alojamiento">
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
                                <label class="form-label" for="ruta_imagen"><i class="fa fa-camera"
                                        aria-hidden="true"></i>
                                    Imágenes</label>
                                <input type="file" id="ruta_imagen" name="ruta_imagen" multiple>
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
                                <label class="form-label" for="descripcion"><i class="fa fa-pencil"
                                        aria-hidden="true"></i>
                                    Descripción</label>
                                <textarea maxlength="10000" rows="3" class="form-control" name="descripcion" id="descripcion"
                                    title="Introduce una descripcion del alojamiento" placeholder="Mensaje *"
                                    required></textarea>
                            </div>

                            <div class=" col-md-6 multi-selector">
                                <label class="form-label"><i class="fa fa-pencil" aria-hidden="true"></i>
                                    Características</label>
                                <div class=" row select-field">
                                    <div class="col-md-6">
                                        <input type="input" disabled placeholder="Elige sus caracteristicas"
                                            class="input-selector" />
                                    </div>

                                    <div class="col-md-6 flex-row-reverse">
                                        <span class="down-arrow">&blacktriangledown;</span>
                                    </div>

                                </div>
                                <!---------List of checkboxes and options----------->
                                <div class="list">
                                    <label for="wifi" class="task">
                                        <input type="checkbox" name="wifi" id="wifi" value="1" />
                                        Wifi
                                    </label>
                                    <label for="limpieza" class="task">
                                        <input type="checkbox" name="limpieza" id="limpieza" value="1" />
                                        Servicio de limpieza
                                    </label>
                                    <label for="mascotas" class="task">
                                        <input type="checkbox" name="mascotas" id="mascotas" value="1" />
                                        Admite mascotas
                                    </label>
                                    <label for="estacionamiento" class="task">
                                        <input type="checkbox" name="estacionamiento" id="estacionamiento" value="1" />
                                        Servicio de estacionamiento
                                    </label>
                                    <label for="aire_acondicionado" class="task">
                                        <input type="checkbox" name="aire_acondicionado" id="aire_acondicionado"
                                            value="1" />
                                        Aire acondicionado
                                    </label>
                                    <label for="playa" class="task">
                                        <input type="checkbox" name="playa" id="playa" value="1" />
                                        Cerca de la playa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="check" required />
                            <label class="form-check-label" for="check">He leído y acepto los términos y condiciones y la
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

    <script>
        document.querySelector(".select-field").addEventListener("click", () => {
            document.querySelector(".list").classList.toggle("show");
            document.querySelector(".down-arrow").classList.toggle("rotate180");
        });
    </script>
@endsection

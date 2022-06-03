@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/alojamiento.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('titulo', 'Leasing | Alojamiento')

@section('contenido')

    <!-- Modal -->
    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Reservar alojamiento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="m-4" method="POST" action="{{ route('reservas.store', [$alojamiento]) }}">
                    @csrf
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input class="form-control form-control-solid flatpickr-input"
                                placeholder="Selecciona la fecha..." type="text" id="fecha" name="fecha" required />
                        </div>

                        <div class="mb-2">
                            <label for="hora" class="form-label">Hora de entrada</label>
                            <input class="form-control form-control-solid flatpickr-input active"
                                placeholder="Selecciona la hora..." id="hora" name="hora" type="text" readonly="readonly"
                                required />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Reservar alojamiento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <section id="learn" class="text-dark p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="row">
                    <div class="col-md-6">
                        <h1>{{ $alojamiento->titulo }}</h1>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btn-lg" id="reservar" data-bs-toggle="modal"
                            data-bs-target="#modal">Reservar</button>
                    </div>
                </div>
                <div class="col-12">
                    <i class="bi bi-geo-alt-fill"></i> {{ $alojamiento->ciudad }}
                    <br>
                    <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"> </i> <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <br />
                    <span>(6 reseñas)</span>
                </div>

                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/alojamiento/foto1.jpg') }}" alt="Los Angeles"
                                class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/alojamiento/foto2.jpg') }}" alt="Los Angeles"
                                class="d-block w-100" />

                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/alojamiento/foto3.jpg') }}" alt="Los Angeles"
                                class="d-block w-100" />
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
                <h2>Descripción general</h2>

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5>Detalles del Alojamiento</h5>
                        <p>{{ $alojamiento->descripcion }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Acerca de la ubicación</h5>
                        <p>{{ $alojamiento->descripcion_ubicacion }}</p>
                    </div>
                </div>
                <hr style="width:70%;text-align:left;margin-left:0">

                <!--SERVICIOS-->
                <h2>Servicios</h2>
                <div class="w-50">
                    <div class="row">
                        @if ($alojamiento->limpieza)
                            <p class="col-6"><i class="bi bi-check2"> Servicio de limpieza</i></p>
                        @endif

                        @if ($alojamiento->wifi)
                            <p class="col-6"><i class="bi bi-check2"> Wifi</i></p>
                        @endif

                        @if ($alojamiento->aire_acondicionado)
                            <p class="col-6"><i class="bi bi-check2"> Aire acondicionado</i></p>
                        @endif

                        @if ($alojamiento->estacionamiento)
                            <p class="col-6"><i class="bi bi-check2"> Estacionamiento</i></p>
                        @endif

                        @if ($alojamiento->mascotas)
                            <p class="col-6"><i class="bi bi-check2"> Admite mascotas</i></p>
                        @endif

                        @if ($alojamiento->playa)
                            <p class="col-6"><i class="bi bi-check2"> Cerca de la playa</i></p>
                        @endif
                    </div>
                </div>

                <hr style="width:70%;text-align:left;margin-left:0">
                <!--DISPONIBILIDAD-->
                <h2>Disponibilidad</h2>
                <div class="row">
                    <div class="col-md-3">
                        <table class="tabla1">
                            <thead>
                                <caption>
                                    Mayo 20222
                                </caption>
                                <tr>
                                    <th>Lu</th>
                                    <th>Ma</th>
                                    <th>Mie</th>
                                    <th>Ju</th>
                                    <th>Vi</th>
                                    <th>Sá</th>
                                    <th>Do</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <table class="tabla1">
                            <thead>
                                <caption>
                                    Junio 2022
                                <tr>
                                    <th>Lu</th>
                                    <th>Ma</th>
                                    <th>Mie</th>
                                    <th>Ju</th>
                                    <th>Vi</th>
                                    <th>Sá</th>
                                    <th>Do</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="col-md-3">
                        <table class="tabla1">
                            <thead>
                                <caption>
                                    Julio 2022
                                <tr>
                                    <th>Lu</th>
                                    <th>Ma</th>
                                    <th>Mie</th>
                                    <th>Ju</th>
                                    <th>Vi</th>
                                    <th>Sá</th>
                                    <th>Do</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <hr style="width:70%;text-align:left;margin-left:0">
                <!--GEOLOCALIZACIÓN-->
                <h2>¿Donde me voy a quedar?</h2>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1549.479422273818!2d1.3819578582803342!3d39.039057778204835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129939c1021334bd%3A0x6b7361c3c0674636!2s07816%20San%20Mateo%20de%20Albarca%2C%20Islas%20Baleares!5e0!3m2!1ses!2ses!4v1652178921278!5m2!1ses!2ses"
                            width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <h5>Dirección</h5>
                        <p>{{ $alojamiento->direccion }}, {{ $alojamiento->codigo_postal }}
                            {{ $alojamiento->ciudad }}</p>
                        <h5>Ubicación y entorno</h5>
                        <p>{{ $alojamiento->descripcion_ubicacion }}</p>
                    </div>
                </div>
                <!--HOST INFO-->
                <section id="host" class="mt-4">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="{{ asset($user->ruta_imagen) }}" class="img-fluid" alt="" width="300px"
                                    height="300px" />
                            </div>
                            <div class="col-md-6 p-5">
                                <h2>{{ $user->nombre }} <i class="bi bi-check-circle-fill"></i></h2>
                                @if ($user->descripcion)
                                    <p class="lead">{{ $user->descripcion }}</p>
                                @else
                                    <p class="lead">Esta persona no ha añadido una descripción</p>
                                @endif
                                <p>
                                    Ratio de respuesta: 100%
                                    <br>
                                    Tiempo de respuesta: en menos de una hora
                                </p>
                                <button type="button" class="btn btn-dark"><strong>Contacta con el
                                        anfitrión</strong></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--OPINIONES-->
                <section class="Opiniones">
                    <h2 class="text-center">Opiniones</h2>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-md">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body text-center">
                                            <div class="h1 mb-3">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <h3 class="card-title mb-3">Francisco</h3>
                                            <p class="card-text">
                                                El apartamento muy acogedor y con todo lo necesario, un súper justo
                                                bajo
                                                para comprar y a 10 minutos andando de la playa. En cuanto a David
                                                un
                                                anfitrión genial, muy amable. ¡En resumen un 10!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body text-center">
                                            <div class="h1 mb-3">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <h3 class="card-title mb-3">Laura</h3>
                                            <p class="card-text">
                                                Acogedor apartamento, ideal para pasar unos días en Santander. Está
                                                abuhardillado pero una vez que te habituas no hay problema. Muy
                                                luminoso. Está justo en mitad entre el centro ciudad y la bonita
                                                playa
                                                de El Sardinero.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body text-center">
                                            <div class="h1 mb-3">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <h3 class="card-title mb-3">Antonio</h3>
                                            <p class="card-text">
                                                Acogedor apartamento, ideal para pasar unos días en Santander. Está
                                                abuhardillado pero una vez que te habituas no hay problema. Muy
                                                luminoso. Está justo en mitad entre el centro ciudad y la bonita
                                                playa
                                                de El Sardinero.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body text-center">
                                            <div class="h1 mb-3">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <h3 class="card-title mb-3">Carlos</h3>
                                            <p class="card-text">
                                                El apartamento es como se ve en las imágenes, muy bonito y cómodo.
                                                Esta
                                                super bien ubicado en una zona de playa, cerca de la estación de
                                                tren y
                                                de la estación de autobuses.
                                                Muy cómodo y seguro.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </section>

                <!--Preguntas frecuentes-->
                <section id="questions" class="p-5">
                    <div class="container">
                        <h2 class="text-center mb-4">Preguntas frecuentes sobre {{ $alojamiento->titulo }}</h2>
                        <div class="accordion accordion-flush" id="questions">
                            <!-- Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#question-one">
                                        ¿Cuántas personas pueden alojarse en {{ $alojamiento->titulo }}?
                                    </button>
                                </h2>
                                <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                                    <div class="accordion-body">
                                        {{ $alojamiento->titulo }} puede alojar
                                        un máximo de 10 huéspedes.
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#question-two">
                                        ¿Cuántos cuartos de baño tiene {{ $alojamiento->titulo }}?
                                    </button>
                                </h2>
                                <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                                    <div class="accordion-body">
                                        {{ $alojamiento->titulo }} tiene 3
                                        cuartos de baño disponibles.
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#question-three">
                                        ¿Cuántos dormitorios tiene {{ $alojamiento->titulo }}?
                                    </button>
                                </h2>
                                <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                                    <div class="accordion-body">
                                        {{ $alojamiento->titulo }} tiene 5
                                        dormitorios disponibles.
                                    </div>
                                </div>
                                <!-- Item 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#question-four">
                                            ¿Cuál es el número mínimo de noches que hay que alojarse en
                                            {{ $alojamiento->titulo }}?
                                        </button>
                                    </h2>
                                    <div id="question-four" class="accordion-collapse collapse"
                                        data-bs-parent="#questions">
                                        <div class="accordion-body">
                                            Las estancias en {{ $alojamiento->titulo }} deben ser de al menos 2 noches.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
    </section>

    @include('layouts.footer')

@endsection

@section('JavaScript')
    <script>
        const alojamiento = @json($alojamiento);
        const reservas = @json($reservas);
        
        var rangoFechasReservadas = [];

        for (var key in reservas) {
            rangoFechasReservadas.push({
                from: reservas[key].fecha_entrada,
                to: reservas[key].fecha_salida,
            });
        }

        $(document).ready(function() {
            $("#fecha").flatpickr({
                onReady: function() {
                    this.jumpToDate(alojamiento.fecha_inicio.substring(0, alojamiento.fecha_inicio.length - 3))
                },
                altInput: true,
                altFormat: "j F, Y",
                dateFormat: "Y-m-d",
                disable: rangoFechasReservadas,
                mode: "range",
                minDate: alojamiento.fecha_inicio,
                maxDate: alojamiento.fecha_fin,
                locale: {
                    firstDayOfWeek: 1,
                    weekdays: {
                        shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                        longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes',
                            'Sábado'
                        ],
                    },
                    months: {
                        shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct',
                            'Nov', 'Dic'
                        ],
                        longhand: ['Enero', 'Febreo', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                            'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                        ],
                    },
                },
            });

            $("#hora").flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true
            });
        });
    </script>
@endsection

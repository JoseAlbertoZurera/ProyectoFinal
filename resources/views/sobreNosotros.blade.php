@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/sobreNosotros.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Leasing | Quienes somos')

@section('contenido')

    <section class="section--header">
        <div class="caja ">
            <img src="{{ asset('images/quienes/fondo.jpg') }}" class="img-fluid" alt="" />
            <div class="title">SOBRE NOSOTROS</div>
            <div class="subtitle">Viajar nunca fue tan fácil</div>
        </div>
    </section>
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="{{ asset('images/quienes/logo.png') }}" class="img-logo" alt="" />
                    <img src="img/fundamentals.svg" class="img-fluid" alt="" />
                </div>
                <div class="col-md p-5">
                    <h2>Sobre nosotros...</h2>
                    <p class="lead">
                        Leasing aparece de la palabra inglesa leasing, la cual significa arrendamiento, nuestra empresa es
                        una plataforma de búsqueda de tarifas de viaje y alojamiento en la red, su misión es conectar
                        clientes los cuales necesitan un alojamiento y vendedores que alquilan su propiedad de turismo desde
                        cualquier parte de España. En Leasing incluso se pueden hacer reservas con anticipación, así como
                        observar la lista de precios y experiencias de los usuarios.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="instructors" class="p-5">
        <div class="container">
            <h2 class=" h2-instructors">CONOCE NUESTRO EQUIPO</h2>
            <hr
                style="height: 5px;
                                                                                                                                            width: 50%;
                                                                                                                                            text-align: center;
                                                                                                                                            margin-left: 25%;
                                                                                                                                            margin-bottom: 40px;">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/quienes/Captura.PNG') }}" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Francisco Pérez</h3>
                            <h4 class="card-subtitle text-muted mb-3">
                                Front End Developer, España</h4>
                            <p class="card-text">
                                Encargado de que el sitio web sea atractiva para el usuario, además de que sea fácil de
                                navegar.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/quienes/JoseAlbertoZureraPNG.png') }}" class="rounded-circle mb-3"
                                alt="" width="130px" height="130px" />
                            <h3 class="card-title mb-3">Jose Alberto Zurera</h3>
                            <h4 class="card-subtitle text-muted mb-3">
                                Back End Developer, España</h4>
                            <p class="card-text">
                                Encargado de trabajar en el servidor, la base de datos y las APIs que se utilizan en la
                                aplicación web.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/quienes/adri.PNG') }}" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Adrian Romero</h3>
                            <h4 class="card-subtitle text-muted mb-3">
                                Chief Financial Officer, España</h4>
                            <p class="card-text">
                                Encargado del seguimiento del flujo de caja y la planificación financiera.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-github text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

@endsection

@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/quienesSomos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
@endsection

@section('titulo', 'Leasing | Quienes somos')

@section('contenido')

    <section class="section--header">
        <div class="caja">
            <img src="{{ asset('images/quienes/fondo.jpg') }}" class="img-fluid" alt="" />
            <div class="title">SOBRE NOSOTROS</div>
            <div class="subtitle">Viajar nunca fue tan fácil</div>
        </div>
    </section>
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="{{ asset('images/quienes/logo.png') }}" class="img-fluid" alt="" />
                    <img src="img/fundamentals.svg" class="img-fluid" alt="" />
                </div>
                <div class="col-md p-5">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Similique deleniti possimus magnam corporis ratione facere!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                        reiciendis eius autem eveniet mollitia, at asperiores suscipit
                        quae similique laboriosam iste minus placeat odit velit quos,
                        nulla architecto amet voluptates?
                    </p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="instructors" class="p-5">
        <div class="container">
            <h2 class=" h2-instructors">CONOCE NUESTRO EQUIPO</h2>
            <hr style="height: 5px;
                    width: 50%;
                    text-align: center;
                    margin-left: 25%;
                    margin-bottom: 40px;">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/25.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Francisco Pérez</h3>
                            <h4 class="card-subtitle text-muted mb-3">
                                Front End Developer, España</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/90.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Jose Alberto Zurera</h3>
                            <h4 class="card-subtitle text-muted mb-3">
                                Back End Developer, España</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/37.jpg" class="rounded-circle mb-3"
                                alt="" />
                            <h3 class="card-title mb-3">Adrian Martinez</h3>
                            <h4 class="card-subtitle text-muted mb-3">
                                TROLASO End Developer, España</h4>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Leasing</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
@endsection

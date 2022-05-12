@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/alojamientos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
@endsection

@section('titulo', 'Leasing | Alojamientos')

@section('contenido')
    <section id="learn" class="text-dark p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 p-5">
                    <h2>The Valley Residence</h2>
                    <p class="lead">Ibiza, Islas Baleares</p>
                    <span>5 habitaciones</span>
                    <span>3 baños</span>
                    <i class="bi bi-house"></i>
                    <p class="text">
                        Esta casa de campo tradicional en San Mateo, Ibiza, es tranquila y
                        serena, con mucho espacio para jugar y una piscina natural de agua
                        salada.
                    </p>
                    <p class="text-2">
                        Próxima disponibilidad: 10 mayo 2022

                        <br />

                        €927 / noche
                    </p>
                    <a href="#" class="btn btn-dark mt-3">
                        <i class="bi bi-arrow-right"></i> Mas información
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/alojamientos/foto1.jpg') }}" class="img-fluid" alt="" />

                </div>
            </div>
        </div>
    </section>
    <!--Second-->
    <section id="learn" class="text-dark">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 p-5">
                    <h2>La residencia del castillo Valdés de LLanera</h2>
                    <p class="lead">LLanera, Asturias</p>
                    <span>9 habitaciones</span>
                    <span>9 baños</span>
                    <i class="bi bi-house"></i>
                    <p class="text">
                        Haga como un Lord o Lady en este histórico castillo remoto en
                        Llanera, Asturias con lujosas habitaciones con baño privado,
                        piscina y una gran propiedad para explorar.
                    </p>
                    <p class="text-2">
                        Próxima disponibilidad: 25 Mayo 2022

                        <br />

                        €1500 / noche
                    </p>
                    <a href="#" class="btn btn-dark mt-3">
                        <i class="bi bi-arrow-right"></i> Mas información
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/alojamientos/foto2.jpg') }}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section id="learn" class="text-dark p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 p-5">
                    <h2>The Valley Residence</h2>
                    <p class="lead">Ibiza, Islas Baleares</p>
                    <span>5 habitaciones</span>
                    <span>3 baños</span>
                    <i class="bi bi-house"></i>
                    <p class="text">
                        Esta casa de campo tradicional en San Mateo, Ibiza, es tranquila y
                        serena, con mucho espacio para jugar y una piscina natural de agua
                        salada.
                    </p>
                    <p class="text-2">
                        Próxima disponibilidad: 10 mayo 2022

                        <br />

                        €927 / noche
                    </p>
                    <a href="#" class="btn btn-dark mt-3">
                        <i class="bi bi-arrow-right"></i> Mas información
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/alojamientos/foto1.jpg') }}" class="img-fluid" alt="" />

                </div>
            </div>
        </div>
    </section>
@endsection

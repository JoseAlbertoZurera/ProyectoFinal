@extends('layouts.plantilla')

@section('titulo', 'Leasing | Página Principal')

@section('contenido')

    <!--POST HEADER-->
    <div class="bg-image p-5 mt-5 bg-primary text-white text-center" id="fondo-playa"
        style="background-image: url({{ asset('images/playa.PNG') }}); height: 250px;">
        <h3>HOTELES, RESORTS, HOSTALES Y MUCHO MÁS</h3>
        <p>
            Consulta los precios de más de 2 millones de alojamientos en todo el
            mundo
        </p>
    </div>
    <!--CONTAINER PRINCIPAL-->
    <div class="container mt-5">
        <div class="row">
            <h2 class="h2-tip">Hoteles favoritos en todo el mundo</h2>
            <div class="col-sm-3">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/hotel-3.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Casa De Sao Lourenco</h5>
                            <p class="card-text">
                                Manteigas, Portugal
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/hotel-2.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Casa De Sao Lourenco</h5>
                            <p class="card-text">
                                Manteigas, Portugal
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/hotel-3.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Villa Copenhagen</h5>
                            <p class="card-text">
                                Copenhague, Dinamarca
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/hotel-.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Beach Club By Haad Tien</h5>
                            <p class="card-text">
                                Ko Tao, Tailandia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--PAISES MAS POPULARES-->
    <div class="container mt-5">
        <div class="row">
            <h2 class="h2-tip">Países más populares de vacaciones</h2>
            <div class="col-sm-4">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/españa.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">España</h5>
                            <p class="card-text">
                                Apartamentos y alquileres vacacionales
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/portugal.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Portugal</h5>
                            <p class="card-text">
                                Apartamentos y alquileres vacacionales
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/italia.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Italia</h5>
                            <p class="card-text">
                                Apartamentos y alquileres vacacionales
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/andorra.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Andorra</h5>
                            <p class="card-text">
                                Apartamentos y alquileres vacacionales
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/francia.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Francia</h5>
                            <p class="card-text">
                                Apartamentos y alquileres vacacionales
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div style="margin: 2rem auto; width: 20rem ml-3">
                    <div class="card">
                        <img src="{{ asset('images/suiza.jpg') }}" class="card-img-top" alt="Phone" />
                        <div class="card-body">
                            <h5 class="card-title">Suiza</h5>
                            <p class="card-text">
                                Apartamentos y alquileres vacacionales
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

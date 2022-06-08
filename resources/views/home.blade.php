@extends('layouts.plantilla')

@section('styles')
    <script src="{{ asset('js/home.js') }}" defer></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Leasing | Página Principal')

@section('contenido')

    <div class="pt-5">
        <!--POST HEADER-->
        <div class="bg-image p-5 mt-5 bg-primary text-white text-center" id="fondo-playa"
            style="background-image: url({{ asset('images/playa.PNG') }}); height: 250px;">
            <h3>HOTELES, RESORTS, HOSTALES Y MUCHO MÁS</h3>
            <p>
                Consulta los precios de más de 2 millones de alojamientos en toda España
            </p>
        </div>
        <!--CONTAINER PRINCIPAL-->
        <div class="container mt-5">
            <div class="row">
                <h2 class="h2-tip">Alojamientos destacados</h2>

                @foreach ($alojamientos as $alojamiento)
                    <div class="col-sm-3">
                        <div style="margin: 2rem auto; width: 20rem ml-3">
                            <a id="link" href="{{ route('alojamiento.show', [$alojamiento->id]) }}">
                                <div class="card">
                                    <img src="{{ $alojamiento->ruta_imagen }}" class="card-img-top" />
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $alojamiento->titulo }}</h5>
                                        <p class="card-text">
                                            {{ $alojamiento->direccion }}, {{ $alojamiento->ciudad }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!--PAISES MAS POPULARES-->
        <div class="container mt-5">
            <div class="row">
                <h2 class="h2-tip">Ciudades mas visitadas</h2>
                <div class="col-sm-4">

                    <div style="margin: 2rem auto; width: 20rem ml-3">
                        <a id="link" href="{{ route('alojamientos.alojamientosCiudad', 'Córdoba') }}">
                            <div class="card">
                                <img src="{{ asset('images/home/cordoba.jpg') }}" class="card-img-top" alt="Phone" />
                                <div class="card-body">
                                    <h5 class="card-title">Córdoba</h5>
                                    <p class="card-text">
                                        Apartamentos y alquileres vacacionales
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div style="margin: 2rem auto; width: 20rem ml-3">
                        <a id="link" href="{{ route('alojamientos.alojamientosCiudad', 'Palma de Mallorca') }}">
                        <div class="card">
                            <img src="{{ asset('images/home/mallorca.jpg') }}" class="card-img-top" alt="Phone" />
                            <div class="card-body">
                                <h5 class="card-title">Palma de Mallorca</h5>
                                <p class="card-text">
                                    Apartamentos y alquileres vacacionales
                                </p>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div style="margin: 2rem auto; width: 20rem ml-3">
                        <a id="link" href="{{ route('alojamientos.alojamientosCiudad', 'Sevilla') }}">
                        <div class="card">
                            <img src="{{ asset('images/home/sevilla.jpg') }}" class="card-img-top" alt="Phone" />
                            <div class="card-body">
                                <h5 class="card-title">Sevilla</h5>
                                <p class="card-text">
                                    Apartamentos y alquileres vacacionales
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div style="margin: 2rem auto; width: 20rem ml-3">
                        <a id="link" href="{{ route('alojamientos.alojamientosCiudad', 'Granada') }}">
                        <div class="card">
                            <img src="{{ asset('images/home/granada.jpg') }}" class="card-img-top" alt="Phone" />
                            <div class="card-body">
                                <h5 class="card-title">Granada</h5>
                                <p class="card-text">
                                    Apartamentos y alquileres vacacionales
                                </p>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div style="margin: 2rem auto; width: 20rem ml-3">
                        <a id="link" href="{{ route('alojamientos.alojamientosCiudad', 'Madrid') }}">
                        <div class="card">
                            <img src="{{ asset('images/home/madrid.jpg') }}" class="card-img-top" alt="Phone" />
                            <div class="card-body">
                                <h5 class="card-title">Madrid</h5>
                                <p class="card-text">
                                    Apartamentos y alquileres vacacionales
                                </p>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div style="margin: 2rem auto; width: 20rem ml-3">
                        <a id="link" href="{{ route('alojamientos.alojamientosCiudad', 'Barcelona') }}">
                        <div class="card">
                            <img src="{{ asset('images/home/barcelona.jpg') }}" class="card-img-top" alt="Phone" />
                            <div class="card-body">
                                <h5 class="card-title">Barcelona</h5>
                                <p class="card-text">
                                    Apartamentos y alquileres vacacionales
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>

        <!--- FOOTER -->
        <footer style="background-image: url({{ asset('images/home/back-footer.jpg') }});">
            <div class="pt-3" id="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/logo.png') }}" height="160px" width="190px" />
                            <p class="mt-4" id="p-footer">
                                La base de la idea de Leasing nace desde el punto de vista en el que otras plataformas como
                                Trivago y Booking dominan el mercado internacional.
                            </p>
                        </div>
                        <div class="col-md-4 " id="footer-content1">
                            <ul class="footer-links list-unstyled">
                                <p class="mb-10"><a href="#">Hoteles</a></p>
                                <p class="mb-10"><a href="#">Casas</a></p>
                                <p class="mb-10"><a href="#">Apartamentos</a></p>
                                <p class="mb-10"><a href="#">Hostales y pensiones</a></p>
                                <p class="mb-10"><a href="#">Albergues</a></p>
                                <p class="mb-10"><a href="#">Resorts</a></p>
                            </ul>
                        </div>
                        <div class="col-md-4" id="footer-content1">
                            <ul class="footer-links list-unstyled">
                                <p class="mb-10"><a href="{{ route('alojamientos') }}">Alquilar alojamiento</a>
                                </p>
                                <p class="mb-10"><a href="{{ route('alojamientos.create') }}">Anúnciante</a></p>
                                <p class="mb-10"><a href="{{ route('contacto') }}">Contacto</a></p>
                                <p class="mb-10"><a href="{{ route('sobreNosotros') }}">Sobre Nosotros</a></p>
                                <p class="mb-10"><a href="{{ route('cookies') }}">Política de privacidad y
                                        cookies</a></p>
                                <p class="mb-10"><a href="{{ route('terminosYCondiciones') }}">Términos y
                                        condiciones</a>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--COPYRIGHT-->
            <div class="copy-right py-2">
                <p class="text-center mt-2">
                    Copyright © 2022 Leasing. Todos los derechos
                    reservados.
                </p>
            </div>
        </footer>

        <!--Boton to top-->
        <div class="btn-scrolltop" id="btn_scrolltop">
            <img src="{{ asset('images/home/flecha.png') }}" height="50px" width="50px" />
        </div>
    </div>

@endsection

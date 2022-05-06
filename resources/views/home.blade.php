@extends('layouts.plantilla')

@section('titulo', 'Leasing | Página Principal')

@section('contenido')

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
            <h2 class="h2-tip">Hoteles favoritos en todo en España</h2>
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

    <!--- FOOTER -->
    <footer style="background-image: url({{ asset('images/back-footer.jpg') }});">
        <div class="py-5" id="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/logo.png') }}" height="200px" width="150px" id="img-footer" />
                        <p class="mt-4" id="p-footer">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                            ducimus ea doloribus, nam dolores reiciendis eius numquam quia
                            hic quisquam nisi culpa earum, ut magnam Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Non ducimus ea doloribus, nam
                            dolores reiciendis eius numquam.
                        </p>
                    </div>
                    <div class="col-md-4" id="footer-content1">
                        <ul class="footer-links list-unstyled">
                            <p class="mb-10">
                                <a href="comprar-enlaces/">Hoteles</a>
                            </p>
                            <p class="mb-10"><a href="linkbuilding/">Casas</a></p>
                            <p class="mb-10">
                                <a href="agencia-de-linkbuilding/">Apartamentos</a>
                            </p>
                            <p class="mb-10"><a href="medios/">Hostales y pensiones</a></p>
                            <p class="mb-10"><a href="agencias/">Albergues</a></p>
                            <p class="mb-10"><a href="backlinks/">Resorts</a></p>
                        </ul>
                    </div>
                    <div class="col-md-4" id="footer-content1">
                        <ul class="footer-links list-unstyled">
                            <p class="mb-10">
                                <a href="comprar-enlaces/">Alquiler de coches</a>
                            </p>
                            <p class="mb-10"><a href="linkbuilding/">Contacto</a></p>
                            <p class="mb-10">
                                <a href="agencia-de-linkbuilding/">Quienes somos</a>
                            </p>
                            <p class="mb-10"><a href="medios/">Política de privacidad y cookies</a></p>
                            <p class="mb-10"><a href="agencias/">Atención al cliente</a></p>
                            <p class="mb-10"><a href="backlinks/">Términos y condiciones</a></p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--COPYRIGHT-->
        <div class="copy-right py-2">
            <div class="container">
                <p class="text-center mt-2">
                    Copyright © 2022 Leasing. Todos los derechos
                    reservados.
                    <br />
                    Leasing líder mundial en viajes
                    online y servicios relacionados.
                </p>
            </div>
        </div>
    </footer>

    <!--BOTONES FIXED-->
    <div id="down-buttons" class="footer-buttons container-fluid show-down-buttons">
        <div class="row">
            <div class="col-md-6 col-xs-6 mobile-align-right">
                <a href="agencias/"> AGENCIA </a>
            </div>

            <div class="col-md-6 col-xs-6 mobile-align-left">
                <a href="medios/"> MEDIOS </a>
            </div>
        </div>
    </div>

    <!--Boton to top-->
    <button class="btn-scrolltop" id="btn_scrolltop">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

@endsection

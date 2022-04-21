<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    @yield('styles')

    <!--  yield = campo a rellenar -->
    <title>@yield('titulo')</title>
</head>

<body>

    <!--NAVBAR-->
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo.png') }}" width="89px" height="37px"
                        class="d-inline-block align-top" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-0">
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-dark" href="#">Alojamientos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-dark" href="#">Vuelos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-dark" href="#">Apartamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-dark" href="#">Vuelo + Hotel</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                        <li class="nav-item mx-2">
                            <a class="btn btn-outline-danger" href="#" role="button">Publica tu alojamiento</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn btn-outline-primary" href="#" role="button">Crear cuenta</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn btn-outline-primary" href="#" role="button">Iniciar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>@yield('contenido')</main>

    <!--- FOOTER -->
    <footer style="background-image: url({{ asset('images/back-footer.jpg') }});">
        <div class="py-5" id="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/logo.png') }}" alt="" id="img-footer" />
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
                                <a href="comprar-enlaces/">Comprar Enlaces</a>
                            </p>
                            <p class="mb-10"><a href="linkbuilding/">Linkbuilding</a></p>
                            <p class="mb-10">
                                <a href="agencia-de-linkbuilding/">Agencias de linkbuilding</a>
                            </p>
                            <p class="mb-10"><a href="medios/">Medios</a></p>
                            <p class="mb-10"><a href="agencias/">Agencias</a></p>
                            <p class="mb-10"><a href="backlinks/">Backlinks</a></p>
                        </ul>
                    </div>
                    <div class="col-md-4" id="footer-content1">
                        <ul class="footer-links list-unstyled">
                            <p class="mb-10">
                                <a href="comprar-enlaces/">Comprar Enlaces</a>
                            </p>
                            <p class="mb-10"><a href="linkbuilding/">Linkbuilding</a></p>
                            <p class="mb-10">
                                <a href="agencia-de-linkbuilding/">Agencias de linkbuilding</a>
                            </p>
                            <p class="mb-10"><a href="medios/">Medios</a></p>
                            <p class="mb-10"><a href="agencias/">Agencias</a></p>
                            <p class="mb-10"><a href="backlinks/">Backlinks</a></p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--COPYRIGHT-->
        <div class="copy-right py-2">
            <div class="container">
                <p class="text-center mt-2">
                    Copyright © 2022 Agoda Company Pte. Ltd. Todos los derechos
                    reservados.
                    <br />
                    Agoda.com es parte de Booking Holdings Inc., líder mundial en viajes
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

    <!--SCRIPT JAVASCRIPT-->
    <script src="{{ asset('js/home.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href={{ asset('images/logo.png') }}>

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
                <a class="navbar-brand" href="{{route('home')}}">
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
                            <a class="btn btn-outline-danger" href="{{route('signup')}}" role="button">Publica tu alojamiento</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn btn-outline-primary" href="{{route('signup')}}" role="button">Crear cuenta</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn btn-outline-primary" href="{{route('login')}}" role="button">Iniciar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>@yield('contenido')</main>

    <!--SCRIPT JAVASCRIPT-->
    <script src="{{ asset('js/home.js') }}"></script>

</body>

</html>

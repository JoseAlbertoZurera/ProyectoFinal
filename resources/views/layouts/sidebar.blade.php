<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon  -->
    <link rel="icon" type="image/png" href={{ asset('images/logo.png') }}>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    @yield('styles')

    <!--  yield = Campo título a rellenar -->
    <title>@yield('titulo')</title>
</head>

<body>

    @include('layouts.header')

    <main>
        <div class="container">
            <div class="row flex-nowrap" style=" min-height: 85vh;">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <h3 class="pt-3">
                            Bienvenido {{ Auth::user()->nombre }}
                        </h3>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link text-white" aria-current="page"><i
                                    class="fs-4 bi-house"></i>&nbsp Página principal</a>
                        </li>
                        <li>
                            @if (Route::currentRouteName() == 'dashboard')
                                <a href="{{ route('dashboard') }}" class="nav-link active"><i
                                        class="fs-4 bi-speedometer2"></i>&nbsp Mi cuenta</a>
                            @else
                                <a href="{{ route('dashboard') }}" class="nav-link text-white"><i
                                        class="fs-4 bi-speedometer2"></i>&nbsp Mi cuenta</a>
                            @endif
                        </li>
                        <li>
                            @if (Route::currentRouteName() == 'alojamientos.alojamientosUsuario')
                                <a href="{{ route('alojamientos.alojamientosUsuario', Auth::user()->nombre) }}"
                                    class="nav-link active"><i class="fs-4 bi-grid"></i>&nbsp Mis alojamientos</a>
                            @else
                                <a href="{{ route('alojamientos.alojamientosUsuario', Auth::user()->nombre) }}"
                                    class="nav-link text-white"><i class="fs-4 bi-grid"></i>&nbsp Mis alojamientos</a>
                            @endif
                        </li>
                        <li>
                            @if (Route::currentRouteName() == 'alojamientos.reservasUsuario')
                                <a href="{{ route('alojamientos.reservasUsuario', Auth::user()->nombre) }}"
                                    class="nav-link active"><i class="fs-4 bi-grid"></i>&nbsp Mis reservas</a>
                            @else
                                <a href="{{ route('alojamientos.reservasUsuario', Auth::user()->nombre) }}"
                                    class="nav-link text-white"><i class="fs-4 bi-grid"></i>&nbsp Mis reservas</a>
                            @endif
                        </li>
                        <li>
                            @if (Route::currentRouteName() == 'alojamientos.alojamientosReservados')
                                <a href="{{ route('alojamientos.alojamientosReservados', Auth::user()->nombre) }}"
                                    class="nav-link active"><i class="fs-4 bi-person-circle"></i>&nbsp
                                    Alojamientos reservados</a>
                            @else
                                <a href="{{ route('alojamientos.alojamientosReservados', Auth::user()->nombre) }}"
                                    class="nav-link text-white"><i class="fs-4 bi-person-circle"></i>&nbsp
                                    Alojamientos reservados</a>
                            @endif
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset(Auth::user()->ruta_imagen) }}" alt="" width="32" height="32"
                                class="rounded-circle me-2">
                            <strong>{{ Auth::user()->nombre }}</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="{{ route('alojamientos.create') }}">Publicar
                                    alojamiento</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('perfil.edit', Auth::user()->nombre) }}">Configuración</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('perfil.index', Auth::user()->nombre) }}">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col py-3">
                    @yield('contenido')
                </div>
            </div>
        </div>
    </main>

    @yield('JavaScript')

</body>

</html>

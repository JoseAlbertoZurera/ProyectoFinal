<!--NAVBAR-->
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3"">
        <div class="   container-fluid mx-3">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" width="75px" height="50px" class="d-inline-block align-top"
                alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-0">
                <li class="nav-item">
                    <a class="nav-link mx-2 text-dark" href="{{ route('alojamientos') }}">Alojamientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-dark" href="{{ route('alojamientos.create') }}">Publica tu
                        alojamiento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-dark" href="{{ route('contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-dark" href="{{ route('sobreNosotros') }}">Sobre nosotros</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nombre }}&nbsp
                            <img src="{{ asset(Auth::user()->ruta_imagen) }}" alt="" width="32" height="32"
                                class="rounded-circle me-2">
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                    class="fs-5 bi-speedometer2"></i> {{ __('Mi cuenta') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();"><i
                                    class="fs-5 bi-box-arrow-right"></i> {{ __('Cerrar sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        </div>
    </nav>
</header>

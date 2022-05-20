@extends('layouts.plantilla')
@section('styles')
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
@endsection
@section('titulo', 'Leasing | Perfil')

@section('contenido')
    <div class="container d-flex justify-content-center align-items-center">
        <section id="instructors" class="p-3">
            <div class="row">
                <div class="col-12">
                    <h1>Perfil</h1>
                    <p class="mt-4"> Maneja tu información personal y controla que información pueden ver el resto
                        de
                        usuarios</p>
                </div>
            </div>
            <br>
            <div class="row card">
                <div class="col-12">
                    <h3 class="mt-5 mb-4">Foto de perfil</h3>
                <img class="rounded-circle mb-4" width="160px" height="150px" src="{{ asset($user->ruta_imagen) }}">
                </div>
                <div class="col-12">
                    <h3 class="mb-4">Acerca de ti</h3>
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> Nombre completo</h5>
                        <p class="card-text">{{ $user->nombre }} {{ $user->apellidos }}</p>
                        <h5 class="card-title"><i class="fa fa-calendar" aria-hidden="true"></i> Fecha de nacimiento
                        </h5>
                        <p class="card-text">{{ $user->fecha_nacimineto }}</p>
                        <h5 class="card-title"><i class="fa fa-address-card" aria-hidden="true"></i> Dni<i
                                class="fa fa-id-card-o" aria-hidden="true"></i></h5>
                        <p class="card-text">{{ $user->dni }}</p>
                        <h5 class="card-title"><i class="fa fa-envelope" aria-hidden="true"></i> Correo electrónico</h5>
                        <p class="card-text">{{ $user->email }}</p>
                        <h5 class="card-title"><i class="fa fa-phone-square" aria-hidden="true"></i> Teléfono</h5>
                        <p class="card-text">{{ $user->telefono }}</p>
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-secondary w-100 mt-3"
                                    href="{{ route('perfil.edit', Auth::user()->nombre) }}">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <i class="fas fa-edit fa-lg"></i>
                                        </div>
                                        <div class="col-11">
                                            <span class="span-btn">Editar perfil</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <a class="btn btn-warning w-100 mt-3" href="{{ route('home') }}">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                                        </div>
                                        <div class="col-11">
                                            <span class="span-btn">Cerrar sesión</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-12">
                                <form action="{{ route('perfil.destroy', [$user]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger w-100 mt-3" type="submit"">
                                                        <div class="     row align-items-center">
                                        <div class="col-1">
                                            <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                                        </div>
                                        <div class="col-11">
                                            <span class="span-btn">Eliminar cuenta</span>
                                        </div>

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style=" min-height: 25vh;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Perfil') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('perfil.edit', Auth::user()->nombre) }}">Editar perfil</a>
                        <hr />
                        <form action="{{ route('perfil.destroy', [$user]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"">Eliminar cuenta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

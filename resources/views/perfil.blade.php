@extends('layouts.plantilla')
@section('styles')
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
@endsection
@section('titulo', 'Leasing | Perfil')

@section('contenido')

    <section id="instructors" class="p-3">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Perfil</h1>
                <p class="mt-4"> Maneja tu información personal y controla que información pueden ver el resto de
                    usuarios</p>
                <h3 class="mt-5 mb-4">Foto de perfil</h3>
                <div class="card">
                    <img class="rounded-circle mb-4" width="160px" height="140px"
                        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png">
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-sm-4">
                <h3 class="mb-4">Acerca de ti</h3>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nombre completo <i class="fa fa-user" aria-hidden="true"></i></h5>
                        <p class="card-text">Francisco Pérez López de Lerma</p>
                        <h5 class="card-title">Fecha de nacimiento <i class="fa fa-calendar" aria-hidden="true"></i>
                        </h5>
                        <p class="card-text">17/04/1998</p>
                        <h5 class="card-title">DNI <i class="fa fa-id-card-o" aria-hidden="true"></i></h5>
                        <p class="card-text">31027548L</p>
                        <h5 class="card-title">Correo electrónico <i class="fa fa-envelope" aria-hidden="true"></i></h5>
                        <p class="card-text">franciscoyaya98@gmail.com</p>
                        <h5 class="card-title">Telefono <i class="fa fa-phone-square" aria-hidden="true"></i></h5>
                        <p class="card-text">722235512</p>
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-warning w-100 mt-3" href="{{ route('dashboard') }}">
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </section>

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

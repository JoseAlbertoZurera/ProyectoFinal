@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/editarPerfil.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Leasing | Editar perfil')

@section('contenido')
    <section class="editar">
        <div class="container w-50 mt-3">
            <div class="row">
                <h2 class="text-center col-12">Editar Perfil</h2>
            </div>
            <form class="row p-5" method=" POST" action="{{ route('perfil.update', [$user]) }}">
                @method('PUT')
                @csrf
                <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle mb-4" width="240px"
                        height="230px" src="{{ asset($user->ruta_imagen) }}">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label"></label>
                        <input class="form-control" id="formFileSm" type="file" accept=".png, .jpg, .jpeg, .webp">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="form-group was-validated col-md-12 mb-2">
                        <label class="form-label" for="nombre"><i class="fa fa-user" aria-hidden="true"></i>
                            Nombre</label>
                        <input type="text" class="form-control" name="nombre"
                            value="{{ old('nombre', $user->nombre) }}">
                    </div>
                    <div class="form-group was-validated col-md-12 mb-2">
                        <label class="form-label" for="apellidos"><i class="fa fa-user" aria-hidden="true"></i>
                            Apellidos</label>
                        <input type="text" class="form-control" name="apellidos"
                            value="{{ old('apellidos', $user->apellidos) }}">
                    </div>
                    <div class="form-group was-validated col-md-12 mb-2">
                        <label class="form-label" for="fecha_nacimiento"><i class="fa fa-calendar"
                                aria-hidden="true"></i>
                            Fecha de nacimiento</label>
                        <input type="text" class="form-control" name="fecha_nacimiento"
                            value="{{ old('fecha_nacimiento', $user->fecha_nacimiento) }}">
                    </div>
                    <div class="form-group was-validated col-md-12 mb-2">
                        <label class="form-label" for="dni"><i class="fa fa-address-card" aria-hidden="true"></i>
                            Dni</label>
                        <input type="text" class="form-control" name="dni" value="{{ old('dni', $user->dni) }}">
                    </div>
                    <div class="form-group was-validated col-md-12 mb-2">
                        <label class="form-label" for="email"><i class="fa fa-envelope" aria-hidden="true"></i>
                            Correo electrónico</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                    </div>
                    <div class="form-group was-validated col-md-12 mb-2">
                        <label class="form-label" for="telefono"><i class="fa fa-phone" aria-hidden="true"></i>
                            Teléfono</label>
                        <input type="text" class="form-control" name="telefono"
                            value="{{ old('telefono', $user->telefono) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-warning w-100 mt-3" type="submit">
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <i class="fa-solid fa-floppy-disk"></i>
                                </div>
                                <div class="col-11">
                                    <span class="span-btn">Guardar perfil</span>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-warning w-100 mt-3" href="{{ route('dashboard') }}">
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </div>
                                <div class="col-11">
                                    <span class="span-btn">Salir</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/863190a504.js" crossorigin="anonymous"></script>
@endsection

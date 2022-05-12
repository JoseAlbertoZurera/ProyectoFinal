@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/editar.css') }}" rel="stylesheet">

@endsection

@section('titulo', 'Leasing | Editar perfil')

@section('contenido')
    <section class="editar">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <h3 class="text-center col-12 pt-5">Editar Perfil</h3>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex flex-column align-items-center text-center"><img class="img-tio"
                                width="300px" height="200px" src="{{ asset('images/alojamiento/tio.png') }}"><i
                                class="fas fa-edit"></i>
                            </span></div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label class="form-label" for="name"><i class="fa fa-user" aria-hidden="true"></i>
                                    Nombre</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="apellidos"><i class="fa fa-user"
                                        aria-hidden="true"></i>
                                    Apellidos</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="name"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    Fecha
                                    de
                                    nacimiento</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="dni"><i class="fa fa-address-card"
                                        aria-hidden="true"></i>
                                    Dni</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="email"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    Correo
                                    electrónico</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="password"><i class="fa fa-unlock-alt"
                                        aria-hidden="true"></i>
                                    Contraseña</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-12">
                                <label for="password-confirm" class="form-label"><i class="fa fa-unlock"
                                        aria-hidden="true"></i>{{ __(' Confirmar Contraseña') }}</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="telefono"><i class="fa fa-phone"
                                        aria-hidden="true"></i>
                                    Teléfono</label>
                                <input type="text" class="form-control" value="">
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
                                <button class="btn btn-warning w-100 mt-3" type="submit">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        </div>
                                        <div class="col-11">
                                            <span class="span-btn">Salir</span>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <!-- <div class="col-md-5 border-right">
                                                                                                                                                                                                                                                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                                                                                                                                                                                                                                                                </div> -->
            </div>
        </div>
        </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/863190a504.js" crossorigin="anonymous"></script>
@endsection

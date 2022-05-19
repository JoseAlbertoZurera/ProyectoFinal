@extends('layouts.plantilla')

@section('titulo', 'Leasing | Dashboard')

@section('styles')
    <link href="{{ asset('css/alojamientosPublicados.css') }}" rel="stylesheet">
@endsection

@section('contenido')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style=" min-height: 25vh;">
            <h3 class="pt-3" style="color: #00C2CB;">
                Bienvenido {{ Auth::user()->nombre }}
                <a class="mx-1" href="{{ route('login') }}" style="color: #00C2CB;"><i
                        class="fa-solid fa-right-from-bracket"></i></a>
            </h3>
            <div class="row py-5">
                <div class="col-md-12 col-sm-6">

                    <div class="card shadow">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>{{ __('Alojamientos publicados') }}</h5>
                            <a class="btn btn-outline-secondary btn-sm" href="{{ route('alojamientos.create') }}">Añadir
                                Alojamiento</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-sm">
                                <thead class="table-secondary">
                                    <tr>
                                        <th class="text-center">Nº Alojamiento</th>
                                        <th class="text-center">Ciudad</th>
                                        <th class="text-center">Código Postal</th>
                                        <th class="text-center">Dirección</th>
                                        <th class="text-center">Tipo</th>
                                        <th class="text-center">Fecha inicio</th>
                                        <th class="text-center">Fecha fin</th>
                                        <th class="text-center">Precio / Noche</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($alojamientos as $alojamiento)
                                        <tr>
                                            <th class="text-center">{{ $alojamiento->id }}</th>
                                            <td class="text-center">{{ $alojamiento->ciudad }}</td>
                                            <td class="text-center">{{ $alojamiento->codigo_postal }}</td>
                                            <td class="text-center">{{ $alojamiento->direccion }}</td>
                                            <td class="text-center">{{ $alojamiento->tipo_alojamiento }}</td>
                                            <td class="text-center">{{ $alojamiento->fecha_inicio }}</td>
                                            <td class="text-center">{{ $alojamiento->fecha_fin }}</td>
                                            <td class="text-center">{{ $alojamiento->precio_noche }}€</td>
                                            <td class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary btn-sm mx-1"><i
                                                        class="fas fa-eye fa-lg"></i></button>
                                                <button type="submit" class="btn btn-success btn-sm mx-1"><i
                                                        class="fas fa-edit fa-lg"></i></button>
                                                <form action="{{ route('alojamientos.destroy', [$alojamiento]) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm mx-1"><i
                                                            class="fa-solid fa-trash fa-lg"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>

                    <div class="card shadow mt-5">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>{{ __('Reservas realizadas') }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-sm">
                                <thead class="table-secondary">
                                    <tr>
                                        <th class="text-center">Nº Reserva</th>
                                        <th class="text-center">Fecha entrada</th>
                                        <th class="text-center">Fecha salida</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($reservas as $reserva)
                                        <tr>
                                            <th class="text-center">{{ $reserva->id }}</th>
                                            <td class="text-center">{{ $reserva->fecha_entrada }}</td>
                                            <td class="text-center">{{ $reserva->fecha_salida }}</td>
                                            <td class="text-center">{{ $reserva->estado }}</td>
                                            <td class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-success btn-sm mx-1"><i
                                                        class="fas fa-edit fa-lg"></i></button>
                                                <form action="{{ route('reservas.destroy', [$reserva]) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm mx-1"><i
                                                            class="fa-solid fa-trash fa-lg"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('perfil.index', Auth::user()->nombre) }}">Ver datos Perfil</a>
    </div>

@endsection

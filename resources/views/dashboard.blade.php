@extends('layouts.plantilla')

@section('titulo', 'Leasing | Dashboard')

@section('styles')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
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
                        <div class="card-body text-center">
                            <table class="table table-striped table-hover table-sm">
                                @if (sizeof($alojamientos))
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Nº Alojamiento</th>
                                            <th>Ciudad</th>
                                            <th>Código Postal</th>
                                            <th>Dirección</th>
                                            <th>Tipo</th>
                                            <th>Fecha inicio</th>
                                            <th>Fecha fin</th>
                                            <th>Precio / Noche</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alojamientos as $alojamiento)
                                            <tr>
                                                <th>{{ $alojamiento->id }}</th>
                                                <td>{{ $alojamiento->ciudad }}</td>
                                                <td>{{ $alojamiento->codigo_postal }}</td>
                                                <td>{{ $alojamiento->direccion }}</td>
                                                <td>{{ $alojamiento->tipo_alojamiento }}</td>
                                                <td>{{ $alojamiento->fecha_inicio }}</td>
                                                <td>{{ $alojamiento->fecha_fin }}</td>
                                                <td>{{ $alojamiento->precio_noche }}€</td>
                                                <td class="d-flex justify-content-center">
                                                    <a class="btn btn-primary btn-sm mx-1"
                                                        href="{{ route('alojamiento', [$alojamiento]) }}"
                                                        title="Ver alojamiento"><i class="fas fa-eye fa-lg"></i></a>
                                                    <a class="btn btn-success btn-sm mx-1"
                                                        href="{{ route('editarAlojamiento') }}"
                                                        title="Editar alojamiento"><i class="fas fa-edit fa-lg"></i></a>
                                                    <form class="eliminarAlojamiento"
                                                        action="{{ route('alojamientos.destroy', [$alojamiento]) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm mx-1"
                                                            title="Eliminar alojamiento"><i
                                                                class="fa-solid fa-trash fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <h7>Actualmente no tienes ningún alojamiento publicado</h7>
                                @endif
                            </table>
                        </div>
                    </div>

                    <div class="card shadow mt-5">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>{{ __('Reservas realizadas') }}</h5>
                        </div>
                        <div class="card-body text-center">
                            <table class="table table-striped table-hover table-sm">
                                @if (sizeof($reservas))
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Nº Reserva</th>
                                            <th>Fecha entrada</th>
                                            <th>Fecha salida</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($reservas as $reserva)
                                            <tr>
                                                <th>{{ $reserva->id }}</th>
                                                <td>{{ $reserva->fecha_entrada }}</td>
                                                <td>{{ $reserva->fecha_salida }}</td>
                                                <td>{{ $reserva->estado }}</td>
                                                <td class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-success btn-sm mx-1"
                                                        title="Modificar reserva"><i class="fas fa-edit fa-lg"></i></button>
                                                    <form action="{{ route('reservas.destroy', [$reserva]) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm mx-1"
                                                            title="Cancelar reserva"><i
                                                                class="fa-solid fa-xmark fa-xl"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <h7>Actualmente no has realizado niguna reserva</h7>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('perfil.index', Auth::user()->nombre) }}" class="btn btn-dark mt-3">
            <i class="bi bi-arrow-right"></i> Ver perfil
        </a>
    </div>

@endsection

@section('JavaScript')

    @if (session('alojamientoEliminado') != null)
        <script>
            Swal.fire(
                'Eliminado!',
                'Su alojamiento ha sido eliminado.',
                'success'
            )
        </script>
    @endif

@endsection

@extends('layouts.sidebar')

@section('titulo', 'Leasing | Dashboard')

@section('styles')
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
@endsection

@section('contenido')

    <div class="row d-flex justify-content-center align-items-center" style=" min-height: 25vh;">
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
                                        <th>Nombre</th>
                                        <th>Ciudad</th>
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
                                            <td>{{ $alojamiento->titulo }}</td>
                                            <td>{{ $alojamiento->ciudad }}</td>
                                            <td>{{ $alojamiento->direccion }}</td>
                                            <td>{{ $alojamiento->tipo_alojamiento }}</td>
                                            <td>{{ $alojamiento->fecha_inicio }}</td>
                                            <td>{{ $alojamiento->fecha_fin }}</td>
                                            <td>{{ $alojamiento->precio_noche }}€</td>
                                            <td class="d-flex justify-content-center">
                                                <a class="btn btn-primary btn-sm mx-1"
                                                    href="{{ route('alojamiento.show', [$alojamiento]) }}"
                                                    title="Ver alojamiento"><i class="fas fa-eye fa-lg"></i></a>
                                                <a class="btn btn-success btn-sm mx-1"
                                                    href="{{ route('editarAlojamiento') }}" title="Editar alojamiento"><i
                                                        class="fas fa-edit fa-lg"></i></a>
                                                <form class="eliminarAlojamiento" method="post"
                                                    action="{{ route('alojamientos.destroy', [$alojamiento]) }}">
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
                                        <th>Nombre</th>
                                        <th>Ciudad</th>
                                        <th>Dirección</th>
                                        <th>Fecha entrada</th>
                                        <th>Fecha salida</th>
                                        <th>Precio / Noche</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($reservas as $reserva)
                                        <tr>
                                            <th>{{ $reserva->id }}</th>
                                            <td>{{ $reserva->titulo }}</td>
                                            <td>{{ $reserva->ciudad }}</td>
                                            <td>{{ $reserva->direccion }}</td>
                                            <td>{{ $reserva->fecha_entrada }}</td>
                                            <td>{{ $reserva->fecha_salida }}</td>
                                            <td>{{ $reserva->precio_noche }}€</td>
                                            <td>{{ $reserva->estado }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a class="btn btn-primary btn-sm mx-1"
                                                    href="{{ route('alojamiento.show', [$reserva->id_alojamiento]) }}"
                                                    title="Ver alojamiento"><i class="fas fa-eye fa-lg"></i></a>
                                                <button type="submit" class="btn btn-success btn-sm mx-1"
                                                    title="Modificar reserva"><i class="fas fa-edit fa-lg"></i></button>
                                                <form method="post" class="cancelarReserva"
                                                    action="{{ route('reservas.cancelarReserva', [$reserva]) }}">
                                                    @method('put')
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
                                <h7>Niguna reserva realizada</h7>
                            @endif
                        </table>
                    </div>
                </div>

                <div class="card shadow mt-5">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>{{ __('Alojamientos reservados') }}</h5>
                    </div>
                    <div class="card-body text-center">
                        <table class="table table-striped table-hover table-sm">
                            @if (sizeof($alojamientosReservados))
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Nº Reserva</th>
                                        <th>Nombre</th>
                                        <th>Ciudad</th>
                                        <th>Dirección</th>
                                        <th>Fecha entrada</th>
                                        <th>Fecha salida</th>
                                        <th>Precio / Noche</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($alojamientosReservados as $alojamientosReservado)
                                        <tr>
                                            <th>{{ $alojamientosReservado->id }}</th>
                                            <td>{{ $alojamientosReservado->titulo }}</td>
                                            <td>{{ $alojamientosReservado->ciudad }}</td>
                                            <td>{{ $alojamientosReservado->direccion }}</td>
                                            <td>{{ $alojamientosReservado->fecha_entrada }}</td>
                                            <td>{{ $alojamientosReservado->fecha_salida }}</td>
                                            <td>{{ $alojamientosReservado->precio_noche }}€</td>
                                            <td>{{ $alojamientosReservado->estado }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a class="btn btn-primary btn-sm mx-1"
                                                    href="{{ route('alojamiento.show', [$alojamientosReservado->id_alojamiento]) }}"
                                                    title="Ver alojamiento"><i class="fas fa-eye fa-lg"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @else
                                <h7>Actualmente no dispones de ningún alojamiento reservado</h7>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('JavaScript')

    @if (session('alojamientoEliminado') != null)
        <script>
            Swal.fire(
                '¡Eliminado!',
                'Su alojamiento ha sido eliminado.',
                'success'
            )
        </script>
    @endif

    @if (session('reservaRealizada') != null)
        <script>
            Swal.fire(
                '¡Reserva realizada!',
                'Su reserva ha sido realizada correctamente.',
                'success'
            )
        </script>
    @endif

    @if (session('reservaCancelada') != null)
        <script>
            Swal.fire(
                '¡Reserva cancelada!',
                'Su reserva ha sido cancelada correctamente.',
                'success'
            )
        </script>
    @endif

@endsection

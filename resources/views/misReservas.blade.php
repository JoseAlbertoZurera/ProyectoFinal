@extends('layouts.sidebar')

@section('titulo', 'Leasing | Reservas')

@section('styles')
    <script src="{{ asset('js/misReservas.js') }}" defer></script>
@endsection

@section('contenido')

    @foreach ($reservas as $reserva)
        <div class="row">
            <div class="col-12 col-md-10 mb-4 ms-4">
                <div class="card">
                    <h3 class="card-header">{{ $reserva->titulo }}</h3>
                    <div class="card-body">

                        <div class="row mb-4">
                            <div class="col-6">
                                <h4 class="card-title">{{ $reserva->ciudad }}</h4>
                            </div>
                            <div class="col-6">
                                <p class="card-text text-muted text-end">Reservado el: {{ $reserva->created_at }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <p class="card-text"><i class="fa fa-address-card" aria-hidden="true"></i> Dirección:
                                    {{ $reserva->direccion }}</p>
                                <p class="card-text"><i class="fa-solid fa-book"></i> Resevado del
                                    {{ $reserva->fecha_entrada }} al
                                    {{ $reserva->fecha_salida }}</p>
                                <p class="card-text"><i class="fa-solid fa-clock"></i> Hora entrada:
                                    {{ $reserva->hora_entrada }}</p>
                            </div>
                            <div class="col-6">
                                <p class="card-text"><i class="fa-solid fa-money-check-dollar"></i>
                                    {{ $reserva->precio_noche }}€ por noche</p>
                                <p class="card-text"><i class="fa-solid fa-bell"></i> Estado de la reserva:
                                    <b>{{ $reserva->estado }}</b></p>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-3">
                                <a href="{{ route('alojamiento.show', [$reserva->id_alojamiento]) }}"
                                    class="btn btn-primary"><i class="fas fa-eye fa-lg"></i> Ver alojamiento</a>
                            </div>
                            <div class="col-3">

                            </div>
                            <div class="col-3"></div>
                            <div class="col-3 d-flex justify-content-end">
                                @if ($reserva->estado != 'Cancelado')
                                    @if ($reserva->estado != 'Finalizado')
                                        <form method="post" class="cancelarReserva"
                                            action="{{ route('reservas.cancelarReserva', [$reserva]) }}">
                                            @method('put')
                                            @csrf
                                            <button type="submit" title="Cancelar reserva" class="btn btn-danger"><i
                                                    class="fa-solid fa-xmark fa-xl cancelarReserva"></i> Cancelar
                                                Reserva</button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('JavaScript')

    @if (session('reservaCancelada') != null)
        <script>
            Swal.fire(
                '¡Reserva cancelada!',
                'Su reserva ha sido cancelada correctamente.',
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

@endsection

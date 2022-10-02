@extends('layouts.sidebar')

@section('titulo', 'Leasing | Mis alojamientos')

@section('styles')
    <script src="{{ asset('js/misAlojamientos.js') }}" defer></script>
@endsection

@section('contenido')

    @foreach ($alojamientos as $alojamiento)
        <div class="row">
            <div class="col-12 col-md-10 mb-4 ms-4">
                <div class="card shadow">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4">
                            <img src="{{ $alojamiento->ruta_imagen }}" class="card-img rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="h3 card-title">{{ $alojamiento->titulo }}</h3>
                                <p class="card-text text-muted "><span class="far fa-calendar-alt me-2"></span>Disponible
                                        del: {{ $alojamiento->fecha_inicio }} al {{ $alojamiento->fecha_fin }}</p>
                                <p class="card-text my-4">{{ $alojamiento->descripcion }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('alojamiento.show', [$alojamiento->id]) }}"
                                        class="btn btn-primary"><i class="fas fa-eye fa-lg"></i> Ver alojamiento</a>
                                    <form class="eliminarAlojamiento" method="post"
                                        action="{{ route('alojamientos.destroy', [$alojamiento]) }}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            title="Eliminar alojamiento"><i class="fa-solid fa-trash fa-lg"></i> Eliminar alojamiento</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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

@endsection

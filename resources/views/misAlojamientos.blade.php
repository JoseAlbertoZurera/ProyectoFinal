@extends('layouts.sidebar')

@section('titulo', 'Leasing | Mis alojamientos')

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
                                <h5 class="h5 card-title">{{ $alojamiento->titulo }}</h5>
                            <p class="card-text mb-4">{{ $alojamiento->descripcion }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-text small"><span class="far fa-calendar-alt me-2"></span>Disponible del: {{ $alojamiento->fecha_inicio }} al {{$alojamiento->fecha_fin}}</span>
                                <a href="{{ route('alojamiento.show', [$alojamiento->id]) }}" class="btn btn-dark mt-3">
                                    <i class="bi bi-arrow-right"></i> Mas información
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection

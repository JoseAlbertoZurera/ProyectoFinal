@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/alojamientos.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Leasing | Alojamientos')

@section('contenido')

<div class="container d-flex justify-content-end pt-2">
    {{ $alojamientos->links('vendor.pagination.bootstrap-4') }}
</div>

    @foreach ($alojamientos as $alojamiento)
        <section id="learn" class="text-dark pb-4">
            <div class="container contenedor">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 p-5">
                        <h2>{{$alojamiento->tipo_alojamiento}} {{ $alojamiento->nombre }}</h2>
                        <p class="lead">{{ $alojamiento->ciudad }}</p>
                        <span>{{ $alojamiento->habitaciones }} habitaciones</span>
                        <span>{{ $alojamiento->max_personas }} personas</span>
                        <i class="bi bi-house"></i>
                        <p class="text">{{ $alojamiento->descripcion }}</p>
                        <p class="text-2">
                            Disponible del: {{ $alojamiento->fecha_inicio }} al {{$alojamiento->fecha_fin}}

                            <br />
                            <br />

                            Precio: {{ $alojamiento->precio_noche }}€ / noche / persona
                        </p>
                        <a href="{{ route('alojamiento', [$alojamiento->id]) }}" class="btn btn-dark mt-3">
                            <i class="bi bi-arrow-right"></i> Mas información
                        </a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ $alojamiento->ruta_imagen }}" class="img-fluid" alt="" />

                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <div class="container pb-3">
        {{ $alojamientos->links('vendor.pagination.bootstrap-5') }}
    </div>

    @include('layouts.footer')
    
@endsection

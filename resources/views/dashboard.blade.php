@extends('layouts.plantilla')

@section('titulo', 'Leasing | Dashboard')

@section('contenido')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style=" min-height: 40vh;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Estás conectado!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

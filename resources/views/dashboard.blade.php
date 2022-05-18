@extends('layouts.plantilla')

@section('titulo', 'Leasing | Dashboard')

@section('contenido')
    <div class="container">
        <h3 class="text-primary pt-3">
            Bienvenido {{ Auth::user()->nombre }}
            <a class="btn btn-primary mx-1" href="{{ route('login') }}"><i
                    class="fa-solid fa-right-from-bracket"></i></a>
        </h3>
        <div class="row d-flex justify-content-center align-items-center" style=" min-height: 25vh;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

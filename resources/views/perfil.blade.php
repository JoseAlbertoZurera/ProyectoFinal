@extends('layouts.plantilla')

@section('titulo', 'Leasing | Perfil')

@section('contenido')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style=" min-height: 25vh;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Perfil') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('perfil.edit', Auth::user()->nombre) }}">Editar perfil</a>
                        <hr />
                        <form action="{{ route('perfil.destroy', [$user]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"">Eliminar cuenta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
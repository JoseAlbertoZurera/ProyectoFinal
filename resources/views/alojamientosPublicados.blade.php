@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/alojamientosPublicados.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Leasing | Lista Alojamientos')

@section('contenido')
    <div class="container">
        <h3 class="text-primary pt-3">
            Bienvenido {{ Auth::user()->nombre }}
            <a class="btn btn-primary mx-1" href="{{ route('login') }}"><i class="fa-solid fa-right-from-bracket"></i></a>
        </h3>
        <div class="row py-5">
            <div class="col-md-12 col-sm-6">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="text-primary">Alojamientos Publicados</h3>
                        <a class="btn btn-success" href="{{ route('alojamientos.create') }}">Añadir Alojamientos</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="text-center bg-black text-white">
                                <tr>
                                    <th>Nº ALOJAMIENTO</th>
                                    <th>CIUDAD</th>
                                    <th>CÓDIGO POSTAL</th>
                                    <th>DIRECCIÓN</th>
                                    <th>TIPO DE ALOJAMIENTO</th>
                                    <th>FECHA INICIO</th>
                                    <th>FECHA FIN</th>
                                    <th>PRECIO / NOCHE</th>
                                    <th>HABITACIONES</th>
                                    <th>MAX PERSONAS</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($alojamientos as $alojamiento)
                                    <tr>
                                        <th class="text-center">{{ $alojamiento->id }}</th>
                                        <td class="text-center">{{ $alojamiento->ciudad }}</td>
                                        <td class="text-center">{{ $alojamiento->codigo_postal }}</td>
                                        <td class="text-center">{{ $alojamiento->tipo_alojamiento }}</td>
                                        <td class="text-center">{{ $alojamiento->direccion }}</td>
                                        <td class="text-center">{{ $alojamiento->fecha_inicio }}</td>
                                        <td class="text-center">{{ $alojamiento->fecha_fin }}</td>
                                        <td class="text-center">{{ $alojamiento->precio_noche }}</td>
                                        <td class="text-center">{{ $alojamiento->habitaciones }}</td>
                                        <td class="text-center">{{ $alojamiento->max_personas }}</td>
                                        <td class="d-flex text-center">
                                            <button type="submit" class="btn btn-primary mx-1"><i
                                                    class="fas fa-eye"></i></button>
                                            <button type="submit" class="btn btn-success mx-1"><i
                                                    class="fas fa-edit"></i></button>
                                            <form action="{{ route('alojamientos.destroy', [$alojamiento]) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger mx-1"><i
                                                        class="fa-solid fa-xmark"></i></button>
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
    <script src="https://kit.fontawesome.com/863190a504.js" crossorigin="anonymous"></script>

@endsection

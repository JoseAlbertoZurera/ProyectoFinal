@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/lista.css') }}" rel="stylesheet">

@endsection

@section('titulo', 'Leasing | Lista Alojamientos')

@section('contenido')
    <div class="container-fluid">
        <h3 class="text-primary pt-3">
            Bienvenido Francisco
            <a class="btn btn-primary mx-1" href="{{ route('login') }}"><i class="fa-solid fa-right-from-bracket"></i></a>
        </h3>
        <div class="row py-5">
            <div class="col-md-12 col-sm-6">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="text-primary">Lista de Alojamientos</h3>
                        <a class="btn btn-success" href="{{ route('publica') }}">Añadir Alojamientos</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="text-center bg-black text-white">
                                <tr>
                                    <th>Nº REGISTRO</th>
                                    <th>CIUDAD</th>
                                    <th>CODIGO POSTAL</th>
                                    <th>DIRECCIÓN</th>
                                    <th>TIPO DE ALOJAMIENTO</th>
                                    <th>FECHA INICIO</th>
                                    <th>FECHA FIN</th>
                                    <th>PRECIO / NOCHE</th>
                                    <th>DESCRIPCIÓN</th>
                                    <th>HABITACIONES</th>
                                    <th>MAX PERSONAS</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center">256</th>
                                    <td class="text-center">Córdoba</td>
                                    <td class="text-center">14005</td>
                                    <td class="text-center">Avenida Guerrita P26 1º3</td>
                                    <td class="text-center">Apartamento</td>
                                    <td class="text-center">01/01/2022</td>
                                    <td class="text-center">31/12/2022</td>
                                    <td class="text-center">50€</td>
                                    <td class="text-center">
                                        Los Apartamentos Córdoba Atrium se encuentran en Córdoba,
                                        a solo 700 metros de la mezquita
                                    </td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">7</td>
                                    <td class="d-flex text-center">
                                        <a href="" class="btn btn-primary mx-1"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn btn-success mx-1"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger mx-1"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="text-center">256</th>
                                    <td class="text-center">Córdoba</td>
                                    <td class="text-center">14005</td>
                                    <td class="text-center">Avenida Guerrita P26 1º3</td>
                                    <td class="text-center">Apartamento</td>
                                    <td class="text-center">01/01/2022</td>
                                    <td class="text-center">31/12/2022</td>
                                    <td class="text-center">50€</td>
                                    <td class="text-center">
                                        Los Apartamentos Córdoba Atrium se encuentran en Córdoba,
                                        a solo 700 metros de la mezquita
                                    </td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">7</td>
                                    <td class="d-flex text-center">
                                        <a href="" class="btn btn-primary mx-1"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn btn-success mx-1"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger mx-1"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="text-center">256</th>
                                    <td class="text-center">Córdoba</td>
                                    <td class="text-center">14005</td>
                                    <td class="text-center">Avenida Guerrita P26 1º3</td>
                                    <td class="text-center">Apartamento</td>
                                    <td class="text-center">01/01/2022</td>
                                    <td class="text-center">31/12/2022</td>
                                    <td class="text-center">50€</td>
                                    <td class="text-center">
                                        Los Apartamentos Córdoba Atrium se encuentran en Córdoba,
                                        a solo 700 metros de la mezquita
                                    </td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">7</td>
                                    <td class="d-flex text-center">
                                        <a href="" class="btn btn-primary mx-1"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn btn-success mx-1"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger mx-1"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="text-center">256</th>
                                    <td class="text-center">Córdoba</td>
                                    <td class="text-center">14005</td>
                                    <td class="text-center">Avenida Guerrita P26 1º3</td>
                                    <td class="text-center">Apartamento</td>
                                    <td class="text-center">01/01/2022</td>
                                    <td class="text-center">31/12/2022</td>
                                    <td class="text-center">50€</td>
                                    <td class="text-center">
                                        Los Apartamentos Córdoba Atrium se encuentran en Córdoba,
                                        a solo 700 metros de la mezquita
                                    </td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">7</td>
                                    <td class="d-flex text-center">
                                        <a href="" class="btn btn-primary mx-1"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn btn-success mx-1"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger mx-1"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="text-center">256</th>
                                    <td class="text-center">Córdoba</td>
                                    <td class="text-center">14005</td>
                                    <td class="text-center">Avenida Guerrita P26 1º3</td>
                                    <td class="text-center">Apartamento</td>
                                    <td class="text-center">01/01/2022</td>
                                    <td class="text-center">31/12/2022</td>
                                    <td class="text-center">50€</td>
                                    <td class="text-center">
                                        Los Apartamentos Córdoba Atrium se encuentran en Córdoba,
                                        a solo 700 metros de la mezquita
                                    </td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">7</td>
                                    <td class="d-flex text-center">
                                        <a href="" class="btn btn-primary mx-1"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn btn-success mx-1"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger mx-1"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="text-center">256</th>
                                    <td class="text-center">Córdoba</td>
                                    <td class="text-center">14005</td>
                                    <td class="text-center">Avenida Guerrita P26 1º3</td>
                                    <td class="text-center">Apartamento</td>
                                    <td class="text-center">01/01/2022</td>
                                    <td class="text-center">31/12/2022</td>
                                    <td class="text-center">50€</td>
                                    <td class="text-center">
                                        Los Apartamentos Córdoba Atrium se encuentran en Córdoba,
                                        a solo 700 metros de la mezquita
                                    </td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">7</td>
                                    <td class="d-flex text-center">
                                        <a href="" class="btn btn-primary mx-1"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn btn-success mx-1"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger mx-1"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="text-center">256</th>
                                    <td class="text-center">Córdoba</td>
                                    <td class="text-center">14005</td>
                                    <td class="text-center">Avenida Guerrita P26 1º3</td>
                                    <td class="text-center">Apartamento</td>
                                    <td class="text-center">01/01/2022</td>
                                    <td class="text-center">31/12/2022</td>
                                    <td class="text-center">50€</td>
                                    <td class="text-center">
                                        Los Apartamentos Córdoba Atrium se encuentran en Córdoba,
                                        a solo 700 metros de la mezquita
                                    </td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">7</td>
                                    <td class="d-flex text-center">
                                        <a href="" class="btn btn-primary mx-1"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn btn-success mx-1"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger mx-1"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/863190a504.js" crossorigin="anonymous"></script>

@endsection

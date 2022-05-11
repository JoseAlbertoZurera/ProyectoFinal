@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/lista.css') }}" rel="stylesheet">

@endsection

@section('titulo', 'Leasing | Lista Alojamientos')

@section('contenido')
    <!--SECCION TITULO Y PERFIL-->
    <section>
        <h1 class=" mb-5">Bienvenido Francisco</h1>
    </section>
    <!--SECCION DE TABLA ALOJAMIENTOS-->
    <section>
        <table class="table table-striped">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Nº REGISTRO</th>
                    <th scope="col">CIUDAD</th>
                    <th scope="col">CODIGO POSTAL</th>
                    <th scope="col">DIRECCIÓN</th>
                    <th scope="col">TIPO DE ALOJAMIENTO</th>
                    <th scope="col">FECHA INICIO</th>
                    <th scope="col">FECHA FIN</th>
                    <th scope="col">PRECIO / NOCHE</th>
                    <th scope="col">DISPONIBILIDAD</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">RUTA DE IMAGEN</th>
                    <th scope="col">WIFI</th>
                    <th scope="col">PLAYA</th>
                    <th scope="col">LIMPIEZA</th>
                    <th scope="col">MASCOTAS</th>
                    <th scope="col">ESTACIONAMIENTO</th>
                    <th scope="col">AIRE ACONDICIONADO</th>
                    <th scope="col">HABITACIONES</th>
                    <th scope="col">MAX PERSONAS</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">256</th>
                    <td>Córdoba</td>
                    <td>14005</td>
                    <td>Avenida Guerrita P26 1º3</td>
                    <td>Apartamento</td>
                    <td>01/01/2022</td>
                    <td>31/12/2022</td>
                    <td>50€</td>
                    <td>Disponible</td>
                    <td>Los Apartamentos Córdoba Atrium se encuentran en Córdoba, a solo 700 metros de la mezquita
                    </td>
                    <td>-</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>3</td>
                    <td>7</td>

                </tr>
                <tr>
                    <th scope="row">1506</th>
                    <td>Córdoba</td>
                    <td>14005</td>
                    <td>Avenida Guerrita P26 1º3</td>
                    <td>Apartamento</td>
                    <td>01/01/2022</td>
                    <td>31/12/2022</td>
                    <td>50€</td>
                    <td>Disponible</td>
                    <td>Los Apartamentos Córdoba Atrium se encuentran en Córdoba, a solo 700 metros de la mezquita de
                        Córdoba, y ofrecen alojamiento con bar, jardín, terraza y WiFi gratuita. El apartamento tiene patio.
                    </td>
                    <td>-</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>3</td>
                    <td>7</td>

                </tr>
                <tr>
                    <th scope="row">786</th>
                    <td>Córdoba</td>
                    <td>14005</td>
                    <td>Avenida Guerrita P26 1º3</td>
                    <td>Apartamento</td>
                    <td>01/01/2022</td>
                    <td>31/12/2022</td>
                    <td>50€</td>
                    <td>Disponible</td>
                    <td>Los Apartamentos Córdoba Atrium se encuentran en Córdoba, a solo 700 metros de la mezquita de
                        Córdoba, y ofrecen alojamiento con bar, jardín, terraza y WiFi gratuita. El apartamento tiene patio.
                    </td>
                    <td>-</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>YES</td>
                    <td>3</td>
                    <td>7</td>

                </tr>

            </tbody>
        </table>
    </section>
    <section class="align-items-center text-center">
        <button type="button" class="btn btn-success w-25">Editar</button>
        <button type="button" class="btn btn-danger w-25">Eliminar</button>
    </section>
@endsection

@extends('layouts.plantilla')

@section('styles')
    <link href="{{ asset('css/cookies.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Leasing | Política de Cookies')

@section('contenido')

    <body>
        <section class="contacta  mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 id="info">Politica de Cookies</h1>

                        <h3 id="info-h3">POLÍTICA DE COOKIES</h3>
                        <p>En esta web recopilamos y utilizamos la información según indicamos en nuestra política de
                            privacidad. Una de las formas en las que recopilamos información es a través del uso de la
                            tecnología llamada “cookies”. En Leasing, utilizamos cookies para varias cosas.</p>

                        <h3 id="info-h3">¿Qué es una cookie?</h3>
                        <p>Una “cookie” es una pequeña cantidad de texto que se almacena en tu navegador (como Chrome de
                            Google o Safari de Apple) cuando navegas por la mayoría de los sitios web.</p>

                        <h3 id="info-h3">¿Qué NO es una cookie?</h3>
                        <p>No es un virus, ni un troyano, ni un gusano, ni spam, ni spyware, ni abre ventanas pop-up.</p>

                        <h3 id="info-h3">¿Qué información almacena una cookie?</h3>
                        <p>Las cookies no suelen almacenar información sensible sobre usted, como tarjetas de crédito o
                            datos bancarios, fotografías o información personal, etc. Los datos que guardan son de carácter
                            técnico, estadísticos, preferencias personales, personalización de contenidos, etc.

                            El servidor web no le asocia a usted como persona sino a su navegador web. De hecho, si usted
                            navega habitualmente con el navegador Chrome y prueba a navegar por la misma web con el
                            navegador Firefox, verá que la web no se da cuenta que es usted la misma persona porque en
                            realidad está asociando la información al navegador, no a la persona.</p>

                        <h3 id="info-h3">¿Qué tipo de cookies existen?</h3>
                        <p><strong>Cookies técnicas:</strong> Son las más elementales y permiten, entre otras cosas, saber
                            cuándo está navegando un humano o una aplicación automatizada, cuándo navega un usuario anónimo
                            y uno registrado, tareas básicas para el funcionamiento de cualquier web dinámica.
                            <br>
                            <strong>Cookies de análisis:</strong> Recogen información sobre el tipo de navegación que está
                            realizando, las secciones que más utiliza, productos consultados, franja horaria de uso, idioma,
                            etc.
                            <br>
                            <strong>Cookies publicitarias:</strong>Muestran publicidad en función de su navegación, su país
                            de procedencia, idioma, etc.
                        </p>


                        <h3 id="info-h3">¿Se pueden eliminar las cookies?</h3>
                        <p>Sí, y no sólo eliminar, también bloquear, de forma general o particular para un dominio
                            específico.

                            Para eliminar las cookies de un sitio web debe ir a la configuración de su navegador y allí
                            podrá buscar las asociadas al dominio en cuestión y proceder a su eliminación.</p>

                        <h3 id="info-h3">Más información sobre las cookies</h3>
                        <p>Puedes consultar el reglamento sobre cookies publicado por la Agencia Española de Protección de
                            Datos en su “Guía sobre el uso de las cookies” y obtener más información sobre las cookies en
                            Internet, <a href="http://www.aboutcookies.org/"
                                target="_blank">http://www.aboutcookies.org/</a>

                            Si desea tener un mayor control sobre la instalación de cookies, puede instalar programas o
                            complementos a su navegador, conocidos como herramientas de “Do Not Track”, que le permitirán
                            escoger aquellas cookies que desea permitir.</p>

                    </div>
                </div>
        </section>
    @endsection

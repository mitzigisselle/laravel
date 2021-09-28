@extends('layout.plantilla');
@section('titulo', 'Laravel');
@section('contenido')


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center text-bold">Laravel</h1>
            <p class="text-center">Laravel es un marco de aplicación web con una sintaxis elegante y expresiva. 
                Un marco web proporciona una estructura y un punto de partida para crear su aplicación, lo que le 
                permite concentrarse en crear algo sorprendente mientras nos preocupamos por los detalles.
            </p>
            <p class="text-center ">Laravel se esfuerza por proporcionar una experiencia de desarrollador 
                increíble al tiempo que proporciona funciones poderosas como la inyección de dependencias exhaustiva, 
                una capa de abstracción de base de datos expresiva, colas y trabajos programados, pruebas de integración 
                y unidad, y más.
            </p>
            <br>
            <h2 class="text-center  text-bold">¿Por qué Laravel?</h2>
            <br>
            <h5 class="text-bold">Comunidad</h5>
            <p>Laravel es un framework con una comunidad muy activa que orbita a su alrededor, 
                esto permite que el famework crezca y siempre existan paquetes y herramientas nuevas disponibles para su uso.
            </p>
            <br>
            <h5 class="text-bold">Instalación y actualización vía Composer</h5>
            <p>La instalación y posterior actualización del proyecto es muy simple, solo se deben actualizar las librerías y 
                versiones del lenguaje si es necesario en composer.json, 
                ejecutar composer update y listo, ya tenemos nuestro proyecto actualizado.
            </p>
            <br>
            <h5 class="text-bold">Manejo de Rutas</h5>
            <p>Laravel tiene un archivo de manejo de rutas al cual podemos pasar variables, instrucciones o derivaciones. Por ejemplo, podemos pedir a una ruta que ejecute un controller, 
                que abra una vista, que redireccione a otro archivo, que descargue una aplicación, etc.
            </p>
            <br>
            <h5 class="text-bold">Blade</h5>
            <p>El sistema de plantillas de Laravel. Esta exquisita herramienta nos permite crear layouts, pasar variables entre éstas, 
                crear zonas, ejecutar código PHP de manera moderna y hacer llamado a Eloquent, si es necesario.
            </p>
            <br>
            <h5 class="text-bold">PHP</h5>
            <p>Lavarel usa uno de los lenguajes de programación más populares del mundo, PHP; alguna de las redes sociales más usadas del mundo 
                fueron creadas en este lenguaje y Laravel se ha preocupado de que se utilice la última versión del lenguaje.
            </p>
        </div>

        <div class="col">
            <img class="mb-5" src="{{asset('img/lara1.png')}}" alt="" width="500xp" height="300xp">
            <img class="mt-5 mb-5" src="{{asset('img/lara2.png')}}" alt="" width="500xp" height="250xp">
            <img class="mt-5" src="{{asset('img/php.png')}}" alt="" width="500xp" height="250xp">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h1 class="text-center text-bold">Versiones de Laravel</h1>
            <p >El ciclo de vida de Laravel aún está evolucionando gracias a la comunidad tan grande que tiene y también al contar con la comunidad de Symfony al usar sus recursos en ciertas partes, y a lo mejor cuando leas esto ha sufrido un nuevo avance y existen
                 otras versiones que ya han sido publicadas con nuevas características para poder añadir a nuestras aplicaciones.
            </p>
            <p>El salto más significativo diría yo que lo dio Laravel al pasar a la versión 7, por ejemplo, con el cliente HTTP (Guzzle) que es tan fácil de usar y tantos nos resuelve a la hora de hacer peticiones HTTP, ya sean Get, Post o de otro tipo para consultar información que necesitemos según las 
                necesidades de nuestra aplicación. Aunque todas las versiones han incluido saltos significativos en su desarrollo.
            </p>
            <p>El salto más significativo diría yo que lo dio Laravel al pasar a la versión 7, por ejemplo, con el cliente HTTP (Guzzle) que es tan fácil de usar y tantos nos resuelve a la hora de hacer peticiones HTTP, ya sean Get, Post o de otro tipo para consultar información que necesitemos según las 
                necesidades de nuestra aplicación. Aunque todas las versiones han incluido saltos significativos en su desarrollo.
            </p>
            <p>
            La última versión estable que cuenta Laravel es la 8, que mejora la landing de inicio, el sistema de rutas y namespace, el sistema de plantillas y maquetación a la hora de extender que usa (Blade), un modo mantenimiento entre las que yo más destaco y/o he usado, aparte cuenta con más que 
            puedes ver en la documentación de esta versión que te dejo a continuación: <a href="https://laravel.com/docs/8.x/installation" class="link-secondary">https://laravel.com/docs/8.x/installation</a> 
            </p>
            <img class="mt-5" src="{{asset('img/images.jpg')}}" alt="" width="500xp" height="250xp">
        </div>
    </div>
    
    
</div>

@endsection
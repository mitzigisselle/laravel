@extends('layout.plantilla');
@section('titulo', 'Rutas');
@section('contenido')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1 class="text-bold text-center">Rutas</h1>

            <p>Cuando ingresamos a una url directamente desde el navegador lo hacemos mediante una petición http de tipo GET, esta solicitud se envía al archivo routes.php ubicado dentro de app/Http/routes.php, en caso de no existir nos dará un error, 
                si la ruta existe, nos llevará a un controlador en el cuál se encuentra la lógica , el controlador interaccionará 
                con un modelo (opcionalmente) para recuperar información de una base de datos. Esta información llega al controlador 
                y desde el controlador invocamos una vista, las vistas se encuentran en el directorio resources/views, finalmente la 
                vista se carga y se muestra en el navegador.
            </p>

            <p>Así es como funciona el modelo MVC (Model-View-Controller).Supongamos que queremos ingresar a la siguiente URL http:/dominio.com/saludo y desplegar una página con el mensaje “Bienvenido :)”. En laravel la porción /saludo pertenecería a una ruta que regresa una respuesta o una vista dependiendo lo complejo que llegue a ser lo que queramos mostrar. La parte de dominio.com pertenecería a localhost si lo andamos probando de manera local. En nuestro ejemplo lo que mostraremos 
                es un mensaje muy simple por lo cual no es necesario hacer mostrar una vista. Para lograrlo haremos lo siguiente:
            </p>
            <img class="mt-2" src="{{asset('img/ii.jpg')}}" alt="" width="250xp" height="250xp">
        </div>
    </div>
</div>

@endsection
@extends('layout.plantilla');
@section('titulo', 'Instalacion');
@section('contenido')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1 class="text-center">Como instalar Laravel</h1>
            <hr>
            <h3 class="mt-4">Requerimientos para Laravel</h3>
            <p>- Un entorno de desarrollo web: Apache, IIS, Nginx PHP 5.3 o superior</p>
            <p>- Base de datos: MySQL, Sqlite, Postgresql o sqlserver</p>
            <p>- Composer</p>
            <img class="mt-5" src="{{asset('img/entornos.jpg')}}" alt="" width="500xp" height="250xp">
            
            <hr>
            <h2 mt-5>Como instalar Composer</h2>
            <p>
            Composer es una herramienta para gestionar las dependencias en PHP. Te permite declarar las librerías de las cuales tu proyecto depende o necesita y las instala en el proyecto por ti
            </p>
            <p>- Para instalar Composer en Windows debemos descargarlo de su página oficial y en la sección Windows Installer, haz click en Composer-Setup.exe.</p>
            <img class="mt-2" src="{{asset('img/01.png')}}" alt="" width="500xp" height="350xp">
            <br>
            <p>- Una vez que la descarga finalice, ejecuta el instalador y haz click en Next.</p>
            <img class="mt-2" src="{{asset('img/02.png')}}" alt="" width="500xp" height="350xp">
            <br>
            <p>- Si quieres administrar tus proyectos mediante el Explorador de Windows puedes seleccionar la opción «Install Shell Menus» aunque lo recomendable es la usar la línea de comandos.</p>
            <img class="mt-2" src="{{asset('img/03.png')}}" alt="" width="500xp" height="350xp">
            <br>
            <p>- A continuación nos pide que indiquemos la ruta del ejecutable de PHP, en mi caso como estoy trabajando con XAMPP el ejecutable de PHP se encuentra en la ruta C:\xampp\php\ (si usas WAMPP la ruta es C:\wamp\bin\php\php5.5.12) y seleccionas php.exe, luego click en Next.</p>
            <img class="mt-2" src="{{asset('img/04.png')}}" alt="" width="500xp" height="350xp">
            <p>- En este punto el instalador de Composer nos muestra la configuración de la instalación, simplemente le damos click a Install.</p>
            <img class="mt-2" src="{{asset('img/05.png')}}" alt="" width="500xp" height="350xp">
            <p>- Una vez esté todo instalado, aparecerán otras donde simplemente debes hacer click en Next, y posteriormente en Finalizar; después de tantos Next, Next típicos de Windows el instalador de Composer habrá puesto en nuestro PATH global la ruta de la carpeta PHP y su propia carpeta Composer. Esto nos permite trabajar desde consola escribiendo sólo php o composer sin necesidad de indicar la ruta del ejecutable. Para 
                ver que todo está en orden vamos a realizar dos pequeñas pruebas, así que es momento de abrir la consola, y teclear:
            </p>
            <h5 class="text-bold">php -v (tecla Enter)</h5>
            <h5 class="text-bold">composer -version (tecla Enter)</h5>
            <p>- Esto debería devolver la versión de cada uno, como se ve en la siguiente imagen:</p>
            <img class="mt-2 mb-5" src="{{asset('img/06.png')}}" alt="" width="500xp" height="350xp">



            <h2 mt-5>Creando proyecto en Laravel</h2>
            <p>Desde la consola, dirígete al directorio donde guardas tus proyectos web (si usas XAMPP la ruta es C:\xampp\htdocs para WAMPP es C:\wamp\www), y teclea lo siguiente:

            </p>
            <h5 class="text-bold">cd C:\xampp\htdocs</h5>
            <p>- Ahora crearemos el proyecto laravel escribiendo las siguientes palabras:</p>
            <h5 class="text-bold">composer create-project laravel/laravel nombre_del_proyecto</h5>
            <img class="mt-2 mb-5" src="{{asset('img/07.png')}}" alt="" width="500xp" height="350xp">
            <p>- Composer empezará a descargar las librerías necesarias para nuestro proyecto, esto requiere un poco de tiempo.</p>
            <img class="mt-2 mb-5" src="{{asset('img/08.png')}}" alt="" width="500xp" height="350xp">
            <p>Si no ocurrió algún problema de conexión a Internet veremos que nuestro proyecto se creó correctamente.</p>
            <img class="mt-2 mb-5" src="{{asset('img/09.png')}}" alt="" width="500xp" height="350xp">
            <p>Finalmente para verificar que la creación de nuestro proyecto “pruebita” se realizó de manera correcta, accede a http://localhost/nombre_del_proyecto/public
                 en el navegador de tu preferencia, donde debes ver lo siguiente:
            </p>
            <img class="mt-2 mb-5" src="{{asset('img/10.png')}}" alt="" width="500xp" height="350xp">
        </div>
    </div>
</div>

@endsection
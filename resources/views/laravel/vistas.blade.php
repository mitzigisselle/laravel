@extends('layout.plantilla');
@section('titulo', 'Vistas');
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-bold text-center">Vistas y Blade</h1>
            <p>Las vistas en Laravel son la parte pública que el usuario de nuestro sistema va a poder ver, se escriben en HTML junto con un motor de plantillas llamado Blade. Las vistas se encuentran ubicadas en la carpeta resources/views/ y Laravel por defecto trabaja con la idea de que tenemos que escribir la menor cantidad de código repetido, modularizar nuestro código
                 en donde mas se pueda, esto lo aplicamos en nuestros modelos, controladores y demás partes de nuestro proyecto
            </p>
            <p>Laravel usa unos archivos que se llaman plantillas o templates que suelen ser nuestros archivos principales, que tienen los segmentos de código que se repiten en mas de una vista, como por ejemplo la barra de navegacion, un menú de opciones, la estructura del acomodo de nuestro proyecto, etc. y como deben de estar practicamente presentes en todos lados, no tiene sentido estarlos repitiendo en todas las vistas. Por defecto Laravel contiene un template llamado app.blade.php, usualmente los templates
                 contienen el head del HTML, las ligas del CSS del sistema y una seccion exclusiva para los archivos Javascript.
            </p>
            <p>
                Además de los templates, se cuentan con archivos que se llaman partials, estos archivos son pequeños segmentos de 
                código que suelen ser usados comunmente en partes del sistema en especifico, como los formularios o secciones de 
                mensajes, estos archivos surgen por el código que es mas pequeño que repetimos mucho pero no es lo suficientemente grande como para considerarlo un template.
                Esto hace que las vistas de cada parte del proyecto, que suelen ser llamadas por una ruta o controlador sean 
                mucho mas pequeñas que usando otro tipo de frameworks para desarrollo Web, y para poder unir todos estos archivos o 
                piezas del rompecabezas usamos el motor de plantillas de Laravel llamado BLADE.
            </p>
            <p>Antes de ver mas sobre el motor de plantillas Blade, veremos como trabajar con las Vistas y llamarlas desde 
                una ruta, crearemos un vista simple con un archivo nuevo en la carpeta resources/views/ 
                llamado saludo.blade.php con el siguiente código:
            </p>
            <img class="mt-2" src="{{asset('img/aaa.jpg')}}" alt="" width="500xp" height="350xp">
            <p>Es un HTML simple con un titulo 1, ahora vamos a crear una ruta que nos muestre esta vista:</p>
            <p>Route::get('saludo', function(){</p>
            <p>return view('saludo');</p>
            <p>});</p>
            
            <p>De esta forma con la función view() le estamos diciendo a Laravel que busque dentro de la carpeta resources/views/ la vista saludo.blade.php, por convension las vistas Laravel no necesita que especifiquemos la extension .blade.php, 
                sino solo su nombre. Una vez hecho esto debemos ver este resultado o uno similar:
            </p>
            <img class="mt-2" src="{{asset('img/vista.png')}}" alt="" width="500xp" height="350xp">




            <h2 class="text-bold ">Blade</h2>
            <p>Blade nos provee de muchas ventajas (asi como casi todo en Laravel), además de modularizar nuestras vistas de una forma sorprendente, tambien nos permite usar estructuras de control
                 y variables de PHP directamente en ellas, aunque esto ya era posible antes usando las etiquetas de php.
            </p>
            


            <h2 class="text-bold ">Templates</h2>
            <p>Estos archivos como se menciona al principio
                del capítulo son plantillas que nos ahorran mucho código o leguaje HTML, y para usar un template se usa la sentencia: 
            </p>
            <img class="mt-2" src="{{asset('img/bb.jpg')}}" alt="" width="200xp" height="200xp">
            <p>Claramente se tendria que sustituir la palabra template dentro de la sentencia extends por el nombre de la vista que va a funcionar como template o plantilla.Un template es una vista como las demás, simplemente que dentro de ella se usan otras sentencias que nos va a permitir definir areas del archivo
                que se van a poder sustituir mas adelante dentro de otra vista si es que lo deseamos. Para esto se ocupa la sentencia:
            </p>
            <img class="mt-2" src="{{asset('img/cc.jpg')}}" alt="" width="200xp" height="200xp">
            <p>Para declarar una seccion que se va a rellenar en otro lugar:</p>
            <img class="mt-2" src="{{asset('img/dd.jpg')}}" alt="" width="200xp" height="200xp">
            <p>que funciona de la misma forma que yield() con la diferencia que en la seccion puedes definir HTML por defecto en caso de no definir la seccion con un nuevo HTML.</p>
            
        </div>
    </div>
</div>

@endsection
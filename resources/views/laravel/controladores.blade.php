@extends('layout.plantilla');
@section('titulo', 'Controladores');
@section('contenido')



<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h1 class="text-bold text-center">Controladores</h1>

            <p>En lugar de definir en su totalidad la lógica de las peticiones en el archivo routes.php, es posible que desee organizar este comportamiento usando clases tipo Controller. Los Controladores puede agrupar las peticiones HTTP relacionada con la manipulación lógica en una clase. Los Controladores normalmente se almacenan en el directorio de aplicación app/Http/Controllers/.</p>
            <p>Un controller usualmente trabaja con las peticiones:</p>
            <p>GET.</p>
            <p>POST.</p>
            <p>PUT.</p>
            <p>DELETE.</p>
            <p>PATCH.</p>

            <p>Los controladores nos ayudan a agrupar estas peticiones en una clase que se liga a las rutas, en el archivo app/Http/routes.php</p>
            <img class="mt-2" src="{{asset('img/ff.jpg')}}" alt="" width="250xp" height="250xp">

            <p>Esta ruta nos creara un grupo de rutas de recursos con las peticiones que estas mencionadas arriba: index, create, show, edit, store, update, destroy. Estas son las operaciones mas usadas en una clase y para no tener que crear una ruta para cada método es que Laravel agrupa todo esto con una ruta de tipo resource que se liga a un controlador.</p>
            <p>Estos métodos significan:</p>
            <p>1. index: Es el método inicial de las rutas resource, usualmente lo usamos para mostrar una vista como página principal que puede contener un catalogo o resumen de la información del modelo al cual pertenece o bien no mostrar información y solo tener la función de página de inicio.</p>
            <p>2. create: Este método lo podemos usar para direccionar el sistema a la vista donde se van a recolectar los datos(probablemente con un formulario) para después almacenarlos en un registro nuevo, usualmente redirige al index.</p>
            <p>3. show: Aqui podemos hacer unna consulta de un elemento de la base de datos o de todos los elementos o registros por medio del modelo para realizar una descripcion.</p>
            <p>4. edit: Este método es similar al de create porque lo podemos usar para mostrar una vista que recolecta los datos pero a diferencia de create es con el fin de actualizar un registro.</p>
            <p>5. store: Aqui es donde se actualiza un registro en especifico que proviene del método create y normalmente redirige al index.</p>
            <p>6. update: Al igual que el store, solo que en vez de provenir de create proviene de edit y en vez de crear un nuevo registro, busca un existente y lo modifica, tambien suele redirigir al index.</p>
            <p>7. destroy: En este método usualmente se destruye o elimina un registro y la petición puede provenir de donde sea siempre y cuando sea llamado con el método DELETE, después puede redirigir al index o a otro sitio dependiendo si logro eliminar o no.</p>
            <p>Ahora esto no quiere decir que un controlador necesariamente debe ejecutar estas peticiones obligatoriamente, podemos omitirlas o incluso agregar mas</p>

            <p>Para crear controladores en Laravel usamos artisan con el siguiente comando:</p>
            <img class="mt-2" src="{{asset('img/gg.jpg')}}" alt="" width="250xp" height="250xp">
            <p>El comando anterior creara un controlador en la carpeta app/Http/Controllers/ que por defecto va a tener todos estos métodos dentro de si</p>

            <p>Con esto vamos a poder trabajar para cada método del controlador una ruta y las funciones internas son las que se van a ejecutar, el archivo creado se verá de la siguiente manera:</p>
            <img class="mt-2" src="{{asset('img/hh.png')}}" alt="" width="600xp" height="500xp">

        </div>
    </div>
    
</div>

@endsection
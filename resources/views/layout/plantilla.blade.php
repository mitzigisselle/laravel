<!doctype html>
<html lang="en">

<head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body style="background-color: white">

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar  navbar-expand-lg navbar-dark" style="background-color:#4B4948">
                    <a class="navbar-brand" href="/index"> <img class="ml-5" src="{{asset('img/lara.png')}}" alt="" width="150xp" height="100xp"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active ml-5">
                                <a class="nav-link" href="/laravel/instalacion">Instalacion<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active ml-5">
                                <a class="nav-link ml-5" href="/laravel/vistas">Vistas</a>
                            </li>
                            <li class="nav-item active ml-5">
                                <a class="nav-link ml-5" href="/laravel/rutas">Rutas</a>
                            </li>
                            <li class="nav-item active ml-5">
                                <a class="nav-link ml-5" href="/laravel/controladores">Controladores</a>
                            </li>
                            <li class="nav-item active ml-5">
                                <a class="nav-link ml-5" href="/laravel/url">Validaciones</a>
                            </li>
                            

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container" >
        <div class="row">
            <div class="col">
                <p>
                    @yield('contenido')
                </p>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-4 mb-5" style="background-color: #4B4948;">
        <div class="row mt-5">
            <div class="col mt-5 ml-5">
                <h5 class="text-bold text-white">Reflejos</h5>
                <p class="text-white">Nuestro equipo</p>
                <p class="text-white">Notas de lanzamiento</p>
                <p class="text-white">Empezando</p>
                <p class="text-white">Enrutamiento</p>
                <p class="text-white">Plantillas Blade</p>
                <p class="text-white">Autenticacion</p>
                <p class="text-white">Autorización</p>
            </div>
            <div class="col mt-5">
                <h5 class="text-bold text-white">Recursos</h5>
                <p class="text-white">Laracast</p>
                <p class="text-white">Noticias Laravel</p>
                <p class="text-white">Laracon</p>
                <p class="text-white">Laracon UE</p>
                <p class="text-white">Trabajos</p>
                <p class="text-white">Certificacion</p>
                <p class="text-white">Foros</p>

            </div>
            <div class="col mt-5">
                <h5 class="text-bold text-white">Socios</h5>
                <p class="text-white">Vehikl</p>
                <p class="text-white">Apretar</p>
                <p class="text-white">64 robots</p>
                <p class="text-white">Curotec</p>
                <p class="text-white">Diseño A2</p>
                <p class="text-white">Byte 5</p>
                <p class="text-white">Cubet</p>
            </div>
            <div class="col mt-5">
                <h5 class="text-bold text-white">Ecosistema</h5>
                <p class="text-white">Cajero</p>
                <p class="text-white">Eco</p>
                <p class="text-white">Horizonte</p>
                <p class="text-white">Lumen</p>
                <p class="text-white">Mezcla</p>
                <p class="text-white">Pasaporte</p>
                <p class="text-white">Explorar</p>
            </div>
            
        </div>

        <div class="row mt-3">
            <div class="col"></div>
            <div class="col">
                <p class="text-white">Laravel es un marco de aplicación web con una sintaxis elegante y expresiva. Creemos que el desarrollo debe ser una experiencia divertida y creativa para ser verdaderamente satisfactorio. Laravel intenta aliviar el dolor del desarrollo facilitando las tareas comunes que se utilizan en la mayoría de los proyectos web.</p>
                <p class="text-white">Laravel es una marca registrada de Taylor Otwell. Copyright © 2011-2021 Laravel LLC.</p>
                <img src="" alt="">
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col ">
                <img class="mt-5 mb-5 ml-5" src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="" width="50xp" height="50xp">
                <img class="mt-5 mb-5" src="https://fotos-themonkeybusiness.s3.eu-west-3.amazonaws.com/wp-content/uploads/2021/03/06021844/icono-instagram-png-transparente.png" alt="" width="50xp" height="50xp">
                <img class="mt-5 mb-5" src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" alt="" width="50xp" height="50xp">
                <img class="mt-5 mb-5" src="https://cdn.icon-icons.com/icons2/195/PNG/256/YouTube_23392.png" alt="" width="50xp" height="50xp">
            </div>
            <div class="col"></div>
        </div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
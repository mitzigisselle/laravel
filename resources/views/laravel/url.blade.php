@extends('layout.plantilla');
@section('titulo', 'URL');
@section('contenido')


<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1 class="text-center text-bold">Validaciones</h1> 
            
            <p>
            Existen varias formas de validar nuestra aplicación 
            para cubrir aspectos de seguridad como SQL Injection, ataques XSS o CSRF, algunas de ellas son:
            </p>
            <p>- Validación de lado del cliente (Javascript y etiquetas HTML).</p>
            <p>- Validación a nivel de base de datos (Migraciones y modelos)</p>
            <p>- Validación de formularios (Request).</p>


            <h2 class="text-bold">Validación del lado del cliente:</h2>
            <p>Podemos validar que los campos de un formulario sean requeridos al agregar el atributo required.</p>

            <p>El atributo required es un atributo booleano. Cuando esta presente, este especifica que un campo debe ser rellenado antes de ser enviado el contenido del formulario.
                El atributo required trabaja con los siguientes tipos de input:
            </p>
            <p>- text</p>
            <p>- search</p>
            <p>- url</p>
            <p>- tel</p>
            <p>- email</p>
            <p>- password</p>
            <p>- data pickers</p>
            <p>- number</p>
            <p>- checkbox</p>

            <h2 class="text-bold">El atributo pattern</h2>
            <p>Con se menciono anteriormente, con required solo se necesita de cualquier valor en el elemento <input> para ser válido, pero utilizando el atributo pattern en conjunto, se logra que se verifique no solo la presencia de un valor, sino que este valor debe contener un formato, una longitud o un tipo de dato especifico. Esto último se logra definiendo un patrón con expresiones regulares</p>


            <h2 class="text-bold">Validación de formularios con plugins JQuery</h2>
            <p>El mejor plugin JQuery para validar formularios es formvalidation. Sin embargo formvalidation es un plugin que tiene un costo dependiendo la licencia que queramos ocupar.</p>
            <p>Smoke es el más completo plugin JQuery diseñado para trabajar con bootstrap 3</p>

            <h2 class="text-bold">Validacion del lado servidor</h2>
            <p>Laravel permite validar los datos enviados por un formulario de forma muy sencilla ocupando un Mecanismo llamados "Requests".</p>
        </div>
    </div>
</div>

@endsection
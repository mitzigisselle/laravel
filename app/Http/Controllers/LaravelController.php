<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function laravelinstalacion(){
        $vistas = view('laravel/instalacion');
        return $vistas;
    }

    public function laravelvistas(){
        $vistas =
                view('laravel/vistas');
    return $vistas;
    }
    public function laravelrutas(){
        $vistas =
                view('laravel/rutas');
    return $vistas;
    }
    public function laravelcontroladores(){
        $vistas =
                view('laravel/controladores');
    return $vistas;
    }
    public function laravelurl(){
        $vistas =
                view('laravel/url');
    return $vistas;
    }
}

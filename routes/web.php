<?php


use App\Http\Controllers\IndexController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LaravelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', InicioController::class);
Route::get('/index',[IndexController::class, 'index'] );
Route::get('/laravel/instalacion', [LaravelController::class, 'laravelinstalacion']);
Route::get('/laravel/vistas',  [LaravelController::class, 'laravelvistas']);
Route::get('/laravel/rutas',  [LaravelController::class, 'laravelrutas']);
Route::get('/laravel/controladores',  [LaravelController::class, 'laravelcontroladores']);
Route::get('/laravel/url', [LaravelController::class, 'laravelurl']);
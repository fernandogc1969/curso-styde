<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return 'Bienvenido';
});

Route::get('/usuarios', function () {
    return "<h1>Usuarios</h1>";
});

Route::get('/usuarios/{id}', function ($id) {
    return "<h1>Bienvenido usuario <span style='color:red'>{$id}</span></h1>";
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return "<h1>Creando nuevo usuario</h1>";
});

Route::get('/usuarios/{id}/{nombre?}', function ($id, $nombre = null) {
    return "<h1>Bienvenido usuario <span style='color:red'>{$id}</span></h1><h2>Tu nombre es {$nombre}</h2>";
});

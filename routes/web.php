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

Route::get('/', function () {
   //return view('welcome');
    echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>";
});

// Ruta basica
Route::get('saludos', function() {
   return "Saludos desde la app";
});

// Ruta con parametros obligatorios
Route::get('saludos/{nombre}', function($nombre) {
    return "Hola " . $nombre;
});

// Ruta con parametros opcionales
Route::get('despedida/{nombre?}', function($nombre = "usuario") {
    return "Hasta luego " . $nombre;
});

// Names route
Route::get('listaContactos', function () {
    return "Seccion de contactos";
})->name('contactos');

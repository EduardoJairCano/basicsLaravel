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

$informacion = [
    'curso' => 'Basics Laravel',
    'modalidad' => 'Internet',
    'precio' => 'Gratuito'
];

Route::view('home', 'home', ['nombre' => 'Jair'])->name('home');

Route::view('info', 'info', compact('informacion'))->name('info');

Route::view('laravel', 'welcome')->name('laravel');

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

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);
//Darle nombre a la ruta para evitar cambiar en todas las páginas
Route::get('contactanos', ['as' => 'contactos', function () {
    return view('contactos');
}]);
//Agregamos un ? para que el parametro nombre no sea obligatorio definirlo por la url
//Agregamos where para validar el nombre, para que sea solamente letras y no numeros
Route::get('saludos/{nombre?}', ['as' => 'saludos', function ($nombre = "Invitado") {
    return view('saludo', compact('nombre'));
}])->where('nombre', "[A-Za-z]+");
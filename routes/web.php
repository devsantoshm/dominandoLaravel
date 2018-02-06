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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
//Darle nombre a la ruta para evitar cambiar en todas las páginas
Route::get('contactanos', ['as' => 'contactos', 'uses' => 'PagesController@contact']);
//Agregamos un ? para que el parametro nombre no sea obligatorio definirlo por la url
//Agregamos where para validar el nombre, para que sea solamente letras y no numeros
Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");
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
//Agregamos un ? para que el parametro nombre no sea obligatorio definirlo por la url
//Agregamos where para validar el nombre, para que sea solamente letras y no numeros
Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");

Route::resource('mensajes', 'MessagesController');

/*Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);
Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
Route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);
Route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
Route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);*/
Auth::routes();
/*$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');*/

Route::get('/home', 'HomeController@index')->name('home');

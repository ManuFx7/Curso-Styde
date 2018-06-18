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
    return view('welcome');
});

/* Listado de usuarios */

Route::get('/usuarios','UsersController@index')->name('users');

/* Listado de detalles de usuario */

Route::get('/usuarios/detalles/{user}','UsersController@show')->where('user','[0-9]+')->name('users.show');

/* Info */

Route::get('/usuarios/info','UsersController@info')->name('users.info');

/* Muestra el formulario */

Route::get('/usuarios/nuevo','UsersController@create')->name('users.create');

/* Procesar datos del guardado */

Route::post('/usuarios/crear','UsersController@store');


/* Editar datos del guardado */ 

Route::get('/usuarios/{id}/edit','UsersController@edit')->where('id','[0-9]+');



Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');

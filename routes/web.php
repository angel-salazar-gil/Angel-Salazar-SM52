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

/*
| Accedemos al controlador "PruebaController" creado en la carpeta app
| Especificamente en la funcion "prueba"
*/
Route::get('prueba/{param}', 'PruebaController@prueba');

Route::resource('trainers', 'TrainerController');

/*
| Se pueden meter Informacion pro medio de este tipo de rutas, y abilitarlos para que acepten valores nulos
| O hacer que tengan valores por defecto.
|
| Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = null) {
|     return 'Hola soy '.$name.' '.$lastname;
| });
*/

/*
| Este es un ejemplo de una ruta GET "Normal"
|
| Route::get('/mi_primer_ruta', function() {
|     return 'Hello World, esta es mi primer ruta';
| });
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

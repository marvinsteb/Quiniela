<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/liga/unirse','LigaController@unirse');
Route::get('/liga/crearparaapuesta','LigaController@CrearApuesta');
Route::resource('/liga','LigaController');


Route::resource('/marcador','MarcadorController');
Route::resource('/ganador','GanadoresController');
Route::resource('/final','MFinalController');

Route::get('/ganadores/lista','listarGanadoresController@ListaGanadores');
Route::get('/ganadores/liga','listarGanadoresController@LigasGanadoras');
Route::resource('/ganadores','listarGanadoresController');


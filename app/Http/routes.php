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

Route::get('/apiv1/encuestas', 'EncuestasController@index');
Route::get('/apiv1/opciones/{id}', 'OpcionesController@index');
Route::get('/apiv1/preguntas/{id}', 'PreguntasController@index');
Route::get('/apiv1/enc/{id}', 'EnController@index' );

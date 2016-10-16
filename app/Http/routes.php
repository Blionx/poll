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
Route::get('/', function()
{
	return View('login');
});
Route::get('/dashboard','MainController@index');
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');
Route::get('login',function(){
	return View('login');
});
//Users Routes
Route::get('/usuarios','UsersController@index');
Route::get('/usuarios/delete/{id}','UsersController@delete');
Route::get('/usuarios/nuevo','UsersController@newer');
Route::post('/usuarios/crear','UsersController@create');
Route::get('/usuarios/editar/{id}','UsersController@edit');
Route::post('/usuarios/editor/{id}','UsersController@editor');
Route::get('/usuarios/saveemp/{uid}/{eid}','UsersController@saveemp');
Route::get('/usr_companydelete/{id}','UsersController@elimcompany');
//Users Routes End
//Company Routes
Route::get('/company','CompanyController@index');
Route::get('/company/delete/{id}','CompanyController@delete');
Route::get('/company/nuevo','CompanyController@newer');
Route::post('company/crear','CompanyController@create');
Route::get('company/editar/{id}','CompanyController@edit');
Route::post('company/editor/{id}','CompanyController@editor');
//Company Routes End
//encuestas Routes
Route::get('/encuestas','PollController@index');
Route::get('/encuestas/delete/{id}','PollController@delete');
Route::get('/encuestas/nuevo','PollController@newer');
Route::post('encuestas/crear','PollController@create');
Route::get('encuestas/editar/{id}','PollController@edit');
Route::post('encuestas/editor/{id}','PollController@editor');
//encuestas Routes End
//tipo de opciones Routes Begin
Route::get('/Topciones','TOpcionesController@index');
Route::get('/Topciones/delete/{id}','TOpcionesController@delete');
Route::get('/Topciones/nuevo','TOpcionesController@newer');
Route::post('/Topciones/crear','TOpcionesController@create');
Route::get('/Topciones/editar/{id}','TOpcionesController@edit');
Route::post('/Topciones/editor/{id}','TOpcionesController@editor');
//tipo de opciones Routes END
//preguntas Routes Begin
Route::get('/preguntas/{id}','Preguntas2Controller@index');
Route::get('/preguntas/delete/{id}','Preguntas2Controller@delete');
Route::get('/preguntas/nuevo/{id}','Preguntas2Controller@newer');
Route::post('/preguntas/crear/{id}','Preguntas2Controller@create');
Route::get('/preguntas/editar/{eid}/{id}','Preguntas2Controller@edit');
Route::post('/preguntas/editor/{eid}/{id}','Preguntas2Controller@editor');
//preguntas Routes END
//opciones Routes Begin
Route::get('/opciones/{id}','OpcionesController@index');
Route::get('/opciones/delete/{id}','OpcionesController@delete');
Route::get('/opciones/nuevo/{id}','OpcionesController@newer');
Route::post('/opciones/crear/{id}','OpcionesController@create');
Route::get('/opciones/editar/{tid}/{id}','OpcionesController@edit');
Route::post('/opciones/editor/{tid}/{id}','OpcionesController@editor');
//opciones Routes END
//Poll User View Routes Begin
Route::get('/Vista_de_encuestas','UsersViewController@index');
//Poll User View Routes End
//Api Routes
Route::get('/apiv1/encuestas','EncuestasController@index');
Route::any('/apiv1/savepoll','EncuestasController@save');
Route::any('/apiv1/deleteenc/{id}','EncuestasController@delete');
Route::any('/apiv1/preguntas/{id}','PreguntasController@index');
Route::any('/apiv1/savenewp/{id}','PreguntasController@save');
//Api Routes End
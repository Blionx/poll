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
Route::get('/usuarios/nuevo','UsersController@new');
Route::post('/usuarios/crear','UsersController@create');
Route::get('/usuarios/editar/{id}','UsersController@edit');
Route::post('/usuarios/editor/{id}','UsersController@editor');
Route::get('/usr_companydelete/{id}','UsersController@elimcompany');
//Users Routes End
//Company Routes
Route::get('/company','CompanyController@index');
Route::get('/company/delete/{id}','CompanyController@delete');
Route::get('/company/nuevo','CompanyController@new');
Route::post('company/crear','CompanyController@create');
Route::get('company/editar/{id}','CompanyController@edit');
Route::post('company/editor/{id}','CompanyController@editor');
//Company Routes End
//encuestas Routes
Route::get('/encuestas','PollController@index');
Route::get('/encuestas/delete/{id}','PollController@delete');
Route::get('/encuestas/nuevo','PollController@new');
Route::post('encuestas/crear','PollController@create');
Route::get('encuestas/editar/{id}','PollController@edit');
Route::post('encuestas/editor/{id}','PollController@editor');
//encuestas Routes End
//Api Routes
Route::get('/apiv1/encuestas','EncuestasController@index');
Route::any('/apiv1/savepoll','EncuestasController@save');
Route::any('/apiv1/deleteenc/{id}','EncuestasController@delete');
Route::any('/apiv1/preguntas/{id}','PreguntasController@index');
Route::any('/apiv1/savenewp/{id}','PreguntasController@save');
//Api Routes End
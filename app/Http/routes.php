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
    return view('index');
});

//Route::get('materiales', 'materialesController@index');

Route::group(['prefix' => 'admin'], function(){

	Route::resource('usuarios','UsuariosController');
	Route::get('usuarios/{id}/destroy', [
		'uses' => 'UsuariosController@destroy',
		'as'   => 'admin.usuarios.destroy'
	]);

	Route::resource('materiales','MaterialesController');
	Route::get('materiales/{id}/destroy', [
		'uses' => 'materialesController@destroy',
		'as'   => 'admin.materiales.destroy'
	]);
});

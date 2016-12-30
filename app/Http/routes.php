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
//Redirección para no auntenticados
Route::get('/', function () {
    return view('auth/login');
});

//Route::get('materiales', 'materialesController@index');

Route::group(['middleware' => 'auth','prefix' => 'admin'], function(){
	//Usuarios
	Route::resource('usuarios','UsuariosController');
	Route::get('usuarios/{id}/destroy', [
		'uses' => 'UsuariosController@destroy',
		'as'   => 'admin.usuarios.destroy'
	]);
	Route::get('usuarios/{id}/asignar_rol', [
		'uses' => 'UsuariosController@asignar_rol',
		'as'   => 'admin.usuarios.asignar_rol'
	]);
	//Materiales
	Route::resource('materiales','MaterialesController');
	Route::get('materiales/{id}/destroy', [
		'uses' => 'materialesController@destroy',
		'as'   => 'admin.materiales.destroy'
	]);
	//Clientes
	Route::resource('clientes','ClientesController');
	Route::get('clientes/{id}/destroy', [
		'uses' => 'clientesController@destroy',
		'as'   => 'admin.clientes.destroy'
	]);
	//Vendedores
	Route::resource('vendedores','VendedoresController');
	Route::get('vendedores/{id}/destroy', [
		'uses' => 'vendedoresController@destroy',
		'as'   => 'admin.vendedores.destroy'
	]);
	//Departamentos
	Route::resource('dptos','DptosController');
	Route::get('dptos/{id}/destroy', [
		'uses' => 'DptosController@destroy',
		'as'   => 'admin.dptos.destroy'
	]);
});

//Auntenticación
Route::auth();

Route::get('/home', 'HomeController@index');


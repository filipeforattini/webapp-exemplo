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

Route::get('/', function(){ return 'Home'; });

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/produtos', 		'ProdutosController@index');

	Route::get('/fabricantes/{id}', 		'FabricantesController@show');
	Route::get('/fabricantes/{id}/edit', 	'FabricantesController@edit');
	Route::post('/fabricantes/{id}', 		'FabricantesController@update');

});

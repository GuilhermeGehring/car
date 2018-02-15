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
		return view('layout');
	});

Route::group(['prefix'                 => 'estado', 'as'                 => 'state.'], function () {
		Route::get('/', ['as'                => 'index', 'uses'                => 'StateController@index']);
		Route::get('/criar', ['as'           => 'create', 'uses'           => 'StateController@create']);
		Route::post('/salvar', ['as'         => 'store', 'uses'         => 'StateController@store']);
		Route::get('/editar/{id}', ['as'     => 'edit', 'uses'     => 'StateController@edit']);
		Route::post('/atualizar/{id}', ['as' => 'update', 'uses' => 'StateController@update']);
		Route::get('/deletar/{id}', ['as'    => 'destroy', 'uses'    => 'StateController@destroy']);
	});

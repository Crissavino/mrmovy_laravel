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

Route::get('paso1', 'PasosController@createPaso1')->middleware('auth');
Route::post('paso1', 'PasosController@insertPaso1');

Route::get('paso2', 'PasosController@createPaso2')->middleware('auth');
Route::post('paso2', 'PasosController@insertPaso2');

Auth::routes();

Route::get('/', 'StaticController@index');
Route::get('info/{id}', 'StaticController@info')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('resultados', 'ResultadosController@index')->middleware('auth');


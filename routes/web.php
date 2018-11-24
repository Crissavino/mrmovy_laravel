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

Route::get('index', 'StaticController@index');


Route::get('paso1', 'PasosController@createPaso1')->middleware('auth');
Route::post('paso1', 'PasosController@insertPaso1');

Route::get('paso2', 'PasosController@createPaso2')->middleware('auth');
Route::post('paso2', 'PasosController@insertPaso2');

Route::get('paso3', 'PasosController@createPaso3')->middleware('auth');
Route::post('paso3', 'PasosController@insertPaso3');
Route::post('paso3Tag', 'PasosController@insertPaso3Tag');
Route::post('paso3Final', 'PasosController@insertFinal');

Route::post('insertar', 'PasosController@insertView');


Route::get('carga', 'CargaController@createCarga')->middleware('auth');
Route::post('carga', 'CargaController@insertCarga');

Route::get('carga/edicion/{id}', 'CargaController@editCarga')->middleware('auth');
Route::put('carga/edicion/{id}', 'CargaController@updateCarga');

Route::get('carga/actor', 'CargaController@cargaActor')->middleware('auth');
Route::post('carga/actor', 'CargaController@insertActor');

Route::get('carga/productor', 'CargaController@cargaProductor')->middleware('auth');
Route::post('carga/productor', 'CargaController@insertProductor');


Auth::routes();

Route::get('/', 'StaticController@index');
Route::get('info/{id}', 'StaticController@info')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('resultados', 'ResultadosController@index')->middleware('auth');


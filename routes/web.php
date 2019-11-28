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
    

    
Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/eventos/create', 'eventosController@create');
Route::post('/eventos','eventosController@store');
Route::get('/eventos/{id}/edit', 'eventosController@edit');
Route::put('/eventos/{id}', 'eventosController@update');
Route::get('/eventos/{id}/delete', 'eventosController@delete');
Route::delete('/eventos/{id}', 'eventosController@destroy');



Route::get('/esportes/create', 'esportesController@create');
Route::post('/esportes','esportesController@store');
Route::get('/esportes/{id}/edit', 'esportesController@edit');
Route::put('/esportes/{id}', 'esportesController@update');
Route::get('/esportes/{id}/delete', 'esportesController@delete');
Route::delete('/esportes/{id}', 'esportesController@destroy');



Route::get('/atletas/create', 'atletasController@create');
Route::post('/atletas','atletasController@store');
Route::get('/atletas/{id}/edit', 'atletasController@edit');
Route::put('/atletas/{id}', 'atletasController@update');
Route::get('/atletas/{id}/delete', 'atletasController@delete');
Route::delete('/atletas/{id}', 'atletasController@destroy');


});

Route::get('/eventos', 'eventosController@index');
Route::get('/eventos/{id}', 'eventosController@show');


Route::get('/esportes', 'esportesController@index');
Route::get('/esportes/{id}', 'esportesController@show');


Route::get('/atletas', 'atletasController@index');
Route::get('/atletas/{id}', 'atletasController@show');

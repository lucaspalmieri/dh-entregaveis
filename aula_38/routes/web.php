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

Route::get('/form', 'FilmesController@form');

Route::post('/adicionar', 'FilmesController@validar');

Route::get('/actors/add', 'AtoresController@form');

Route::post('/adicionarAtor', 'AtoresController@validar');

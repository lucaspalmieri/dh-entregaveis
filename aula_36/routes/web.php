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

Route::get('/filmes/{id}', 'FilmesController@procurarFilmeId');

Route::get('/filmes/procurar/{nome}', 'FilmesController@procurarFilmeNome');

Route::get('/filmes/{id}', function(){
  return view('filmes');
});

Route::get('/adicionarFilme/{filme}​', 'FilmesController@adicionarFilme');

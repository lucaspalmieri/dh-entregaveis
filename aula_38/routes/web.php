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

                  /* Rotas de filmes */

Route::get('/listaFilmes', 'FilmesController@listaFilmes');

Route::get('/movie/exibir/{id}', 'FilmesController@exibir');

Route::get('/formAddFilme', 'FilmesController@formAddFilme');

Route::post('/adicionarFilme', 'FilmesController@adicionarFilme');

Route::get('/movie/edit/{id}', 'FilmesController@formEditFilme');

Route::put('/editarFilme/{id}', 'FilmesController@editarFilme');

Route::get('/movie/delete/{id}', 'FilmesController@prepararDeletar');

Route::delete('/deletarFilme/{id}', 'FilmesController@deletar');

                /* Rotas de Atores */

Route::get('/listaAtores', 'AtoresController@listaAtores');

Route::get('/actor/exibir/{id}', 'AtoresController@exibir');

Route::get('/formAddAtor', 'AtoresController@formAddAtor');

Route::post('/adicionarAtor', 'AtoresController@adicionarAtor');

Route::get('/actor/edit/{id}', 'AtoresController@formEditAtor');

Route::put('actor/edit/{id}', 'AtoresController@editarAtor');

Route::get('/actor/delete/{id}', 'AtoresController@prepararDeletar');

Route::delete('/deletarAtor/{id}', 'AtoresController@deletar');

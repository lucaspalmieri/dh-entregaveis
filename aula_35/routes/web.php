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

Route::get('/meuPrimeiroCaminho', function(){
  return 'Criei meu primeiro caminho em Laravel';
});

Route::get('/resultado/{numero}/{numeroOpcional?}/{numero2?}', function ($numero, $numeroOpcional = null, $numero2 = null){
    if(isset($numeroOpcional)){
      return $numero * $numero2;
    }elseif($numero %2 == 0){
      return 'Numero par';
    }else{
      return 'Numero impar';
    }
});

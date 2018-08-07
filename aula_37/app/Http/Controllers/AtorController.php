<?php

namespace App\Http\Controllers;
use App\Actors;
use Illuminate\Http\Request;

class AtorController extends Controller
{
    public function directory(){
      $atores = Actors::join('movies','movies.id','=','actors.favorite_movie_id')->get();
      return view('atores')->with('atores', $atores);
    }

    public function mostrar($id){
      $ator = Actors::find($id);
      $nome = $ator->getNomeCompleto();
      return view('ator')->with('ator', $nome);
    }
}

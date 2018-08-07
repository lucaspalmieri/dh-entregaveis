<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function procurarFilmeId($id){
            $filmes = [
      1 => "Toy Story",
      2 => "Procurando Nemo",
      3 => "Avatar",
      4 => "Star Wars: Episódio V",
      5 => "Up",
      6 => "Mary e Max"
      ];

      $resultado ='';

      foreach($filmes as $key => $value){
        if($id == $key){
          $resultado = $value;
          break;
        }else{
          $resultado = 'Filme não encontrado';
        }
      }
      echo $resultado;
    }

    public function procurarFilmeNome($nome){
            $filmes = [
      1 => "Toy Story",
      2 => "Procurando Nemo",
      3 => "Avatar",
      4 => "Star Wars: Episódio V",
      5 => "Up",
      6 => "Mary e Max"
      ];

      $resultado = '';

      foreach ($filmes as $key => $value) {
        if($value == $nome){
          $resultado = $value;
          break;
        }else{
          $resultado = 'Filme não encontrado';
        }
      }
      echo $resultado;
    }

    public function adicionarFilme($filme){
      return view('filmes');      
    }
}

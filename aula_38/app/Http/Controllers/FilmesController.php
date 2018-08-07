<?php

namespace App\Http\Controllers;
use app\movies;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
  public function form(){
    return view('form');
  }

  public function validar(Request $request){
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $date = $ano.$mes.$dia;
    $date = 'release_date';

    $this->validate($request, [
      'title' => 'required|unique:movies|max:500',
      'rating' => 'required|numeric',
      'awards' => 'required|numeric',
      'length' => 'required|numeric'
      // 'release_date' => 'date'
    ]);
    return view('form')->with('request', $request);
  }

  // public function adicionar(){
  //   $usuario = User:create([
  //     'title' => $request->input('title')
  //   ]);
  //   $usuario->save();
  // }
}

<?php

namespace App\Http\Controllers;
use App\actor;
use App\movie;
use Illuminate\Http\Request;

class AtoresController extends Controller
{

  public function listaAtores(){
    $lista = actor::orderBy('first_name', 'asc')->get();
    return view('listaAtores')->with('lista', $lista);
  }

  public function exibir($id){
    $ator = actor::find($id);
    return view('exibirAtor')->with('ator', $ator);
  }

  public function formAddAtor(){
    $lista = movie::orderBy('title', 'asc')->get();
    return view('adicionarAtor')->with('lista', $lista);
  }

  public function adicionarAtor(Request $request){
    $this->validate($request, [
      'first_name' => 'required|unique:actors|max:10',
      'last_name' => 'required|max:10',
      'rating' => 'required|numeric',
      'filmeFavorito' => 'required'
    ]);
    $ator = actor::create([
      'first_name' => $request->input('first_name'),
      'last_name' => $request->input('last_name'),
      'rating' => $request->input('rating'),
      'favorite_movie_id' => $request->input('filmeFavorito')
  ]);
    $ator->save();
    return redirect('/listaAtores');
  }

  public function formEditAtor($id){
    $atualizar = actor::find($id);
    return view('editarAtor')->with('atualizar', $atualizar);
  }

  public function editarAtor(Request $request, $id){
    $atualizar = actor::find($id);
    $atualizar->first_name = $request->input('first_name');
    $atualizar->last_name = $request->input('last_name');
    $atualizar->rating = $request->input('rating');
    $atualizar->save();
    return redirect('/listaAtores');
  }

  public function prepararDeletar($id){
    $deletar = actor::find($id);
    return view('deletarAtor')->with('deletar', $deletar);
  }

  public function deletar(Request $request, $id){
    $deletar = actor::find($id);
    $deletar->delete();
    return redirect('/listaAtores');
  }
}

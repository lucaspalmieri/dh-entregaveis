<?php

namespace App\Http\Controllers;
use App\movie;
use Illuminate\Http\Request;

class FilmesController extends Controller
{

  public function listaFilmes(){
    $lista = movie::orderBy('title', 'asc')->paginate(3);
    return view('filmes.listaFilmes')->with('lista', $lista);
  }

  public function exibir($id){
    $filme = movie::find($id);
    return view('filmes.exibirFilme')->with('filme', $filme);
  }

  public function formAddFilme(){
    return view('filmes.adicionarFilme');
  }

  public function adicionarFilme(Request $request){
    $this->validate($request, [
      'title' => 'required|unique:movies|max:500',
      'rating' => 'required|numeric',
      'awards' => 'required|numeric',
      'length' => 'required|numeric',
      'release_date' => 'required'
    ]);

    $usuario = movie::create([
      'title' => $request->input('title'),
      'rating' => $request->input('rating'),
      'awards' => $request->input('awards'),
      'release_date' => $request->input('release_date'),
      'length' => $request->input('length')
    ]);
    $usuario->save();
    return redirect('/listaFilmes');
  }

  public function formEditFilme($id){
    $atualizar = movie::find($id);
    return view('filmes.editarFilme')->with('atualizar', $atualizar);
  }

  public function editarFilme(Request $request, $id){
    $atualizar = movie::find($id);
    $atualizar->title = $request->input('title');
    $atualizar->rating = $request->input('rating');
    $atualizar->awards = $request->input('awards');
    $atualizar->release_date = $request->input('release_date');
    $atualizar->length = $request->input('length');
    $atualizar->save();
    return redirect('/listaFilmes');
  }

  public function prepararDeletar($id){
    $deletar = movie::find($id);
    return view('filmes.deletarFilme')->with('deletar', $deletar);
  }

  public function deletar($id){
    $deletar = movie::find($id);
    $deletar->delete();
    return redirect('/listaFilmes');
  }
}

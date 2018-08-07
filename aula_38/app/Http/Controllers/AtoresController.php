<?php

namespace App\Http\Controllers;
use App\movie;
use Illuminate\Http\Request;

class AtoresController extends Controller
{
  public function form(){
    return view('add');
  }
  public function validar(Request $request){
    $this->validate($request, [
      'first_name' => 'required|unique:actors|max:10',
      'last_name' => 'required|max:10',
      'rating' => 'required|numeric'
    ]);
    return view('add');
  }
}

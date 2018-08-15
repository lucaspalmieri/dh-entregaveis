<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Lista de Filmes</title>
  </head>
  <body>
    <div style="text-align:center;">
      <h1>Lista de Filmes</h1><br>
      <a href="/formAddFilme">Adicionar Filme</a><br><br>
      @foreach ($lista as $filme)
        {{$filme->title}}:&nbsp;
        <a href="/movie/exibir/{{$filme->id}}">Exibir</a> -
        <a href="/movie/edit/{{$filme->id}}">Editar</a> -
        <a href="/movie/delete/{{$filme->id}}">Deletar</a><br>
      @endforeach
      {{$lista->links()}}
    </div>

  </body>
</html>

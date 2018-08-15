<div style="text-align:center;">
  <h1>Lista de Atores</h1>
  <a href="/formAddAtor">Adicionar Ator</a><br><br><br>
  @foreach ($lista as $ator)
    {{$ator->getNomeCompleto()}}
    <a href="/actor/exibir/{{$ator->id}}">Exibir</a> - 
    <a href="/actor/edit/{{$ator->id}}">Editar</a> -
    <a href="/actor/delete/{{$ator->id}}">Deletar</a><br>
  @endforeach
</div>

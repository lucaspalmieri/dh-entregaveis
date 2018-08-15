<b>{{$ator->getNomeCompleto()}}</b><br>
<ul>
  <li>Nome: {{$ator->first_name}}</li>
  <li>Sobrenome: {{$ator->last_name}}</li>
  <li>Avaliação: {{$ator->rating}}.</li>
  <li>Filme favorito: {{$ator->filmeFavorito->title}}</li>
</ul>
<a href="/listaAtores">Retornar a lista</a>

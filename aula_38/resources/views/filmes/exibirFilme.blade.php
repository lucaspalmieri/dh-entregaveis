  <b>{{$filme->title}}</b><br>
  <ul>
    <li>Avaliação: {{$filme->rating}}</li>
    <li>Premios: {{$filme->awards}}</li>
    <li>Duração: {{$filme->getLength()}}.</li>
    @if (isset($filme->genero))
    <li>Genero: {{$filme->genero->name}}</li>
    @else
    <li>Genero: genero não consta no banco de dados.</li>
    @endif
    <li>Atores:
                <ul>
                @foreach ($filme->actor as $actor)
                  <li>
                    {{$actor->getNomeCompleto()}}
                </li>
                @endforeach
                </ul>
    </li>
  </ul>
  <a href="/listaFilmes">Retornar a lista</a>

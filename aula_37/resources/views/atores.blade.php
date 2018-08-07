<ul>
  @foreach ($atores as $ator)
    <li>{{$ator->getNomeCompleto()}}: {{$ator->title}}</li>
  @endforeach
</ul>

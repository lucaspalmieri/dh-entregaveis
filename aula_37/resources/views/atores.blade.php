<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Procurar ator</title>
  </head>
  <body>
    <form style="text-align: center;" class="formulario" action="/atores/procurar" method="post">
      {{ csrf_field() }}
      <label for="procurar">Procurar ator</label><br>
      <input type="text" name="procurar_ator"><br>
      <input type="submit" name="enviar" value="Enviar">
    </form>
    <br>
      <div style="text-align: center;">
        @if ($ator)
          {{$ator[0]->getNomeCompleto()}}
        @endif
      </div>

  </body>
</html>


  {{-- @foreach ($atores as $ator)
//     <li>{{$ator->getNomeCompleto()}} - {{$ator->rating}}: {{$ator->title}}</li>
// </ul> --}}

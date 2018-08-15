<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Deletar filme</title>
    </head>
    <body>

        <h1 align="center">Formulário de Delete</h1>
        <h6 align="center">Tem certeza que deseja deletar este ator?</h6>
        <form action="/deletarAtor/{{$deletar->id}}" id="deletarFilme" name="deletarFilme" method="POST">
          {{csrf_field()}}
          {{method_field('DELETE')}}
            <div class="form-group col-6 m-auto">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="{{$deletar->first_name}}" name="title" id="title" disabled/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" value="{{$deletar->last_name}}" name="rating" id="rating" disabled/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Avaliação</label>
                <input type="text" class="form-control" value="{{$deletar->rating}}" name="awards" id="awards" disabled/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Filme favorito do ator</label>
                @if ($deletar->filmeFavorito)
                  <input type="text" class="form-control" name="favorite_movie_id" value="{{$deletar->filmeFavorito->title}}" id="release_date" disabled/>
                @else <p>Esse ator não tem filme favorito.</p>
                @endif
                </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Deletar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>

<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Ator</title>
    </head>
    <body>

        <h1 align="center">Formulário Adicionar Ator</h1>
        <form action="/adicionarAtor" id="adicionarAtor" name="adicionarFilme" method="POST">
          {{csrf_field()}}
          {{method_field('POST')}}
            <div class="form-group col-6 m-auto">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="first_name" id="first_name"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="last_name" id="last_name"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="rating" id="rating"/>
            </div>
            <div class="form-group col-6 m-auto">
              <label for="filmeFavorito">Filme favorito</label><br>
              <select class="filmeFavorito" name="filmeFavorito">
                  @foreach ($lista as $filme)
                    <option value="{{$filme->id}}">{{$filme->title}}</option>
                  @endforeach

              </select>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Ator" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>

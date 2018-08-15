<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Editar Ator</title>
    </head>
    <body>

        <h1 align="center">Formulário de Atualização</h1>
        <form action="/actor/edit/{{$atualizar->id}}" id="atualizarAtor" name="atualizarAtor" method="POST">
          {{csrf_field()}}
          {{method_field('PUT')}}
            <div class="form-group col-6 m-auto">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="{{$atualizar->first_name}}" name="first_name"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" value="{{$atualizar->last_name}}" name="last_name"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" value="{{$atualizar->rating}}" name="rating"/>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Atualizar Ator" name="submit" class="btn btn-primary"/>
            </div>
        </form>

    </body>
</html>

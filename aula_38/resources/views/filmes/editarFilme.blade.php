<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Editar filme</title>
    </head>
    <body>

        <h1 align="center">Formulário</h1>
        <form action="/editarFilme/{{$atualizar->id}}" id="editarFilme" name="editarFilme" method="POST">
          {{csrf_field()}}
          {{method_field('PUT')}}
            <div class="form-group col-6 m-auto">
                <label for="nome">Titulo</label>
                <input type="text" class="form-control" value="{{$atualizar->title}}" name="title" id="title"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="sobrenome">Avaliação</label>
                <input type="text" class="form-control" value="{{$atualizar->rating}}" name="rating" id="rating"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Premios</label>
                <input type="text" class="form-control" value="{{$atualizar->awards}}" name="awards" id="awards"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" class="form-control" name="release_date" value="{{$atualizar->release_date}}" id="release_date"/>
                </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Editar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>

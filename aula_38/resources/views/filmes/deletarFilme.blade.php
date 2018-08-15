<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Deletar filme</title>
    </head>
    <body>

        <h1 align="center">Formulário de Delete</h1>
        <h6 align="center">Tem certeza que deseja deletar este filme?</h6>
        <form action="/deletarFilme/{{$deletar->id}}" id="deletarFilme" name="deletarFilme" method="POST">
          {{csrf_field()}}
          {{method_field('DELETE')}}
            <div class="form-group col-6 m-auto">
                <label for="nome">Titulo</label>
                <input type="text" class="form-control" value="{{$deletar->title}}" name="title" id="title" disabled/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="sobrenome">Avaliação</label>
                <input type="text" class="form-control" value="{{$deletar->rating}}" name="rating" id="rating" disabled/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Premios</label>
                <input type="text" class="form-control" value="{{$deletar->awards}}" name="awards" id="awards" disabled/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" class="form-control" name="release_date" value="{{$deletar->release_date}}" id="release_date" disabled/>
                </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Deletar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>

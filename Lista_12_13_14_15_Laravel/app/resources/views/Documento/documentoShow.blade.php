<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <h1> Informações do Documento </h1>
        
        <div class="callout">
            {{$documento}}
        </div>
        <hr>
        <a href="{{route('documento.index')}}">Voltar para a tela inicial</a>
        
        <form action="{{route('documento.destroy', $documento->id)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Deletar este documento</button>
        </form>    

        <a href="{{route('documento.edit', $documento->id)}}">
            <button class="btn btn-primary">Alterar este documento</button>
        </a>

    </body>
</html>
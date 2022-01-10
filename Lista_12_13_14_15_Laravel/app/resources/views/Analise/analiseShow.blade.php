<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <h1> Informações da analise </h1>
        
        <div class="callout">
            {{$analises}}
        </div>
        <hr>
        <a href="{{route('analises.index')}}">
            <button class="btn btn-primary">Voltar</button>
        </a>
        
        <form action="{{route('analises.destroy', $analises->id)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Deletar esta analise</button>
        </form>    


    </body>
</html>
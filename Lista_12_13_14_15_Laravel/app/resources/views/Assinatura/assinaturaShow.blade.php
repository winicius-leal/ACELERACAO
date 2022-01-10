<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <h1> Informações da Assinatura </h1>
        
        <div class="callout">
            {{$assinatura}}
        </div>
        <hr>
        <a href="{{route('assinatura.index')}}">Voltar para a tela inicial</a>
        
        <form action="{{route('assinatura.destroy', $assinatura->id)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Deletar este documento</button>
        </form>    

    </body>
</html>
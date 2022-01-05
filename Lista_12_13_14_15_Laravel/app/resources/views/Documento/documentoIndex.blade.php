<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

        <h1> LISTA DE DOCUMENTOS </h1>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red;">{{ $error }}</p>
            @endforeach
        @endif

        @if (session('danger'))
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('danger')}}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Successo! </strong> {{ session('success')}}
            </div>
        @endif

        @foreach ($documentos as $documento)
        <li>
            {{$documento}} <a href="{{route('documento.show', $documento->id)}}"> Ver Documento </a>
        </li>
        @endforeach

        <hr>
        <a href="{{route('documento.create')}}">
            <button class="btn btn-success">Criar novo documento</button>
        </a>
        <hr>
        
        {{ $documentos->links() }}
        
    </body>
</html>
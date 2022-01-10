<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

        <h1> LISTA DE ANALISES </h1>

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

        @foreach ($analises as $analise)
        <li>
            {{$analise}} <a href="{{route('analises.show', $analise->id)}}"> Ver analise </a>
        </li>
        @endforeach

        <hr>
        <a href="{{route('analises.create')}}">
            <button class="btn btn-success">Criar nova analise</button>
        </a>
        
    </body>
</html>
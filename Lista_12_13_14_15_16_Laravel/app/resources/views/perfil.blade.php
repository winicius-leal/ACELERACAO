<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <h1> PERFIL </h1>

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

        @foreach ($perfil as $dados)
        <li>
            {{$dados}}
        </li>
        @endforeach

        <hr>
        <a href="{{route('usuario.login')}}">
            <button>
                Fazer login
            </button>
        </a>
        <a href="{{route('usuario.logoff')}}">
            <button>
                Fazer Logoff
            </button>
        </a>

        <a href="{{route('documento.index')}}">
            <button>
                Ir para Doucmentos
            </button>
        </a>
        <a href="{{route('assinatura.index')}}">
            <button>
                Ir para Assinaturas
            </button>
        </a>
        <a href="{{route('analises.index')}}">
            <button>
                Ir para Analises
            </button>
        </a>

    </body>
</html>
<html>
    <head>

    </head>
    <body>
        <h1> PERFIL </h1>
        @foreach ($perfil as $dados)
        <li>
            {{$dados}}
        </li>
        @endforeach

        <h1> DOCUMENTOS </h1>
        @foreach ($documento as $documento)
        <li>
            {{$documento}} <a href="{{route('documento.exibe', $documento->id)}}"> Ver Documento </a>
        </li>
        @endforeach
    </body>
</html>
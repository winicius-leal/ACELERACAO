<html>
    <head>

    </head>
    <body>
        <h1> ASSINATURAS </h1>
        @foreach ($assinaturas as $assinatura)
        <li>
            {{$assinatura}} <a href="{{route('assinatura.exibe', $assinatura->id)}}"> Ver Assinatura </a>
        </li>
        @endforeach
    </body>
</html>
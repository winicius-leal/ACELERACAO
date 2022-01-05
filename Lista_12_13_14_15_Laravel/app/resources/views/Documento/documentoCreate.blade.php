<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>
            Criar Novo Documento
        </h1>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red;">{{ $error }}</p>
            @endforeach
        @endif
        
        <form action="{{route('documento.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titulo do Documento</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title" placeholder="titulo">
            </div>
            <div class="mb-3">
                <label for="sizeInMB" class="form-label">Tamanho do documento em MB</label>
                <input type="number" name="sizeInMB" value="{{old('sizeInMB')}}" class="form-control" id="sizeInMB" placeholder="Tamanho do documento em MB">
            </div>
            <div class="mb-3">
                <label for="subscriptionNumber" class="form-label">Nº de assinaturas do documento</label>
                <input type="number" name="subscriptionNumber" value="{{old('subscriptionNumber')}}" class="form-control" id="subscriptionNumber" placeholder="Nº de assinaturas do documento">
            </div>
            <div class="mb-3">
                <label for="signature" class="form-label">Assinatura do responsável</label>
                <input type="text" name="signature" value="{{old('signature')}}" class="form-control" id="signature" placeholder="Assinatura do responsável">
            </div>
            <div class="mb-3">
                <label for="qntPages" class="form-label">Quantidade de páginas</label>
                <input type="number" name="qntPages" value="{{old('qntPages')}}" class="form-control" id="qntPages" placeholder="Quantidade de páginas">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>    
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Analises</title>
</head>
<body>
    <div class="container">
        <h1>
            Criar nova Assinatura
        </h1>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red;">{{ $error }}</p>
            @endforeach
        @endif
        
        <form action="{{route('analises.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="qntCharactersSignature" class="form-label">Qnt de caracteres da assinatura</label>
                <input type="number" name="qntCharactersSignature" value="{{old('qntCharactersSignature')}}" class="form-control" id="qntCharactersSignature" placeholder="Qnt de caracteres da assinatura">
            </div>
            <div class="mb-3">
                <label for="defaultSignature" class="form-label">Assinatura padrão</label>
                <input type="text" name="defaultSignature" value="{{old('defaultSignature')}}" class="form-control" id="defaultSignature" placeholder="Assinatura padrão">
            </div>
            <div class="mb-3">
                <label for="subscriptionNumberUsed" class="form-label">Nº vezes que essa assinatura foi usada</label>
                <input type="number" name="subscriptionNumberUsed" value="{{old('subscriptionNumberUsed')}}" class="form-control" id="subscriptionNumberUsed" placeholder="Nº vezes que essa assinatura foi usada">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>    
    </div>
</body>
</html>
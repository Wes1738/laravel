<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha View de Teste</title>
</head>
<body>
    <p>Algum conteúdo relevante</p>

    {{-- Dessa Maneira estamos evitando um ataque do tipo XSS --}}
    {{-- {{ $teste }} --}}
    {{-- Da Forma abaixo não --}}
    {!! $teste !!}
</body>
</html>
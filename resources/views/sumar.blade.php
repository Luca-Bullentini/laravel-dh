<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sumar</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div class="main">
        <p>
            @if ($numero1)
                {{ $numero1}} + 
            @endif
            @if ($numero2)
                {{ $numero2}} + 
            @endif
            @if ($numero3)
                {{ $numero3}} <?="hola como andas"?>
            @endif
        </p>
        <p>
            El resultado es {{ $resultado }} 
        </p>
    </div>
</body>
</html>

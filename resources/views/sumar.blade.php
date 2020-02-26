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
            @php
            
            
            echo $resultado;
                //echo $numero1.' + '.$numero2.' + '.$numero3.' = '.($numero1+$numero2+$numero3);
            @endphp
        </p>
    </div>
</body>
</html>

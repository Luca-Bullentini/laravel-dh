<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paridad</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>
    <div class="main">
        <p>
            @php
            if ($numero != NULL){
                if ( $numero /2 == floor($numero/2 )){
                echo 'El numero es par';
                }else{
                    echo 'El numero es impar';
                }

            }  else {
                echo 'no hay numero';
            }  
            @endphp 
        </p>
    </div>
</body>
</html>

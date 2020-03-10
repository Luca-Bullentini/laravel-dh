
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peliculas</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<?php
//$movies = ["Hulk" , "Tomb Raider" , "Assassin's Creed" , "Doom"]; 

$movies = array("Hulk" => 6 , "Tomb Raider" => 7, "Assassin's Creed" => 8 , "Doom" => 9);
 
 ?>
<body>
    <div class="main">
        <h1>Hola! Estas son las peliculas!</h1>
        <ul>
            @foreach ($movies as $key => $rating)
            <li><a href="">{{$key}} - - - {{$rating}} @unless($rating < 8) Recomendada! @endunless</a></li>
            @endforeach  
          
        </ul>
    </div>
</body>
</html>

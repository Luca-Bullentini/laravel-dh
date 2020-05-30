@extends ("layouts.default")

@section("title")
peliculas
@endsection

<<<<<<< HEAD
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
=======
>>>>>>> 2f6f1509e2291faf73d82d6080c70e3c269b2a8a

    <?php

<<<<<<< HEAD
<body>
    <div class="main">
        <h1>Hola estas son las pelis </h1>
        <ul>
            <li>peli1</li>
            <li>peli2</li>
            <li>peli3</li>
            <li>peli4</li>
        </ul>
    </div>
</body>
</html>
=======
    $movies  = array(array("Hulk" , 6), array("Tomb Raider", 7) , array("Assassin's Creed", 8), array("Doom" , 9));
 
    ?>

@section("body")

<div>
    <h1>Estas son las peliculas</h1>
         <ul>       
            @foreach ($movies as $movie)
            <li><a href="">{{$movie[0]}} - - - {{$movie[1]}} @unless($movie[1] < 8) Recomendada! @endunless</a></li>
            @endforeach  
        </ul>  
</div>

@endsection  
>>>>>>> 2f6f1509e2291faf73d82d6080c70e3c269b2a8a

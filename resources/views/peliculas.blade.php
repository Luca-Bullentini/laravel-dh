@extends ("layouts.default")

@section("title")
peliculas
@endsection

    <?php

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
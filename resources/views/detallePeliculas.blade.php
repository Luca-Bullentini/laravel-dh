@extends ("layouts.default")

@section("title")
detalle
@endsection

    <?php

    $movies  = array(array("Hulk" , 6), array("Tomb Raider", 7) , array("Assassin's Creed", 8), array("Doom" , 9));
 
    ?>

@section("body")


    @if(isset($movies[$id]))
    <div class="main">
        <h1>Hola! Elegiste la pelicula {{$movies[$id][0]}} </h1>
        <ul>
         @unless($movies[$id][1] < 8) Recomendada! @endunless
        </ul>
    </div>
    @else
    <div>
        <p>
            No se encontró ninguna pelicula
        </p>
    </div>
    @endif

@endsection

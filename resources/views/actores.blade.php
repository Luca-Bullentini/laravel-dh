@extends ("layouts.default")

@section("title")
Actores
@endsection

   

@section("body")

<h1 class="title">Lista de Actores</h1>
<form action="../actores/buscar" method="GET">
    
<label for="buscar"> Buscar </label>
<input type="text" name="buscar">

<input type="submit">
</form>
<br>
<br>
<ul>
    @if (isset($actores))
    @foreach($actores as $actor)
    <li> <a href="actores/{{$actor['id']}}"> {{$actor->first_name}} {{$actor->last_name}} </a></li>
    @endforeach
    @endif
</ul>


    
@endsection

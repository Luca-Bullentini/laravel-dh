@extends ("layouts.default")

@section("title")
Actores
@endsection

   

@section("body")

<h1 class="title">Lista de Actores</h1>
<br>
<br>
<ul>
    @foreach($actores as $actor)
    <li> {{$actor->first_name}} {{$actor->last_name}}</li>
    @endforeach
</ul>
    
@endsection

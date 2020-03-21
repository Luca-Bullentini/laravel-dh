@extends ("layouts.default")

@section("title")
Actores
@endsection

   

@section("body")

<h1 class="title">Actor: {{$actor->first_name}}  {{$actor->last_name}}</h1>
<br>
<br>
<p>
    Rating del actor: {{$actor->rating}} <br>
    Película favorita: {{$actor->favorite_movie_id}}
</p>
<ul>
</ul>
    
@endsection

@extends("layout.main")

@section('title', "Movies All") 

@section("contenuto")

<div class="container">

    @foreach ($movies as $movie)

        <div class="film-card my-3">
            <a href="">
                <h3>Titolo: {{$movie->title}}</h3>
                <h4>Titolo originale:  {{$movie->original_title}}</h4>
                <div>{{$movie->nationality}}</div>
                <div> {{$movie->date}}</div>
                <div> {{$movie->vote}}</div>
            </a>
        </div>
    @endforeach
</div>
@endsection

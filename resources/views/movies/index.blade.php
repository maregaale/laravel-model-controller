@extends('../layouts/main_layout')

@section('page_title')
  Tutti i film
@endsection

@section('content')
  <div class="index_container">

    <h1>I nostri film</h1>

    @foreach ($movies as $movie)
    <div class="movie">

      <h2>{{$movie->title}}:</h2>

      <p><span>Autore/i:</span> {{$movie->author}}</p>
      <p><span>Genere:</span> {{$movie->genre}}</p>
      <p class="plot"><span>Trama:</span> {{$movie->plot}}</p>

      <div class="link_container">
        <a href="{{route('movies.show', ['movie' => $movie->id])}}">Scopri di più sul film</a>
      </div>
    </div>
    @endforeach
  </div>
@endsection

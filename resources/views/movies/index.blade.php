<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    {{-- foglio di stile --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>

    
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
  </body>
</html>
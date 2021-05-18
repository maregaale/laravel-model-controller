@extends('../layouts/main_layout')

@section('page_title')
  {{$movie->title}} 
@endsection

@section('content')

  <div class="show_container">
    <h1>{{$movie->title}}</h1>

    <div class="info">
      <p><span>Autore/i:</span> {{$movie->author}}</p>
      <p><span>Genere:</span> {{$movie->genre}}</p>
      <p><span>Trama:</span> {{$movie->plot}}</p>
    </div>

    <div class="link_container">
      <a href="{{route('movies.index')}}">Torna ai film</a>
    </div>
  </div>
@endsection

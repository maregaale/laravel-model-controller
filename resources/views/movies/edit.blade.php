@extends('../layouts/main_layout')

@section('page_title')
  
  Modifica il film 
@endsection

@section('content')
  <div class="container">
    
    <form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">

      @csrf
      @method('PUT')

      {{-- stampa errori --}}
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      {{-- /stampa errori --}}

      
      <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{old('title') ? old('title') : $movie->title}}">
      </div>

      <div class="form-group">
        <label for="author">Autore</label>
        <input type="text" class="form-control" id="author" name="author" placeholder="Autore"  value="{{old('author') ? old('author') : $movie->author}}">
      </div>

      <div class="form-group">
        <label for="genre">Genere</label>
        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genere"  value="{{old('genre') ? old('genre') : $movie->genre}}">
      </div>

      <div class="form-group">
        <label for="plot">Trama</label>
        <textarea class="form-control" id="plot" name="plot" rows="20" placeholder="Trama">{{old('plot')}} ? {{old('plot')}} : {{$movie->plot}}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Modifica film</button>
    </form>
  </div>
@endsection
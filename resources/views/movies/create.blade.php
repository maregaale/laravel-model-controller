@extends('../layouts/main_layout')

@section('page_title')
  Crea nuovo film 
@endsection

@section('content')
  <div class="container">
    
    <form class="create" action="{{route('movies.store')}}" method="POST">

      @csrf
      @method('POST')

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{old('title')}}">
      </div>

      <div class="form-group">
        <label for="author">Autore</label>
        <input type="text" class="form-control" id="author" name="author" placeholder="Autore" value="{{old('author')}}">
      </div>

      <div class="form-group">
        <label for="genre">Genere</label>
        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genere" value="{{old('genre')}}">
      </div>

      <div class="form-group">
        <label for="plot">Trama</label>
        <textarea class="form-control" id="plot" name="plot" rows="20" placeholder="Trama">{{old('plot')}}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Aggiungi film</button>
    </form>
  </div>
@endsection
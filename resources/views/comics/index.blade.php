@extends('layouts.main')

@section('title','Index')

@section('main-content')
@if ( session('delete'))
  <div class="alert alert-warning m-3">
    {{ session('delete') }} è stato rimosso con successo
  </div>
@endif

@if ( session('update'))
  <div class="alert alert-success m-3">
    {{ session('update') }} è stato modificato con successo
  </div>
@endif
<div>

</div>
<div class="p-5">
    <h2 class="p-3 text-center">Tutti i comics</h2>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>immagine</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data di vendita</th>
            <th>Categoria</th>
            <th>Modifica</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td><a href="{{ route('comics.show',$comic->slug) }}">{{ $comic->title }}</a></td>
                    <td>{{ $comic->description }}</td>
                    <td>{{ $comic->thumb }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('comics.edit',$comic->slug) }}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
                          @csrf
                          @method('DELETE')

                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
   
@endsection


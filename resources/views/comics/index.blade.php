@extends('layouts.main')

@section('title','Home')

@section('main-content')
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
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
   
@endsection
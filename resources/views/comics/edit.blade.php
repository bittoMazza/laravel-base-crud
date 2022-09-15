@extends('layouts.main')

@section('main-content')
<h2 class="text-center mt-2">Form per inserimento nuovo fumetto</h2>
<div class="col-4 mx-auto p-3 mt-3 mb-2 bg-dark">
    <form action="{{ route('comics.update',$comic->id) }}" method="POST">
        @csrf
        @method('PUT'); {{-- Non esistendo il metodo put nel form,dobbiamo inserirlo noi  --}}
        <div class="form-group">
          <label >Titolo</label>
          <input type="text" class="form-control" value="{{ $comic->title }}" name="title" placeholder="Inserire titolo fumetto" required>
        </div>

        <div class="form-group">
            <label >Descrizione</label>
            <textarea class="form-control" name="description" cols="30" rows="5">{{ $comic->description }}</textarea>
        </div>

        <div class="form-group">
            <label >Copertina</label>
            <input type="text" class="form-control" value="{{ $comic->thumb }}" name="thumb" placeholder="Inserire Url copertina" required>
        </div>

        <div class="form-group">
            <label >Prezzo</label>
            <input type="text" class="form-control" value="{{ $comic->price }}" name="price" placeholder="Inserire Prezzo" required>
        </div>

        <div class="form-group">
            <label >Serie</label>
            <input type="text" class="form-control" value="{{ $comic->series }}" name="series" placeholder="Inserire serie del fumetto" required>
        </div>
        <div class="form-group">
            <label >Data uscita</label>
            <input type="date" class="form-control" value="{{ $comic->sale_date }}" name="sale_date" placeholder="Inserire data uscita fumetto" required>
        </div>

        <div class="form-group">
            <label >Categoria</label>
            <input type="text" class="form-control" value="{{ $comic->type }}" name="type" placeholder="Inserire categoria fumetto" required>
        </div>

        <button type="submit" class="btn btn-primary my-3">Modifica Fumetto</button>
      </form>
</div>
@endsection
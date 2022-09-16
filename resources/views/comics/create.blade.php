@extends('layouts.main')

@section('main-content')
<h2 class="text-center mt-2">Form per inserimento nuovo fumetto</h2>
@if ($errors->any())
<div class="alert alert-warning text-center">
    <ul>
        @foreach ($errors->all() as $error )
        <li>
            {{ $error }}
        </li>    
        @endforeach
    </ul>
</div>
@endif
<div class="col-4 mx-auto p-3 mt-3 mb-2 bg-dark">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label >Titolo</label>
          <input type="text" class="form-control" name="title" placeholder="Inserire titolo fumetto" required>
        </div>
        <div class="form-group">
            <label >Descrizione</label>
            <textarea class="form-control" name="description" cols="30" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label >Copertina</label>
            <input type="text" class="form-control" name="thumb" placeholder="Inserire Url copertina" required>
        </div>
        <div class="form-group">
            <label >Prezzo</label>
            <input type="text" class="form-control" name="price" placeholder="Inserire Prezzo" required>
        </div>
        <div class="form-group">
            <label >Serie</label>
            <input type="text" class="form-control" name="series" placeholder="Inserire serie del fumetto" required>
        </div>
        <div class="form-group">
            <label >Data uscita</label>
            <input type="date" class="form-control" name="sale_date" placeholder="Inserire data uscita fumetto" required>
        </div>
        <div class="form-group">
            <label >Categoria</label>
            <input type="text" class="form-control" name="type" placeholder="Inserire categoria fumetto" required>
        </div>
        <button type="submit" class="btn btn-primary my-3">Inserisci nuovo fumetto</button>
      </form>
</div>
@endsection
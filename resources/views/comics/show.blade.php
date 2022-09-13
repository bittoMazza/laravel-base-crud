@extends('layouts.main')

@section('main-content')
    <div class="container text-center mt-3">
        <h2>{{ $comic->title }}</h2>
        <p class="p-3">{{ $comic->description }}</p>
        <div>
            <img src="{{ $comic->thumb }}" alt="">
        </div>
        <div class="row">
            <div class="col-12">
                <h4>Prezzo : {{ $comic->price }}</h4>
                <h4>Serie : {{ $comic->series }}</h4>
                <h4>Data di uscita : {{ $comic->sale_date }}</h4>
                <h4>Categoria : {{ $comic->type }}</h4>
            </div>
        </div>
    </div>
@endsection
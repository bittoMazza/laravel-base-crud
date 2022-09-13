@extends('layouts.main')

@section('title','Home')

@section('main-content')
    @forelse ($comics as $comic)
        <h2>{{ $comic->title }}</h2>
    @empty
        <p>Non ci sono fumetti</p>
    @endforelse    
@endsection
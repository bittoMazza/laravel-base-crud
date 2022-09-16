@extends('layouts.main')

@section('main-content')
<h2 class="text-center mt-2">Form per modifica fumetto</h2>
<div class="col-4 mx-auto p-3 mt-3 mb-2 bg-dark">
    <form action="{{ route('comics.store')}}" method="POST">
        @csrf
        @method('POST')
        @include('forms.form');
      </form>
</div>
@endsection
@extends('layouts.main')

@section('main-content')
<h2 class="text-center mt-2">Form per modifica fumetto</h2>
<div class="col-4 mx-auto p-3 mt-3 mb-2 bg-dark">
    <form action="{{ route('comics.update',$comic->id) }}" method="POST">
        @csrf
        @method('PUT'); {{-- Non esistendo il metodo put nel form,dobbiamo inserirlo noi  --}}
        @include('forms.form');
      </form>
</div>
@endsection
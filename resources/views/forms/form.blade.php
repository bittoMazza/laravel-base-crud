<div class="form-group">
    <label >Titolo</label>

    // L 'old è praticamente un ternario in cui ritorna il titolo del comic quando è uguale a quello iniziale,altrimenti torna il valore attuale in 'title'

    <input type="text" class="form-control" value="{{ old('title',$comic->title) }}" name="title" placeholder="Inserire titolo fumetto" required>
</div>

@error('title')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Descrizione</label>
    <textarea class="form-control" name="description" cols="30" rows="5">{{ old('description',$comic->description) }}</textarea>
</div>

@error('description')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Copertina</label>
    <input type="text" class="form-control" value="{{ old('thumb',$comic->thumb) }}" name="thumb" placeholder="Inserire Url copertina" required>
</div>

@error('thumb')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Prezzo</label>
    <input type="text" class="form-control" value="{{ old('price',$comic->price) }}" name="price" placeholder="Inserire Prezzo" required>
</div>

@error('price')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Serie</label>
    <input type="text" class="form-control" value="{{ old('series',$comic->series) }}" name="series" placeholder="Inserire serie del fumetto" required>
</div>

@error('series')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Data uscita</label>
    <input type="date" class="form-control" value="{{ old('sale_date',$comic->sale_date) }}" name="sale_date" placeholder="Inserire data uscita fumetto" required>
</div>

@error('sale_date')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Categoria</label>
    <input type="text" class="form-control" value="{{ old('type',$comic->type) }}" name="type" placeholder="Inserire categoria fumetto" required>
</div>

@error('type')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<button type="submit" class="btn btn-primary my-3">Modifica Fumetto</button>

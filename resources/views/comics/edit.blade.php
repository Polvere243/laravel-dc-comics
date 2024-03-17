@extends('layouts.main')

@section('title', 'Modifica fumetto')

@section('main')

<div class="create-container">
    <div class="title-link">
        <h1>Crea un fumetto</h1>
        <a href="{{ route('comics.index')}}">Indietro</a>
    </div>    
    @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>    
        </div>
    
    @endif
        <form action="{{ route('comics.store')}}" method="POST">
            @csrf
            <div class="form-row">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $comic->title)}}">
                <label for="thumb">Cover</label>
                <input type="url" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb)}}">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="1" value="{{ old('price', $comic->price)}}">
                <label for="series">Series</label>
                <input type="text" id="series" name="series" value="{{ old('series', $comic->series)}}">
                <label for="sale_date">On Sale Date</label>
                <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
                <label for="type">Type</label>
                <input type="text" id="type" name="type" value="{{ old('type', $comic->type)}}">
                <label for="artists">Artists</label>
                <input type="text" id="artists" name="artists" value="{{ old('artists', $comic->artists)}}">
                <label for="writers">Writers</label>
                <input type="text" id="writers" name="writers" value="{{ old('writers', $comic->writers)}}">
            </div>
            <div class="m-top">
                <label for="description">Description</label>
                <textarea id="description" name="description"> {{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="btn-box">
                <button class="res btn" type="reset">Empty</button>
                <button class="sub btn" type="submit">Create</button>
            </div>

        </form>
    </div>

@endsection

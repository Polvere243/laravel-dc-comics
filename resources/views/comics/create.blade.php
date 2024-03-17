@extends('layouts.main')

@section('title', 'Crea un fumetto')

@section('main')


    <div class="create-container">
    <div class="title-link">
        <h1>Crea un fumetto</h1>
        <a href="{{ route('comics.index')}}">Indietro</a>
    </div>    
        <form action="{{ route('comics.store')}}" method="POST">
            @csrf
            <div class="form-row">
                <label for="title">Title</label>
                <input type="text" id="title" name="title">
                <label for="thumb">Cover</label>
                <input type="url" id="thumb" name="thumb">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="1">
                <label for="series">Series</label>
                <input type="text" id="series" name="series">
                <label for="sale_date">On Sale Date</label>
                <input type="date" id="sale_date" name="sale_date">
                <label for="type">Type</label>
                <input type="text" id="type" name="type">
                <label for="artists">Artists</label>
                <input type="text" id="artists" name="artists">
                <label for="writers">Writers</label>
                <input type="text" id="writers" name="writers">
            </div>
            <div class="m-top">
                <label for="description">Description</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div class="btn-box">
                <button class="res btn" type="reset">Empty</button>
                <button class="sub btn" type="submit">Create</button>
            </div>

        </form>
    </div>

@endsection
@extends('layouts.main')

@section('title', 'Crea un fumetto')

@section('main')


    <div class="create-container">
    <div class="title-link">
        <h1>Crea un fumetto</h1>
        <a href="{{ route('comics.index')}}">Indietro</a>
    </div>    
        <form action="" method="POST">
            <div class="form-row">
                <label for="">Title</label>
                <input type="text">
                <label for="">Cover</label>
                <input type="text">
                <label for="">Price</label>
                <input type="text">
                <label for="">Series</label>
                <input type="text">
                <label for="">On Sale Date</label>
                <input type="text">
                <label for="">Artists</label>
                <input type="text">
                <label for="">Writers</label>
                <input type="text">
            </div>
            <div class="m-top">
                <label for="">Description</label>
                <textarea></textarea>

            </div>

        </form>
    </div>

@endsection
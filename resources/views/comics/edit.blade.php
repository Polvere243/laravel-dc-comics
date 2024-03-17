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

    @include('includes.comics.form')

</div>
@endsection

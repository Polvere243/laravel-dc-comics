@extends('layouts.main')

@section('title', 'Fumetto')



@section('main')
<div class="blue-bar">
    <figure>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </figure>
    <div class="icon">
        <a href="{{ route('comics.edit', $comic->id)}}">
            <i class="fas fa-pencil"></i>
        </a>
        <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dustbin"><i class="fas fa-trash-can"></i></button>
        </form>
        
    </div>
</div>
<section id="comic-detail">
    <div class="detail-card">
        <div class="info">
            <h2>{{ $comic['title'] }}</h2>
            <div class="comic-info">
                <div class="flex padding">
                    <h4 class="light-green" >U.S. Price: <span class="white">$19.99</span></h4>
                    <h4 class="light-green" >AVAILABLE</h4>
                </div>
                <div class="border white padding">
                    <h4>Check Availability<i class="fas fa-sort-down"></i></h4>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="adv">
            <h5>ADVERTISEMENT</h5>
            <figure>
                <img class="adv-picture" src="{{ Vite::asset('resources/img/adv.jpg') }}""{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </figure>
        </div>
        
    </div>

</section>
<section id="tables">
    <div class="container">
        <div class="l-table basis">
            <h3>TALENT</h3>
            <table>
                <tr>
                    <td>Art by:</td>
                    <td>
                       <span class="dodgerblue">{{$comic['artists']}},</span>
                    </td>
                </tr>
                <tr>
                    <td>Written by:</td>
                    <td>
                        <span class="dodgerblue">{{$comic['writers']}},</span>
                    </td>
                </tr>
            </table>
        </div>
       
        <div class="r-table basis">
            <h3>SPECS</h3>
            <table>
                <tr>
                    <td>Series</td>
                    <td class="dodgerblue capital">{{$comic['series']}}</td>
                </tr>
                <tr class="tr-border">
                    <td>U.S. Price:</td>
                    <td>{{$comic['price']}}</td>
                </tr>
                <tr>
                    <td>On Sale Date:</td>
                    <td>{{$comic['sale_date']}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="border-gray">
        <div class="list-container">
            <ul>
                <li>
                    <h5>DIGITAL COMICS</h5>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </li>
                <li>
                    <h5>SHOP DC</h5>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                </li>
                <li>
                    <h5>COMIC SHOP LOCATOR</h5>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                </li>
                <li class="r-border">
                    <h5>SUBSCRIPTIONS</h5>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                </li>
            </ul>
        </div>
    </div>

</section>
@endsection
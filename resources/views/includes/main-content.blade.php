<section id="comics-list">
    <div class="container">
        <button class="series">CURRENT SERIES</button>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <figure>
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                    </figure>
                    <figcaption>
                        <h4>{{ $comic['title'] }}</h4>
                    </figcaption>
                </a>
                
            </div>
            
            @endforeach
        </div>
        <div class="btn-box">
            <button class="more">
                <h3>LOAD MORE</h3>
            </button>

        </div>
    </div>
</section>
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
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bin"><i class="fas fa-trash-can"></i></button>
                </form>
            </div>
            
            @endforeach
        </div>
        <div class="add-icon">
            <a href="{{ route('comics.create')}}">
                <i class="far fa-plus"></i>
            </a>

        </div>
        <div class="btn-box">
            <button class="more">
                <h3>LOAD MORE</h3>
            </button>

        </div>
    </div>
</section>
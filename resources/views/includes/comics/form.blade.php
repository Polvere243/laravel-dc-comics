
        <form action="{{ route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
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
                <button class="sub btn" type="submit">Save</button>
            </div>

        </form>
    </div>

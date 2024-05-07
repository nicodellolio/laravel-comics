<div class="comics_collection_grid container">
    <div class="row row-cols-3 row-cols-md-6">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="card">
                {{$product['title']}}
            </div>
        </div>
        @endforeach
    </div>
</div>
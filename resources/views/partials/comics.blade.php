<div class="comics_collection_grid container mt-5">
    <div class="row row-cols-3 row-cols-md-4 gy-3">
        @foreach ($comics as $comic)
        <div class="col p-2">
            <div class="card bg-secondary my_card h-100">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                <div class="card-body text-light fs-3 text fw-bold fst-italic">
                    {{$comic['title']}}
                </div>
                <div class="card-footer text-end fw-bolder text-success bg-light fs-4">
                    
                    {{$comic['price']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
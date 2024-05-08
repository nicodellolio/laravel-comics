@extends ('layouts.app')

@section('content')
    
<div class="comics_collection_grid container-fluid mt-5">
    <div class="row row-cols-3 row-cols-xxl-4 gy-3 w-75 mx-auto">

        @foreach ($comics as $index => $comic)
        <div class="col p-2">

            <a href="{{route('comic', ['id' => $index])}}">

                <div class="card bg-secondary my_card h-100">
                    <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                    <div class="card-body text-light fs-3 text fw-bold fst-italic">
                        {{$comic['title']}}
                    </div>
                    <div class="card-footer text-end fw-bolder text-success bg-light fs-4">
                        
                        {{$comic['price']}}
                    </div>
                </div>

            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection

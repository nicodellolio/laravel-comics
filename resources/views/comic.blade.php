@extends ('layouts.app')

@section('content')
    


<div class="comics_collection_grid container-fluid mt-5">
    <div class="row row-cols-1 row-cols-sm-2 gy-3 w-75 mx-auto">
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
    </div>
</div>

@endsection

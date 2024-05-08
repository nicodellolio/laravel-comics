@extends ('layouts.app')

@section('content')
    <div class="single_comic_container container-fluid">
        <div class="row row_single row-cols-1 row-cols-sm-2 gy-3 w-75 mx-auto">
            <div class="col p-2">
                <div class="card bg-secondary card_single h-100">
                    <img class="card-img-top" src="{{ $comic['thumb'] }}"
                        alt="Coverbook of the {{ $comic['title'] }} comic book">
                </div>
            </div>
            <div class="col p-2">
                <div class="card bg-secondary h-100 card_single">
                    <div class="card-body">
                        <div class="card-title fs-1 fw-bolder text-warning">
                            {{ $comic['title'] }}
                        </div>
                        <div class="card-subtitle fs-2 fw-light">
                            {{ $comic['series'] }}
                        </div>
                        <div class="card-text fs-4 py-4">
                            {{ $comic['description'] }}
                        </div>
                    </div>
                    <div class="card-footer text-end fw-bolder text-dark bg-info fs-4">
                        <span class="bg-warning px-3 rounded fs-1 text-center">
                            {{ $comic['price'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="back">
            <a class="btn btn-warning rounded-3 fw-light btn-sm " href="{{route('nav.comics')}}" role="button">
                Go back
            </a>
        </div>
    </div>
@endsection

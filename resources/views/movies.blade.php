@extends('layouts.app')

@section ('content')

<div class="container mt-5">
    <div class="row row-cols-3 g-5">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card">
                <img class="card-img-top movie_card" src="{{$movie['thumb']}}" alt="">
                <div class="card-body fs-3 text-center fw-lighter">
                    {{$movie['title']}}
                </div>
                <div class="card-footer">
                    {{$movie['description']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
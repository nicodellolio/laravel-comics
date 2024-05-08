@extends('layouts.app')

@section ('content')

<div class="nothing_to_show p-5">

    <h1 class=" text-center bg-light p-5 w-50 rounded mx-auto text-secondary">SORRY, NOTHING TO SHOW HERE 🥺</h1>
    
    <div class="btn_box">
        <a href="{{ route('home') }}">
            <button class="btn btn-primary btn-lg mt-3" type="button">
                Go back to the homepage
            </button>
        </a>
    </div>
    
</div>
@endsection
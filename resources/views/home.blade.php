@extends('layouts.app')

@section ('content')

<div class="my_jumbo p-5 mb-4 bg-light rounded-3 100-vh">
    <div class="container-fluid jumbo_container py-5">
        <h1 class="display-5 fw-bold">New release</h1>
        <p class="col-md-8 fs-4">
            Step into the extraordinary universe of DC Comics' newest releases and prepare to be captivated like never before! Our latest comic series are meticulously crafted to deliver unparalleled storytelling and visually stunning artwork that will leave you in awe. Immerse yourself in the lives of iconic superheroes and intriguing villains, as they navigate complex narratives filled with action, adventure, and suspense.

            <br>
            <br>

            DC Comics has consistently pushed the boundaries of storytelling, and our latest releases are no exception. These thrilling tales delve deep into the characters you know and love, exploring their strengths, weaknesses, and the challenges they face. With each turn of the page, you'll find yourself more engaged and invested in the DC Universe.

        </p>


        @include ('partials.comics')

        <div class="btn_box">
            <button class="btn btn-primary btn-lg mt-3" type="button">
                Watch a movie instead
            </button>
        </div>

    </div>
</div>


@endsection
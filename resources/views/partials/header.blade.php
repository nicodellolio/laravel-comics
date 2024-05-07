<div class="header_ban text-light text-end pe-5 py-2 fs-6">
    <span>DC POWER'''VISA</span>
    <span>ADDITIONAL DC SITES &triangledown;</span>
</div>

<div class="main_header d-flex bg-light justify-content-evenly align-items-center py-3">
    <div class="logo">
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
    </div>
    <nav>
        <ul class="nav_list d-flex list-unstyled fs-5">
            <li class="px-3 text-uppercase">characters</li>
            <li class="px-3 text-uppercase">comics</li>

            <li class="px-3 text-uppercase">
                <a href="{{ route('movies') }}">movies</a>
            </li>
            
            <li class="px-3 text-uppercase">news</li>
            <li class="px-3 text-uppercase">shop</li>
        </ul>
    </nav>
    <div class="search border-bottom border-primary">
        <input class="border-0 px-2 bg-transparent text-end fw-bold" type="text" placeholder="Search">
        <i class="fa fa-search bg-light" aria-hidden="true"></i>
    </div>
</div>
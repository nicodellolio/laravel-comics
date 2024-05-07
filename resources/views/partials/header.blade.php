
<header>

    <div class="header_ban text-light text-end pe-5">
        <span>DC POWER'''VISA</span>
        <span>ADDITIONAL DC SITES &triangledown;</span>
    </div>

    <div class="main_header d-flex bg-light justify-content-evenly py-2 align-items-center">
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">        
        </div>
        <nav>
            <ul class="nav_list d-flex list-unstyled fs-6">
                @foreach ($nav_items as $nav_item)
                <li class="px-3 text-uppercase">{{ $nav_item }}</li>
                @endforeach
            </ul>
        </nav>
        <div class="search border-bottom border-primary">
            <input class="border-0 px-2 bg-transparent text-end fw-bold" type="text" placeholder="Search">
            <i class="fa fa-search bg-light" aria-hidden="true"></i>
        </div>
    </div>

</header>
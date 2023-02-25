@php
    $menus = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop']
@endphp

<header>
    <div class="container">
        <figure>
            <a href="/">
                <img src="{{ Vite::asset('/resources/img/dc-logo.png')}}" alt="">
            </a>
        </figure>
        <nav>
            @foreach ($menus as $menu)
            <ul>
                <li><a href="{{$menu}}">{{ $menu }}</a></li>
            </ul>
            @endforeach
        </nav>
        <div class="search">
            <input class="searchbar" type="text" placeholder="Search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>
</header>


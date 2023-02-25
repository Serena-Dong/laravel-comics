@php
    $menus = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP']
@endphp

<header>
    <div class="container">
        <figure>
            <a href="">
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
    </div>
</header>


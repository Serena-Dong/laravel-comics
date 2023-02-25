@php
    $optionsOne = ['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'];
@endphp

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-nav">

                <div class="footer-col">
                    <h2>DC COMICS</h2>
                    
                    <ul>
                        @foreach ($optionsOne as $option )

                        <li><a href="{{ $option }}">{{ $option }}</a></li>

                        @endforeach
                    </ul>

                    <h2>SHOP</h2>
                    <ul>
                        <li><a href="">Shop DC</a></li>
                        <li><a href="">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h2>DC</h2>
                    <ul>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h2>SITES</h2>
                    <ul>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                        <li><a href="">Characters</a></li>
                    </ul>
                </div>

            </div>
            <figure>
                <img src=" {{Vite::asset('/resources/img/dc-logo-bg.png')}}" alt="">
            </figure>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-sign">
                <a href="">
                    <h2>SIGN-UP NOW!</h2>
                </a>
            </div>
            <div class="footer-social">
                <ul>
                    <li><a href="">
                            <h2>FOLLOW US</h2>
                        </a></li>
                    <li><a href=""><img src="{{ Vite::asset('/resources/img/footer-facebook.png')}}" alt=""></a></li>
                    <li><a href=""><img src="{{ Vite::asset('/resources/img/footer-twitter.png')}}" alt=""></a></li>
                    <li><a href=""><img src="{{ Vite::asset('/resources/img/footer-youtube.png')}}" alt=""></a></li>
                    <li><a href=""><img src="{{ Vite::asset('/resources/img/footer-pinterest.png')}}" alt=""></a></li>
                    <li><a href=""><img src="{{ Vite::asset('/resources/img/footer-periscope.png')}}" alt=""></a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>
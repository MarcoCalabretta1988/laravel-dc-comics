
    <footer>
        <!-- TOP FOOTER SECTION -->
        <section id="top-footer">
            <nav class="container">
                <div class="footer-col">
                    <h3>DC COMICS</h3>
                    <ul>
                        <li><a href="{{ route('characters') }}">Characters</a> </li>
                        <li><a href="{{ route('comics.index') }}">Comics</a> </li>
                        <li><a href="{{ route('movies') }}">Movies</a> </li>
                        <li><a href="{{ route('tv') }}">Tv</a> </li>
                        <li><a href="{{ route('games') }}">Games</a> </li>
                        <li><a href="{{ route('videos') }}">Videos</a> </li>
                        <li><a href="{{ route('news') }}">News</a> </li>
                    </ul>
                    <h3>SHOP</h3>
                    <ul>
                        <li><a href="{{ route('shop') }}">Shop DC</a> </li>
                        <li><a href="#">Shop DC Collectibles</a> </li>
                    </ul>

                </div>
                <div class="footer-col">
                    <h3>DC</h3>
                    <ul>
                        <li><a href="#">Therm Of Use</a> </li>
                        <li><a href="#">Privacy policy (New)</a> </li>
                        <li><a href="#">Ad Choices</a> </li>
                        <li><a href="#">Advertising</a> </li>
                        <li><a href="#">Jobs</a> </li>
                        <li><a href="#">Subscriptions</a> </li>
                        <li><a href="#">Talent Workshops</a> </li>
                        <li><a href="#">CPSC Certificates</a> </li>
                        <li><a href="#">Ratings</a> </li>
                        <li><a href="#">Shop Help</a> </li>
                        <li><a href="#">Contact Us</a> </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>SITES</h3>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>

            </nav>
        </section>

        <!-- BOTTOM FOOTER SECTION -->
        <section id="bottom-footer">
            <nav class="container">
                <div class="left-bottom-footer">
                    <a href="#">SIGN-UP NOW!</a>
                </div>
                <div class="right-bottom-footer">
                    <ul>
                        <li>
                            <h3><a href="#"> FOLLOW US </a></h3>
                        </li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/images/footer-facebook.png')}}" alt="Facebook"></a></li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/images/footer-twitter.png ')}}" alt="Twitter"></a></li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/images/footer-youtube.png')}}" alt="You Tube"></a></li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/images/footer-pinterest.png')}}" alt="Pinterest"></a></li>
                        <li><a href="#"><img src="{{ Vite::asset('resources/images/footer-periscope.png')}}" alt="Periscope"></a></li>
                    </ul>
                </div>
            </nav>
        </section>
    </footer>

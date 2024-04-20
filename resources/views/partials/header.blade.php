<header>

    <div class="container cont-header">
        <div class="cont-img">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
        </div>

        <nav>
            <a href="/">CHARACTERS</a>

            <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">COMICS</a>
            <!--class, se mi restituisce l'estringa 'products' allora vuol dire che la route ativa é questa e la voglio attivare-->
            <!-- se "Route::currentRouteName()" mi restituisce una sringa con il nome della Route che in questo caso é comics (questa Route é in web.php)-->

            <a href="{{ route('movies') }}"
                class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">MOVIES</a>

            <a href="/">TV</a>

            <a href="/">GAMES</a>

            <a href="/">COLLECTIBLES</a>

            <a href="/">VIDEOS</a>

            <a href="/">FANS</a>

            <a href="/">NEWS</a>

            <a href="/">SHOP</a>
        </nav>

        <div>
            <input type="search" name="search" id="search" placeholder="Search">
        </div>
    </div>
</header>

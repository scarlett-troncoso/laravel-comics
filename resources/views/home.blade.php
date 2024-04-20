@extends('layouts.app')

@section('content')
    <section id="comics">

        <div class="jumbotron"> </div>

        <div class="container">
            <!-- copertine dei comics -->
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="" class="cover-comic">
                            <span>{{ $comic['series'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <button>LOAD MORE</button>

        </div>
    </section>

    <section id="menu-main">
        <div class="nav-main">
            <div class="container">
                <nav>
                    <a href="/">DIGITAL COMICS</a>

                    <a href="/">DC MERCHANDISE</a>
                    <!--class, se mi restituisce l'estringa 'products' allora vuol dire che la route ativa é questa e la voglio attivare-->
                    <!-- se "Route::currentRouteName()" mi restituisce una sringa con il nome della Route che in questo caso é comics (questa Route é in web.php)-->

                    <a href="">SUBSCRIPTION</a>

                    <a href="/">COMIC SHOP LOCATOR</a>

                    <a href="/">DC POWER VISA</a>
                </nav>
            </div>
        </div>
    </section>
@endsection

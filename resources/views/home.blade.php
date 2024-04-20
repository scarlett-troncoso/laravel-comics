@extends('layouts.app')

@section('content')
    <section id="comics">

        <div class="jumbotron"> </div>

        <div class="container cont-comics">
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

            <div class="btn">
                <button>LOAD MORE</button>
            </div>

        </div>
    </section>

    <section id="menu-main">
        <div class="nav-main">
            <div class="container">
                <nav>
                    <a href="/">DIGITAL COMICS</a>

                    <a href="/">DC MERCHANDISE</a>

                    <a href="">SUBSCRIPTION</a>

                    <a href="/">COMIC SHOP LOCATOR</a>

                    <a href="/">DC POWER VISA</a>
                </nav>
            </div>
        </div>
    </section>
@endsection

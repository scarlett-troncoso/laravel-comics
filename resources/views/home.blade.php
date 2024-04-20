@extends('layouts.app')

@section('content')
    <h1>Home Page</h1>

    @foreach ($comics as $comic)
        <div>
            {{ $comic['title'] }}
        </div>
    @endforeach
@endsection

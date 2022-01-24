@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-5 text-center">MOVIES ARCHIVE</h1>

    <h2 class="text-center">Movies</h2>

    <section>
        <ul>

            @foreach ($movies as $movie)
                
                <li>{{ $movie->title }}</li>

            @endforeach

        </ul>
    </section>

</div>

@endsection
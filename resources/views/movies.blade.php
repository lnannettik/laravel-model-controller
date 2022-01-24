@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-5 text-center">MOVIES ARCHIVE</h1>

    <h2 class="text-center mb-5">Movies</h2>

    <section class="d-flex flex-wrap" >

        @foreach ($movies as $movie)

        <div class="movie-card col-4">

            <ul class="card-list">
            
                <li class="card-element">{{ $movie->title }}</li>
                <li class="card-element">{{ $movie->original_title }}</li>
                <li class="card-element">{{ $movie->nationality }}</li>
                <li class="card-element">{{ $movie->date }}</li>
                <li class="card-element">{{ $movie->vote }}</li>

            </ul>

        </div>

        @endforeach

    </section>

</div>

@endsection
@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-5">HOMEPAGE</h1>

    <h2>Skills</h2>
    <ul>

        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach

    </ul>

    @dump($clients)
</div>

@endsection
@extends('layouts.main')

@section('content')
    <section class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <h4>{{ $movie->title }}</h4>
                <ul>
                    <li>Titolo originale: {{ $movie->original_title }}</li>
                    <li>Nazionalità: {{ $movie->nationality }}</li>
                    <li>Data di uscita: {{ $movie->date }}</li>
                    <li>Voto: {{ $movie->vote }}</li>
                </ul>
            </div>
        @endforeach
    </section>
@endsection
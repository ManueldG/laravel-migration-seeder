@extends('layout.home')

@section('content')

    <div class="container">

        <h1>
            Voyages
        </h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quia corporis quam, ex officia perferendis reiciendis minus molestiae! Omnis veniam aut libero mollitia, incidunt assumenda expedita atque ipsa accusamus est!</p>
        <div class="flex">
            @foreach ($voyages as $voyage)

                <article>

                    <h2>{{ $voyage->location }}</h2>
                    <h3>{{ $voyage->description }}</h3>
                    {{ $voyage->days }} giorni
                    {{ $voyage->price }} euro a persona
                    sistemazione in {{ $voyage->place }}
                    trattamento {{ $voyage->treatment }}

                </article>

        @endforeach
        </div>

    </div>

@endsection

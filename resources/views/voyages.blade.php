@extends('layout.home')

@section('content')

    <div class="container">

        <h1>
            Voyages
        </h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quia corporis quam, ex officia perferendis reiciendis minus molestiae! Omnis veniam aut libero mollitia, incidunt assumenda expedita atque ipsa accusamus est!</p>
        @foreach ($voyages as $voyage)


        {{ $voyage->location }}
        {{ $voyage->days }}
        {{ $voyage->price }}
        {{ $voyage->place }}
        {{ $voyage->treatment }}
        {{ $voyage->description }}


        @endforeach
    </div>

@endsection

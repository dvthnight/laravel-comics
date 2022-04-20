@extends('layouts.standard')

@section("metaTitle","Comics")

@section('content')
    <main class="principale">
        <div class="immagine_jumbo"> </div>
        <h3 class="titolo_serie_corrente">Current series</h3>
        <div class="container">
            <div class="fumetti">
                {{-- @dump($fumetti) --}}
                @foreach ($fumetti as $indice=>$fumetto)
                <a href="{{route("fumetti.show",["id"=>$indice])}}" class="box_fumetto">
                    <img src="{{$fumetto['thumb']}}" alt="">
                    <h4 class="titolo_fumetto">{{$fumetto['series']}}</h4>
                </a>
                @endforeach
            </div>
            <button class="load_button">Load More</button>
        </div>
    </main>
@endsection
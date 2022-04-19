@extends('layouts.standard')

@section("metaTitle","Comics")

@section('content')
    <main>
        <div class="immagine_jumbo"> </div>
        <h3 class="titolo_serie_corrente">Current series</h3>
        <div class="container">
            <div class="fumetti">
                @dump($fumetti)
            </div>
            <button class="load_button">Load More</button>
        </div>
    </main>
@endsection
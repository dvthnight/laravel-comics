@extends("layouts.standard")

@section("metaTitle",$fumetto["title"])

@section('content')
    <main class="detail">
        <div class="immagine_jumbo"> </div>
        <section class="riga_blu">
            <div class="container">
                <figure class="immagine_fumetto">
                    <img src="{{$fumetto["thumb"]}}" alt="">
                </figure>
            </div>
        </section>
        <section class="centrale">
            <div class="container">
                <div class="col-8">
                    <h2>{{$fumetto["title"]}}</h2>
                    <div class="check_menu">
                        <div class="check_prezzo">
                            <div class="prezzo" >U.S. Price: <span>{{$fumetto["price"]}}</span></div>
                            <div class="disponibile">Available</div>
                        </div>
                        <div class="check_disponibilita">
                            <a href="#">Check availability</a>
                        </div>
                    </div>
                    <p>{{$fumetto["description"]}}</p>
                </div>
                <div class="col-4">
                    <h5>Advertisement</h5>
                    <figure>
                        <img src="/img/adv.jpg" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section class="dettagli">
            <div class="container">
                <div class="col-6">
                    <h3>Talent</h3>
                    <div class="row">
                        <div class="det_cont">
                            <div class="det_title">Art by:</div>
                            <div class="det_param blue">
                                @foreach($fumetto["artists"] as $artist)
                                    {{$artist}} <span>,</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="det_cont">
                            <div class="det_title">Written by:</div>
                            <div class="det_param blue">
                                @foreach($fumetto["writers"] as $writer)
                                    {{$writer}} <span>,</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>Specs</h3>
                    <div class="row">
                        <div class="det_cont">
                            <div class="det_title">Series:</div>
                            <div class="det_param blue">
                                {{$fumetto["series"]}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="det_cont">
                            <div class="det_title">U.S. price:</div>
                            <div class="det_param">
                                {{$fumetto["price"]}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="det_cont">
                            <div class="det_title">On Sale Date:</div>
                            <div class="det_param">
                                {{$fumetto["sale_date"]}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="link_aggiuntivi">
            <div class="container">

            </div>
        </section> --}}
    </main>
@endsection
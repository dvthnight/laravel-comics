@extends("layouts.standard")

@section("metaTitle",$fumetto["title"])

@section('content')
    <main>
        @dump($fumetto)
    </main>
@endsection
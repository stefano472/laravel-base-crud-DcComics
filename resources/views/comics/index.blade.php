@extends('comics.layout.mainLayout')

@section('title')
    DC | DC Comics
@endsection

@section('main')
    @include('comics.partials.bodyHomepage', $comics)
@endsection
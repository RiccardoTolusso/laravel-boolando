@extends("layouts.default")

@section('title')
    Booleando - Home Page
@endsection

@section('main')
    @foreach ($products as $product)
        @include("partials.card")       
    @endforeach
@endsection

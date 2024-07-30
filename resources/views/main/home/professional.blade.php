@extends('main.base')

@push('head')
<title>Dan Powell | Website designer, front-end developer</title>
<meta name="description" content="I’m Dan Powell, and I design and develop websites and other digital stuff. Here’s my portfolio of creative work.">
@endpush

@push('class', 'Home')

@section('main')
    @include('main.home._intro')
    @include('main.home._hero')
    @include('main.home._calltoaction')
@endsection

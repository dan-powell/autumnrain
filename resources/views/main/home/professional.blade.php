@extends('main.base')

@push('head')
<title>Dan Powell | Website designer, front-end developer</title>
<meta name="description" content="I’m Dan Powell, and I design and develop websites and other digital stuff. Here’s my portfolio of creative work.">
@endpush

@section('title', 'Dan Powell')
@section('subtitle', 'Web Designer')

@section('sidebar-name')
    <a href="{{ route('home-pro') }}" class="Sidebar-name">
        Dan Powell Web Design
    </a>
@endsection

@push('class', 'ProHome')

@section('buttons')
    @component('sidebar.components.button')
        @slot('url', route('home-pro'))
        @slot('icon', 'img/sidebar/icons.svg#home')
        @slot('label', 'Home')
    @endcomponent
@endsection

@section('main')
    @include('main.home._intro')
    @include('main.home._hero')
    {{-- @include('main.home._calltoaction') --}}
@endsection

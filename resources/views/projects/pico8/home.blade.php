@extends('projects.pico8.base')

@section('meta')
    <title>Pico 8 Games</title>
    <meta name="description" content="A collection of games I've created for the PICO-8 virtual console">
@stop

@push('class', 'Home')

@section('main')
    <header class="Header">
        <div class="Header-intro">
            <div class="Header-text">
                <h1 class="Header-title" data-text="PICO-8 Games">My PICO-8 Games</h1>
                <p class="Header-subtitle">A collection of games I've created for the PICO-8 virtual console</p>
                <div class="Header-links">
                    <a class="Header-link" href="#a-games">The Games</a>
                    {{-- <a class="Header-link" href="#a-about">About PICO-8</a> --}}
                </div>
            </div>
        </div>
        <img class="Header-img" alt="PICO-8 Games" src="{{ asset('assets/hero_3x2.gif') }}">
    </header>
    <section class="Games" id="a-games">
        <div class="Games-list">
            @foreach(config('projects.pico8.carts') as $key => $cart)
                <div class="Game">
                    <a class="Game-link" href="{{ route('project.page', ['pico8', 'borkanoid']) }}"></a>
                    <div class="Game-bg u-scanlines"></div>
                    <div class="Game-inner">
                        <div class="Game-cart">
                            <div class="Game-cart-shadow">
                                <div class="Game-cart-float">
                                    <img class="Game-cart-img" src="{{ asset($cart['cart']) }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="Game-description">
                            <h2 class="Game-name u-glitch" data-text="{{ $cart['name'] }}">{{ $cart['name'] }}</h2>
                            @isset($cart['subtitle'])
                                <p class="Game-subtitle">{{ $cart['subtitle'] }}</p>
                            @endisset
                            @isset($cart['subtitle'])
                                <div class="u-content">
                                    {!! $cart['description'] !!}
                                </div>
                            @endisset
                            <div class="Game-wrap">
                                <div class="Game-buttons">
                                    <a class="Game-button" href="{{ route('project.page', ['pico8', $key]) }}">Play {{ $cart['name'] }}</a>
                                    @isset($cart['about'])
                                        <a class="Game-button" href="{{ route('project.page', ['pico8', $cart['about']]) }}">Find out more</a>
                                    @endisset
                                </div>
                                @if(isset($cart['previews']))
                                    <div class="Game-previews">
                                        @if(isset($cart['previews']))
                                            @foreach($cart['previews'] as $preview)
                                                <video class="Game-video" autoplay loop muted playsinline  poster="{{ $preview['poster'] }}">
                                                    @foreach($preview['formats'] as $format)
                                                        <source src="{{ asset($format['file']) }}" type="{{ $format['mime'] ?? '' }}" codecs="{{ $format['codecs'] ?? '' }}">
                                                    @endforeach
                                                </video>
                                            @endforeach
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- <section class="Home-about" id="a-about">

    </section>
    <section class="Home-credits">
        CSS Scanlines https://codepen.io/meduzen/pen/zxbwRV

    </section> --}}
@stop

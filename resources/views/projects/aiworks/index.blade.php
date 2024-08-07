@extends('projects.aiworks.base')

@section('meta')
    <title>Exploring AI Art - Dan Powell Design</title>
    <meta name="description" content="">
@stop

@push('class', 'Index')

@section('main')
    <div class="Index-container">
        <header class="Index-header">
            <img src="{{ asset('assets/aiworks_logo.svg') }}" class="Index-header-logo"/>
            <p class="Index-header-desc">In this artistic journey of discovery, we explore the creative potential of AI by creating a unique piece of artwork each week for a span of one year. This experiment aims to uncover the boundless possibilities of a collaborative creative workflow involving both humans and artificial intelligence.
                @if(request()->query('order') == 'asc')
                    <a href="{{ url('/?order=desc') }}">Latest first</a>
                @else
                    <a href="{{ url('/?order=asc') }}">Oldest first</a>
                @endif
            </p>

        </header>
        <div class="Index-months">
            @foreach($dates as $date => $month)
                <div class="Index-month">
                    <div class="Index-month-date">
                        <h4 class="Index-month-date-h">{{ $date }}</h4>
                    </div>
                    <div class="Index-themes">
                        @foreach($month as $theme)
                            <div class="Index-theme">
                                <section class="Index-theme-heading">
                                    <h3 class="Index-theme-week">Week {{ $theme->date->format('W') }}</h3>
                                    <h2 class="Index-theme-name">{{ $theme->name }}</h2>
                                </section>
                                <div class="Index-pieces">
                                    @foreach($theme->pieces as $piece)
                                        <div class="Index-piece">
                                            <a href="{{ $piece->url }}" class="Index-piece-link"></a>
                                            <img
                                                class="Index-piece-img"
                                                alt="{{ $piece->name }}"
                                                title="{{ $piece->name }}"
                                                src="{{ asset(app('image')->crop(null, 400)->url($piece->thumbnail_url)) }}"
                                                srcset="{{ asset(app('image')->crop(null, 400)->url($piece->thumbnail_url)) }}, {{ asset(app('image')->crop(null, 800)->url($piece->thumbnail_url)) }} 2x"
                                            />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="Index-pagination">
            {{ $themes->links() }}
        </div>
    </div>
@endsection

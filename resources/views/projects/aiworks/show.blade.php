@extends('projects.aiworks.base')

@section('meta')
    <title>{{ $piece->theme->name }} - AiWorks - Dan Powell Design</title>
    <meta name="description" content="{{ $piece->description ?? '' }}">
@stop

@push('class', 'Show')

@section('main')
<section class="Show-inner">
    <div class="Show-aside">
        <div class="Show-aside-inner">
            @if($previous)
                @include('projects.aiworks.components._pager', ['piece' => $previous, 'class' => '_prev'])
            @endif
            {{-- <a class="Show-logo" href="/">
                <img src="{{ asset('assets/aiworks_logo.svg') }}" class="Show-logo-img"/>
            </a> --}}
            <div class="Show-aside-mid">
                <div class="Show-theme">
                    <h2 class="Show-theme-week">Week {{ $piece->theme->date->format('W') }}</h2>
                    <h2 class="Show-theme-name">{{ $piece->theme->name }}</h2>
                </div>
                <div class="Show-title">
                    <h2 class="Show-title-num">Piece</h2>
                    <h2 class="Show-title-name">{{ $piece->name }}</h2>
                </div>
                @if($piece->description)
                    <div class="Show-desc u-content">
                        {!! Str::markdown($piece->description) !!}
                    </div>
                @endif
            </div>
            @if($first)
                @include('projects.aiworks.components._pager', ['piece' => $first, 'class' => '_first'])
            @endif
        </div>
    </div>
    <section class="Show-main">
        <div class="Show-image">
            <a class="Show-image-link" href="{{ asset(app('image')->url($piece->image_url)) }}"></a>
            <img class="Show-image-img" src="{{ asset(app('image')->size('2560')->url($piece->image_url)) }}"/>
        </div>
        @if($piece->video)
            <video class="Show-video" controls>
                <source src="{{ asset('/assets/' . $piece->video_url) }}">
            </video>
        @endif
        @if(count($piece->process))
            <div class="Show-process">
                <h2 class="Show-process-heading">Process</h2>
                <div class="Show-process-list">
                    @foreach($piece->process as $key => $process)
                        <div class="Show-process-group">
                            <h4 class="Show-process-group-heading">
                                {{ $key + 1 }} <span class="Show-process-group-heading-h">{{ $process['caption'] ?? '' }}</span>
                            </h4>
                            <div class="Show-process-group-list">
                                @foreach(array_reverse($process['images']) as $image)
                                    <a class="Show-process-item js-lightbox" data-type="image" href="{{ asset(app('image')->url($piece->fixPath($image))) }}" title="{{ $process['caption'] ?? '' }}">
                                        <img class="Show-process-item-img" src="{{ asset(app('image')->size(null, '300')->url($piece->fixPath($image))) }}"/>
                                    </a>
                                @endforeach
                                @if(isset($process['description']))
                                    <div class="Show-process-group-desc u-content">
                                        {!! Str::markdown($process['description']) !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if(isset($piece->metadata_json) && count($piece->metadata_json) > 1)
            <details class="Show-metadata">
                <summary class="Show-metadata-heading">Metadata</summary>
                <dl class="Show-metadata-list">
                    @each('projects.aiworks.components._metadata', $piece->metadata_json, 'metadata')
                </dl>
            </details>
        @endif
    </section>
    <div class="Show-aside _last">
        <div class="Show-aside-inner">
            @if($previous)
                @include('projects.aiworks.components._pager', ['piece' => $previous, 'class' => '_prev'])
            @endif
            @if($next)
                @include('projects.aiworks.components._pager', ['piece' => $next, 'class' => '_next'])
            @endif
            @if($last)
                @include('projects.aiworks.components._pager', ['piece' => $last, 'class' => '_last'])
            @endif
        </div>
    </div>
</section>
@endsection

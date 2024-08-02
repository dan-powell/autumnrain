@extends('projects.base')

@push('fonts', 'Orbitron:700|Dancing+Script:400|Lato:400')

@section('title', 'Ai 52')
@section('subtitle', '')

@section('navigation')
    @component('sidebar.components.navigation')
        @foreach(config('projects.aiworks.navigation') as $item)
            @component('sidebar.components.item')
                @slot('url', $item['url'] ?? null)
                @slot('icon', $item['icon'] ?? null)
                @slot('label', $item['label'] ?? null)
                @slot('description', $item['description'] ?? null)
                @slot('items', $item['items'] ?? null)
            @endcomponent
        @endforeach
    @endcomponent
@endsection

@push('style')
    <link rel="stylesheet" href="{{ mix('css/projects/aiworks.css') }}" type="text/css">
@endpush


@push('script')
    <script defer src="{{ mix('js/projects/aiworks.js') }}"></script>
@endpush


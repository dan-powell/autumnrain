<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    @yield('meta')
    <link type="text/plain" rel="author" href="{{ asset('humans.txt') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ mix('css/base.css') }}" type="text/css">
    @if(!isset($sidebar) || isset($sidebar) && $sidebar == true)
        <link rel="stylesheet" href="{{ mix('css/sidebar.css') }}" type="text/css">
    @endif
    @stack('style')

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="//fonts.googleapis.com/css?family=Caveat|Nunito|@stack('fonts')" rel="stylesheet">

    @stack('head')

    <script defer src="{{ mix('js/manifest.js') }}"></script>
    <script defer src="{{ mix('js/vendor.js') }}"></script>
    @if(!isset($sidebar) || isset($sidebar) && $sidebar == true)
        <script defer src="{{ mix('js/sidebar.js') }}"></script>
    @endif
    @stack('script')

</head>

@section('buttons')
    @component('sidebar.components.button')
        @slot('url', route('home'))
        @slot('icon', 'img/sidebar/icons.svg#home')
        @slot('label', 'Home')
    @endcomponent
@endsection

@section('navigation')
    @component('sidebar.components.navigation')
        @foreach(config('content.sidebar.navigation') as $item)
            @component('sidebar.components.item')
                @slot('url', $item['url'] ?? null)
                @slot('icon', $item['icon'] ?? null)
                @slot('prefix', $item['prefix'] ?? null)
                @slot('label', $item['label'] ?? null)
                @slot('suffix', $item['suffix'] ?? null)
                @slot('items', $item['items'] ?? null)
            @endcomponent
        @endforeach
    @endcomponent
@endsection

<body class="@stack('class')">
    @if(!isset($sidebar) || isset($sidebar) && $sidebar == true)
        @include('sidebar.sidebar')
    @endif

    @yield('main')

    @stack('foot')

</body>
</html>

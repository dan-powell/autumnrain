<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    @yield('meta')
    <link type="text/plain" rel="author" href="{{ url('humans.txt') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/favicons/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/plugins.css?rev=1423329234356') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css?rev=1423329234356') }}" type="text/css">

    @stack('styles')

    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Caveat', 'Roboto:400,300,700:latin', 'Roboto+Slab:400,700:latin' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    {{-- <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20402828-1', 'auto');
        ga('send', 'pageview');
    </script> --}}

    @stack('head')

</head>

<body class="Base @yield('class')">
    @include('sidebar.sidebar')
    <section class="Base-main" id="js_content">
        @yield('main')
    </section>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    @stack('foot')
</body>
</html>
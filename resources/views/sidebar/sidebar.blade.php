<aside class="Sidebar">
    <div class="Sidebar-stripe">
        <button class="Sidebar-button Sidebar-button--menu js-sidebar">
            <div class="Sidebar-button-icon">
                <div class="Sidebar-button-icon-inner">
                    <span class="Sidebar-button-icon-ham"></span>
                    <span class="Sidebar-button-icon-ham"></span>
                    <span class="Sidebar-button-icon-ham"></span>
                </div>
            </div>
            <span class="Sidebar-button-inner">
                <span class="Sidebar-button-label Sidebar-button-label--open">Open Menu</span>
                <span class="Sidebar-button-label Sidebar-button-label--close">Close Menu</span>
            </span>
        </button>
        @yield('buttons')
        <a href="{{ config('app.url') }}" class="Sidebar-home">
            <h1 class="Sidebar-home-title">
                <span class="Sidebar-home-text Sidebar-home-text--1">Autumn</span>
                <span class="Sidebar-home-text Sidebar-home-text--2">Rain</span>
                <span class="Sidebar-home-text Sidebar-home-text--3">Studios</span>
            </h1>
        </a>
    </div>
    <div class="Sidebar-overlay">
        <div class="Sidebar-overlay-inner">
            <svg class="Sidebar-overlay-bg" viewBox="0 0 545 1010" preserveAspectRatio="xMaxYMax slice">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 77 0 116 67 77 135 0 135 -39 67"></polygon>
                    <polygon points="0 135 77 135 116 202 77 270 0 270 -39 202"></polygon>
                    <polygon points="0 270 77 270 116 337 77 404 0 404 -39 337"></polygon>
                    <polygon points="0 404 77 404 116 472 77 539 0 539 -39 472"></polygon>
                    <polygon points="0 539 77 539 116 607 77 674 0 674 -38 607"></polygon>
                    <polygon points="0 674 77 674 116 741 77 808 0 808 -39 741"></polygon>
                    <polygon points="0 808 77 808 116 875 77 942 0 942 -39 875"></polygon>
                    <polygon points="0 943 77 943 116 1010 77 1077 0 1077 -39 1010"></polygon>
                    <polygon points="194 67 116 67 77 0 116 -67 194 -67 233 0"></polygon>
                    <polygon points="194 202 116 202 77 135 116 67 194 67 233 135"></polygon>
                    <polygon points="194 337 116 337 77 270 116 202 194 202 233 270"></polygon>
                    <polygon points="194 472 116 472 77 404 116 337 194 337 233 404"></polygon>
                    <polygon points="194 607 116 607 77 539 116 472 194 472 233 539"></polygon>
                    <polygon points="194 740 116 740 78 673 116 606 194 606 233 673"></polygon>
                    <polygon points="194 875 116 875 78 808 116 741 194 741 233 808"></polygon>
                    <polygon points="194 1010 116 1010 78 943 116 876 194 876 233 943"></polygon>
                    <polygon points="233 0 311 0 350 67 311 135 233 135 194 67"></polygon>
                    <polygon points="233 135 311 135 350 202 311 270 233 270 194 202"></polygon>
                    <polygon points="233 270 311 270 350 337 311 404 233 404 194 337"></polygon>
                    <polygon points="233 404 311 404 350 472 311 539 233 539 194 472"></polygon>
                    <polygon points="233 539 311 539 350 607 311 674 233 674 194 607"></polygon>
                    <polygon points="233 674 311 674 350 741 311 808 233 808 195 741"></polygon>
                    <polygon points="233 808 311 808 350 875 311 942 233 942 195 875"></polygon>
                    <polygon points="233 943 311 943 350 1010 311 1077 233 1077 195 1010"></polygon>
                    <polygon points="428 67 350 67 311 0 350 -67 428 -67 467 0"></polygon>
                    <polygon points="428 202 350 202 311 135 350 67 428 67 467 135"></polygon>
                    <polygon points="428 337 350 337 311 270 350 202 428 202 467 270"></polygon>
                    <polygon points="428 472 350 472 311 404 350 337 428 337 467 404"></polygon>
                    <polygon points="428 607 350 607 311 539 350 472 428 472 467 539"></polygon>
                    <polygon points="427 740 349 740 311 673 349 606 427 606 466 673"></polygon>
                    <polygon points="427 875 349 875 311 808 349 741 427 741 466 808"></polygon>
                    <polygon points="427 1010 349 1010 311 943 349 876 427 876 466 943"></polygon>
                    <polygon points="467 0 544 0 583 67 544 135 467 135 428 67"></polygon>
                    <polygon points="467 135 544 135 583 202 544 270 467 270 428 202"></polygon>
                    <polygon points="467 270 544 270 583 337 544 404 467 404 428 337"></polygon>
                    <polygon points="467 404 544 404 583 472 544 539 467 539 428 472"></polygon>
                    <polygon points="467 539 544 539 583 607 544 674 467 674 428 607"></polygon>
                    <polygon points="466 674 544 674 583 741 544 808 466 808 428 741"></polygon>
                    <polygon points="466 808 544 808 583 875 544 942 466 942 428 875"></polygon>
                    <polygon points="466 943 544 943 583 1010 544 1077 466 1077 428 1010"></polygon>
                </g>
            </svg>
            <div class="Sidebar-nav">
                <h1 class="Sidebar-title">
                    <span class="Sidebar-title-h1">@yield('title', 'Dan Powell')</span>
                    @hasSection('subtitle')
                        <span class="Sidebar-title-h2">@yield('subtitle')</span>
                    @endif
                </h1>
                @yield('navigation')
            </div>
            <div class="Sidebar-about">
                <p class="Sidebar-about-text Sidebar-about-text--more">view some of my</p>
                <a class="Sidebar-about-link" href="{{ route(config('content.sidebar.links.projects')[0]) }}">
                    <svg class="Sidebar-about-link-icon" viewBox="0 0 512 512">
                        <use xlink:href="{{ asset('img/sidebar/icons.svg#projects') }}"></use>
                    </svg>
                    <span class="Sidebar-about-link-text">Projects</span>
                </a>
                <p class="Sidebar-about-text Sidebar-about-text--more">or checkout my code on</p>
                <a class="Sidebar-about-link" href="{{ url(config('content.sidebar.links.github')) }}">
                    <svg class="Sidebar-about-link-icon" viewBox="0 0 512 512">
                        <use xlink:href="{{ asset('img/sidebar/icons.svg#github') }}"></use>
                    </svg>
                    <span class="Sidebar-about-link-text">Github</span>
                </a>
            </div>
        </div>
    </div>
</aside>

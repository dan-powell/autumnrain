@extends('projects.3dprint.base')

@section('meta')
    <title>Adventures in 3D Printing - Dan Powell Design</title>
    <meta name="description" content="Having fun with 3D printing, designing and creating my own stuff">
@stop

@push('class', 'Home')

@section('main')
    <div class="HomeVideo">
        <video class="HomeVideo-vid" autoplay muted loop>
            <source src="{{ asset('/assets/video/3dprint_bg.mp4') }}" type="video/mp4">
        </video>
    </div>
	<section class="HomeTitle js-anime-observer">
        <div class="HomeTitle-bottom">
            <h1 class="HomeTitle-title">
                <span class="HomeTitle-small js-anime-small">Adventures in</span>
                <span class="HomeTitle-line js-anime-line"></span>
                <span class="HomeTitle-large js-anime-title">3D Printing</span>
                <span class="HomeTitle-line js-anime-line"></span>
            </h1>
            <div class="HomeTitle-more">
                <svg class="HomeTitle-icon js-anime-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" /></svg>
                <h2 class="HomeTitle-sub js-anime-sub">
                    AKA having fun designing and creating my own stuff
                </h2>
                <svg class="HomeTitle-icon js-anime-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" /></svg>
            </div>
        </div>
    </section>
    <section class="HomeIntro">
        <div class="HomeIntro-col u-content">
            <p>
                3D printing is a fusion of a number of my passions: Design, Electronics, Making – so I figured I would get a printer to check it out.
            </p>
            <p>After falling down a rabbit-hole with weeks of meddling, research and upgrades – I emerged with something that (<em>mostly</em>) works and is (<em>usually</em>) reliable&hellip; :)
            </p>
        </div>
        <div class="HomeIntro-col Intro-col--graphic">
            <img class="HomeIntro-graphic" src="{{ asset('assets/printer.svg') }}">
        </div>
    </section>
    <div class="HomeButtons">
        {{-- <a class="HomeButtons-button js-anime-fade" data-delay="200" href="{{ route('project.page', ['3dprint','about']) }}">
            <span class="HomeButtons-button-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
            </span>
            <span class="HomeButtons-button-inner">About the printer
                <small>A log of upgrades on the printer</small>
            </span>
        </a> --}}
        <a class="HomeButtons-button js-anime-fade" data-delay="500" href="#timelapses">
            <span class="HomeButtons-button-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </span>
            <span class="HomeButtons-button-inner">Timelapses
                <small>Examples of the printer in action</small>
            </span>
        </a>
        <a class="HomeButtons-button js-anime-fade" data-delay="800" href="#projects">
            <span class="HomeButtons-button-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line>
                </svg>
            </span>
            <span class="HomeButtons-button-inner">Projects
                <small>Some of the larger projects so far&hellip;</small>
            </span>
        </a>
    </div>
    <section class="HomeTimelapses">
        <h2 class="HomeTimelapses-title u-title js-anime-drop" id="timelapses">Timelapses</h2>
        <h3 class="HomeTimelapses-subtitle u-subtitle js-anime-drop">Examples of the printer in action</h3>
        <div class="HomeTimelapses-list">
            <div class="HomeTimelapses-item js-anime-zoom" data-delay="600">
                <video class="HomeTimelapses-vid" preload="none" controls muted poster="{!! app('image')->crop('1024', '768')->url('/timelapse_console.jpg') !!}">
                    <source src="{{ asset('/assets/video/timelapse_console_opt.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="HomeTimelapses-item HomeTimelapses-item--center js-anime-zoom">
                <video class="HomeTimelapses-vid" controls muted preload="none" poster="{!! app('image')->crop('1024', '768')->url('/timelapse_oddish.jpg') !!}">
                    <source src="{{ asset('/assets/video/timelapse_oddish_opt.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="HomeTimelapses-item js-anime-zoom" data-delay="800">
                <video class="HomeTimelapses-vid" preload="none" controls muted poster="{!! app('image')->crop('1024', '768')->url('/timelapse_rams.jpg') !!}">
                    <source src="{{ asset('/assets/video/timelapse_rams_opt.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
    <section class="HomeProjects">
        <h2 class="HomeProjects-title u-title js-anime-drop" id="projects">Projects</h2>
        <h3 class="HomeProjects-subtitle u-subtitle js-anime-drop">Some of the larger projects so far&hellip;</h3>
        <div class="HomeProjects-list">
            <div class="HomeProject js-anime-fade">
                <div class="HomeProject-img">
                    <img src="{!! app('image')->crop('1024', '768')->url('/vector_tray.jpg') !!}">
                </div>
                <div class="HomeProject-description u-content">
                    <h3 class="HomeProject-title">Vector Tray</h3>
                    <p class="u-lead">Custom-designed home for a cute robot friend.</p>
                    <p>A large print with integrated dynamic lighting system. Designed in Fusion 360, printed in 4 parts.</p>
                    {{-- <a class="u-button" href="/">Find out more</a> --}}
                </div>
            </div>
        </div>
    </section>
@stop

@extends('projects.365.base')

@section('meta')
    <title>Three Six Five Twenty Ten</title>
    <meta name="description" content="I decided to challenge myself to create a single piece of creative work every day for a whole year.">
@stop

@push('class', 'Home')

@section('main')
	<section class="Home-header">
        <h2 class="Home-header-large">365 2010</h2>
        <h2 class="Home-header-title">Three Six Five Twenty Ten</h2>
    </section>
	<section class="Home-strap">
        <h1 class="Home-strap-title">365 pieces of creative work in a single year</h1>
    </section>
    <section class="Home-description">
        <div class="Home-row">
            <div class="Home-intro">
                <p class="u-lead">At the end of 2009 I decided to challenge myself with a new-years resolution — to create a single piece of creative work every day for a whole year.</p>
                <a class="Home-cta" href="{{ route('project.page', ['365','gallery']) }}">
                    <span>View the entire archive</span>
                    <svg class="Home-cta-icon" viewBox="0 0 512 512">
                        <use xlink:href="{{ asset('assets/icons.svg#gallery') }}"></use>
                    </svg>
                </a>
            </div>
            <div class="Home-about">
                <p>Three-hundred-and-sixty-five photographs, graphics and illustrations later I just about managed it. Some days were a struggle, but I'm proud to say that I didn’t miss a single piece. As with all projects, things started out well. I had plenty of ideas, and time to finish them. But as time went on, it got harder to come up with new, interesting things to do.</p>
                <p>I was inspired to have a go after reading <a href="http://www.smashingmagazine.com/2009/12/22/design-something-every-day/" rel="nofollow" target="_blank">this article on Smashing Magazine</a>, not so much because I wanted to improve my design skills, but because I wanted to build discipline. The idea was to work my way out from the funk of artist’s block and procrastination — to do <em>something</em>, even if that something wasn’t all that impressive. A lot of the work is a low-quality on it’s own, but I’m pretty happy with the result when I look back over the work and consider it as a whole.</p>
            </div>
        </div>
    </section>
    <section class="Home-gallery">
        <h4 class="Home-gallery-title">Here's a selection of my favourites</h4>
        <div class="Home-preview">
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_one.jpg') !!}">
                <img class="Home-preview-img" alt="365_one_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_one.jpg') !!}">
            </a>
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_two.jpg') !!}">
                <img class="Home-preview-img" alt="365_two_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_two.jpg') !!}">
            </a>
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_three.jpg') !!}">
                <img class="Home-preview-img" alt="365_three_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_three.jpg') !!}">
            </a>
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_four.jpg') !!}">
                <img class="Home-preview-img" alt="365_four_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_four.jpg') !!}">
            </a>
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_five.jpg') !!}">
                <img class="Home-preview-img" alt="365_five_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_five.jpg') !!}">
            </a>
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_six.jpg') !!}">
                <img class="Home-preview-img" alt="365_six_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_six.jpg') !!}">
            </a>
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_seven.jpg') !!}">
                <img class="Home-preview-img" alt="365_seven_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_seven.jpg') !!}">
            </a>
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_eight.jpg') !!}">
                <img class="Home-preview-img" alt="365_eight_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_eight.jpg') !!}">
            </a>
            <a class="Home-preview-item js-lightbox" data-type="image" href="{!! app('image')->url('/365_nine.jpg') !!}">
                <img class="Home-preview-img" alt="365_nine_thumb.jpg" src="{!! app('image')->crop('810', '374')->url('/365_nine.jpg') !!}">
            </a>
        </div>
    </section>
@stop

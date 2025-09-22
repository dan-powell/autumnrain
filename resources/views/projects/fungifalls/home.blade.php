@extends('projects.fungifalls.base')

@section('meta')
    <title>Fungi Falls</title>
    <meta name="description" content="An HTML5 + Javascript in-browser game demo">
@stop

@push('class', 'Home')

@section('main')
    <section class="Home-header">
        <div class="Home-header-inner">
            <img class="Home-logo" alt="Fungi Falls" src="{!! app('image')->url('logo.png') !!}" width="645" height="333">
            <h1 class="Home-title">Fungi Falls <small>An HTML5 browser game demo</small></h1>
            <a class="Home-cta js-lightbox" data-gallery="game1" href="{{ url('game') }}">Play Fungi Falls now</a>
        </div>
    </section>
    <section class="Home-description">
        <div class="Home-container u-content">
            <h3>What's this then?</h3>
            <p>Fungi Falls is a simple game demo that I built as a way to investigate the HTML5 game scene and as a chance to get my Javascript on.</p>
            <img class="Home-hr" alt="entity_shroom_red" src="{!! app('image')->url('entity_shroom_red.png') !!}">
            <h3>But why?</h3>
            <p>I've always loved the idea of designing and building games, but never really had the opportunity. With the recent rise of HTML5 and other web tech, I've been able to leverage my existing skillset as a web-designer so the learning curve hasn't been too steep.</p>
            <p>I deliberately kept the process organic and didn't really plan anything just to keep it easy. I've mainly been concerned with familiarising myself with the process required to build a game from scratch, hence why there's not actually all that much to the game.</p>
            <img class="Home-hr" alt="entity_shroom_tan" src="{!! app('image')->url('entity_shroom_tan.png') !!}">
            <h3>How'd you build it?</h3>
            <p>After following <a href="http://www.photonstorm.com/phaser/tutorial-making-your-first-phaser-game" rel="nofollow" target="_blank">this tutorial on using Phaser</a>, I decided to take the result and build on it to create a (nearly) fully-fledged game.</p>
            <p>Everything is my own work, except for the Phaser framework and the audio assets listed below.</p>
        </div>
    </section>
    <section class="Home-credits">
        <div class="Home-container u-content">
            <p>Thanks to&hellip;</p>
            <ul>
                <li><a href="http://www.newgrounds.com/audio/listen/569093" rel="nofollow" target="_blank">Twilight Juggle (Music)</a> by <a href="http://emptywindow.newgrounds.com/" rel="nofollow" target="_blank">emptywindow</a></li>
                <li><a href="http://soundbible.com/107-Bomb-Explosion-1.html" rel="nofollow" target="_blank">Bomb Explosion SFX</a> by Mike Koenig</li>
                <li><a href="http://soundbible.com/1343-Jump.html" rel="nofollow" target="_blank">Jump SFX</a> by snottyboy</li>
            </ul>
            <p>&hellip;for using the <a href="https://creativecommons.org/licenses/by/3.0/" rel="nofollow" target="_blank">CC license 3.0</a> so that I could use your stuff :)</p>
            <div class="Home-row">
                <div class="Home-col Home-col--1">
                    <div class="Home-row">
                        <div class="Home-col Home-col--2">
                            <h4>Built with Phaser 2</h4>
                            <p><a href="http://phaser.io" rel="nofollow" target="_blank">Phaser</a> is a wicked HTML5 game engine built on <a href="http://www.pixijs.com" rel="nofollow" target="_blank">Pixi.js</a>. Check out some other <a href="http://pgl.ilinov.eu" rel="nofollow" target="_blank">games built with Phaser</a>.</p>
                        </div>
                        <div class="Home-col Home-col--1">
                            <a class="Home-center" href="http://phaser.io" rel="nofollow" target="_blank">
                                <img alt="Phaser Logo" src="{!! app('image')->url('Phaser-Logo-Small.png') !!}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="Home-col Home-col--2">
                    <div class="Home-row">
                        <div class="Home-col Home-col--2">
                            <h4>Open Source</h4>
                            <p>You can <a href="https://github.com/dan-powell/fungi-falls" rel="nofollow" target="_blank">find all the code and assets on GitHub</a>. This is my first foray in to game development, so the code is ropey at best, but feel free to use it in your own projects.</p>
                        </div>
                        <div class="Home-col Home-col--1">
                            <a class="Home-center" href="https://github.com/dan-powell/fungi-falls" rel="nofollow" target="_blank">
                                <img alt="GitHub" src="{!! app('image')->url('GitHub-Mark-120px-plus.png') !!}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
     	</div>
    </section>
     <section class="Home-outro">
        <div class="Home-container u-content">
            <img class="Home-hr" alt="player_gib_head" src="{!! app('image')->url('player_gib_head.png') !!}">
            <h3>OK, cool beans.</h3>
            <p><a class="js-lightbox" data-gallery="game2" href="{{ url('game') }}">You should check out the game now :)</a></p>
            <img alt="player_spritesheet" src="{!! app('image')->url('player_spritesheet.png') !!}">
     	</div>
    </section>
@stop

@extends('main.base')

@push('head')
<title>My Projects</title>
<meta name="description" content="Here's a selection of my best work.">
@endpush

@push('class', 'Projects')

@section('main')
    <div class="Header">
        <h1 class="Header-title">My Projects</h1>
        <p class="Header-sub">Some of my work and other things</p>
    </div>
    @if(isset($projects) && count($projects))
        <div class="ProjectList">
        	@foreach($projects as $project)
        	    <div class="ProjectList-item">
                    @include('main.project._excerpt', ['item' => $project])
        	    </div>
        	@endforeach
        </div>
    @endif
@stop

@extends('main.base')

@push('head')
<title>Projects | Autumn Rain Studios</title>
<meta name="description" content="">
@endpush

@push('class', 'Projects')

@section('main')
    <div class="Header">
        <h1 class="Header-title">Projects</h1>
        <p class="Header-sub"></p>
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

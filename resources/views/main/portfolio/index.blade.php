@extends('main.base')

@section('meta')
<title>My Portfolio</title>
<meta name="description" content="Here's a selection of my best work.">
@stop

@push('class', 'Portfolio _index')

@section('main')
    <section class="Section Section--lightGrad Section--md">
        <div class="Section-container">
            <h1 class="pageHeading">
                My Portfolio
            </h1>
        </div>
    </section>
    @if(count($lead))
        <section class="Section Section--primary Section--md">
    	    <div class="Section-container Section--center">
        	    <h3>The latest and greatest</h3>
    	    </div>
        </section>

        @include('main.portfolio.list.stack', ['items' => $lead])

    @endif
    @if(count($items))
        <section class="Section Section--primary Section--md">
    	    <div class="Section-container Section--center">
                @if(count($lead))
        	        <h3>And a few more</h3>
                @else
                    <h3>A selection of work I have completed</h3>
                @endif
    	    </div>
        </section>
        <section class="Section">
            <div class="Section-container Section--center Section--md">
                @include('main.portfolio.list', ['items' => $items])
            </div>
        </section>
    @endif
@stop

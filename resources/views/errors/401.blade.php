@extends('main.base')

@section('meta')
<title>Forbidden</title>
<meta name="description" content="401 Error - Forbidden">
@stop

@push('class', 'Error')

@section('main')
    <div class="Error-layout">
        <div class="Error-container">
            <div class="Error-header">
				<h1>Error 401</h1>
				<h2>Unauthorised</h2>
            </div>
            <div class="Error-controls">
                <a class="Error-button Error-button--primary" href="#" onclick="window.history.go(-1); return false;" class="Button">Go Back</a>
	    	    <a class="Error-button" href="{{ url('/') }}" class="u-button">Return Home</a>
            </div>
	    </div>
    </div>
@stop

@extends('base')

@push('fonts', 'Lato:300,400,700')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
@endpush

@push('script')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush

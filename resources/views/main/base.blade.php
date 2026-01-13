@extends('base')

@push('fonts', 'Lato:300,400,700')

@push('style')
    <link rel="stylesheet" href="{{ mix('css/main.css') }}" type="text/css">
@endpush

@push('script')
    <script src="{{ mix('js/main.js') }}"></script>
@endpush

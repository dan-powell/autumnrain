@section('meta')
<meta name="robots" content="noindex">
@stop

@section('main')
    @parent
    <section class="Section">
        <div class="_container -lg Content">
            {!! Markdown::parse(View::make('styleguide.content.advanced-md')) !!}
        </div>
    </section>
@stop
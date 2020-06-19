 @extends('layouts.default')

@section('header_js')

@stop
@section('header_css')
@stop
@section('main_content')
{{$message->body}}


@stop

@section('footer')
@include('layouts.footer_js')
@stop




 @extends('admin.layouts.default')

@section('header_js')

@stop
@section('admin.header_css')
@include('admin.layouts.admin_css')
@stop
@include('admin.layouts.navigation')
@section('main_content')
@include('admin.product.products_thumbnails')


@stop

@section('footer')
@include('admin.layouts.footer_js')
@stop




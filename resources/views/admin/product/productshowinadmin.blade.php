 @extends('admin.layouts.default')

@section('header_js')

@stop

@section('header_css')
@include('admin.layouts.css')
@stop

@section('header')
@stop

@section('main_content')

<style>
    .productadminpageshow img{
        width:100%;

    }
</style>

<!-- <div class="container">
   -->
<div class="productadminpageshow" >

<img src="{{asset('images/products/'.$product->image)}}" alt="">
<br>

<br>
<br>
<!-- </div> -->
</div>

<div class="col-lg-9">
<h2>{{$product->title}}</h2>

@foreach($product->propertyvalues as $propertyvalue)

{{$propertyvalue->property->label}} : {{$propertyvalue->value}}  <br>
@endforeach
<hr>
   <a href="{{url('/admin/products/'.$product->id.'/adddetails')}}">ویرایش جزئیات محصول</a>
<br>
</div>
    @stop
@section('admin.layouts.footer')
@include('admin.layouts.footer_js')
@stop

@extends('front.layouts.default')
@section('main_content')

<div class="container" > 
  @include('front.product.products_thumbnails')
  <hr>
</div>

<style>
    .same-height{
        position:static;
        background-color:#fff;
    }
    
    .product_thumbnail_texts p{
        color:#000;
    }
    
    
</style>


@stop
@extends('front.layouts.default')



@section('main_content')
<div class="container">

	@include('front.product.products_thumbnails')

</div>


<style>
    	.same-height{
	    position:static;
	    background-color:#fff;
	}
	
	.product_thumbnail_texts{
	    color:#000;
	}
	
</style>

@stop
@extends('front.layouts.default')
@section('main_content')
<!-- <script src="//code.jquery.com/jquery-3.3.1.min.js"></script> -->
<!-- <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}} " /> -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script> -->
<style>

.zoom_05{
width:200px;
}

#product_details{
  background-color:#fff;
  padding:20px;

}
h1{

    font-size: 26px;
    line-height: 60px;
}


</style>
<div class="container">
  <!-- <hr> -->
  <div id="product-page">
    <!-- <img id="zoom_01" src='../images/small/image1.png' data-zoom-image="../images/large/image1.jpg"/> -->
    <div class="product_img col-lg-8 col-md-8 col-sm-8 col-xs-12" style="float:right">
      <!-- <a href="#" class="" data-image="{{asset('images/products/'.$product->image)}}" > -->
      <div id="slider3" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php $j = 0;?>
          @foreach($product->extraimages as $productcountitem)
          <li class=" <?php if ($j == 1) {echo 'active';}?>" data-target="{{'#slider'.$j}}" data-slide-to="<?php echo $j; ?>"></li>
          <?php $j++;?>
          @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
          <?php $i = 1;?>
          @foreach($product->extraimages as $productcountitem)
          <div class="carousel-item <?php if ($i == 1) {echo 'active';}?>" >
            <img src="{{asset('images/products/'.$productcountitem->name)}}" alt="First Slide" class="d-block img-fluid" width="100%">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <?php $i++;?>
          @endforeach
          <a href="#slider3" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a href="#slider3" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
          <br>
        </div>
      </div>
    </div>
    <hr>
    <div class="" id="product_details">
      <form action="{{url('products/'.$product->id)}}" method="post">
        @csrf
        <div class="">
          <!-- <h1> {{--$product->title--}}</h1> -->
          <?php
          $category = $product->category;
          ?>
          @foreach($category->properties as $property)
          {{--@if($property->propertyvalue->value)--}}
          <!-- {{--$property->name--}} : {{--$property->propertyvalue->value --}} <br> -->
      {{--  @endif--}}  
          @endforeach

<!-- ************************************************************-->
<!-- <hr> -->

 <h1> {{$product->title}}</h1>
       
          @foreach($product->propertyvalues as $propertyvalue)
       
      {{$propertyvalue->property->label }} :  {{$propertyvalue->value}}  <br>
          
          @endforeach

          <hr>

<!-- **************************************************** -->

@if($product->price==0)
برای اطلاع از قیمت لطفاً با شماره ی 09109999141 تماس بگیرید
@else

          <p> {!!$product->description!!}</p>
          <p> {{$Persian_Number = str_replace(
            array('0','1','2','3','4','5','6','7','8','9'),
            array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'),
            number_format($product->price)
          )}} تومان</p>
            <p>{{--number_format($product->price)--}}</p>
          <hr>
    
          <input type="hidden" name="id" value="{{$product->id}}">
          <input type="hidden" name="price" value="{{$product->price}}">
          <input type="hidden" name="title" value="{{$product->title}}">
          <hr>
       
  
          <br>
          <br>
          <button id="buy" class="btn btn-primary" type="submit">افزودن به سبد خرید</button>
          <br>
          
          @endif
        </div>
        <br>
      </div>
    </form>
  </div>
</div>
</div>
@stop
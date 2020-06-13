@extends('front.layouts.default')
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.min.css')}}">
<style>

.zoom_05{
width:200px;
}

#product-page .row{
width: 100%;
}


#product_details{
  background-color:#fff;
  padding:20px;

}
h1{

    font-size: 20px;
    line-height: 50px;
    color:#000;
}



  
.product_img img{
 /*position: absolute;*/
   /* top: 30%;
   right:6%;*/
   width:100%;
   /*overflow:hidden;*/
   /*display:none;*/
/*   max-width: 1000px;
   z-index:100;
   min-width: 400px;*/
}


.active img{
  /*display:block;*/
}


div#product-page>div {
    float: right;
}

div#product-page>.product_img,#product_thumbnails>.col-lg-6{
  padding:0px;
  
}

.product_img{
  padding:0px 10px;
}
.container{
  padding:0px;
}

#product-image-and-detail{
  background-color:#fff;
  /*float:right;*/
}


/*easy zoom start*/

.easyzoom {
    float: left;
}
.easyzoom img {
    display: block;
}


/* Shrink wrap strategy 2 */
.easyzoom {
    display: inline-block;
}
.easyzoom img {
    vertical-align: bottom;
}
/*easy zoom end*/




#product-page .row, #product-page>.col-lg-6{
  margin-right:0px;
  margin-left:0px;
  padding-right:0px;
  padding-left:0px;
}


#product-image-and-detail>div{
  background-color:#fff;
  float:right;
}

#product_thumbnails>.col-lg-6{
margin-bottom:20px;

}


div#product_thumbnails{

  background-color:#fff;
}



div#product_thumbnails>div {
    float: right;
}

div#product_thumbnails>div>ul>li>div {
    float: right;
    margin:0px 0px 0px 20px;

}

div#product_thumbnails>div>ul>li {
    list-style: none;

}



</style>
<div class="container">
  <!-- <hr> -->
  <div id="product-page">
    <!-- <img id="zoom_01" src='../images/small/image1.png' data-zoom-image="../images/large/image1.jpg"/> -->
    <div class="row" id="product-image-and-detail">
    <div class="product_img col-lg-5" > 
    
          @foreach($product->extraimages as $productcountitem)
        
          @endforeach

          <?php

          $i=0;

          ?>
 
         {{--@foreach($product->extraimages as $productcountitem)--}} 
          <div  class= "  <?php //if($i==0){echo 'active';} ?>"  >
           
            <img  src="{{asset('images/products/'.$product->image)}}" alt="{{$product->title}} تصویر">
          <?php //$i++; ?>
       
          </div>
  
       {{--  @endforeach--}} 

         
          <br>
        </div>
     
  



<!-- 
    <hr> -->
    <div class="col-lg-6" id="product_details">
      <form action="{{url('products/'.$product->id)}}" method="post">
        @csrf
        <div class="">
          <!-- <h1> {{--$product->title--}}</h1> -->
          <?php
          $category = $product->category;
          ?>
          @foreach($category->properties as $property)
 
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
   
       
  
          <br>
         
        </div>
        <br>
      </div>
    </form>
  </div>

  </div>


</div>

<div class="container" id="product_thumbnails" >
<!-- <div class="row"> -->

<div class="col-lg-7">


<ul>
  <li>
      @foreach($product->extraimages as $productcountitem)
 <!--          <div class="<?php //if($i==0){echo 'active';} ?>"  >
            <img src="{{--asset('images/products/'.$productcountitem->name)--}}" width="100px">
          <?php //$i++; ?>
          </div> -->


  <a href="{{asset('images/products/'.$productcountitem->name)}}" data-fancybox="gallery" data-caption="{{$productcountitem->alt}}">
  <img src="{{asset('images/products/'.$productcountitem->name)}}" width="100px" alt="{{$product->title}} تصویر بند انگشتی " />
</a>


  
          @endforeach
          </li>
</ul>
</div>


<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>




</div>

</div>
@stop
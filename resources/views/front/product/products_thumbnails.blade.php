<style>
    .same-height{
        opacity:1;
        margin:0;
    }
    
    .producer_thumbnail p, .thumbnails a, .thumbnails a:hover{
        color:#000;
    }
    
    
    .same-height>div:hover {
    background-color: #673ab745;
}
    
</style>


<div class="thumbnails">
    @foreach($products as $product)
    <div class="product_thumbnail col-lg-3 col-md-6 col-xs-12 col-sm-12 card">
        <a href="{{url('/products/'.$product->slug)}}">
        @if($product->image)
        <img src="{{asset('/images/products/'.$product->image)}}" class="product_thumbnail" alt="">
        @else
        <img src="{{asset('/images/products/1.jpg')}}" class="product_thumbnail" alt="">
        @endif
        <div class="same-height">
            <div class="product_thumbnail_texts">
            <p> {{$product->title}}</p>
            
            @if($product->price==0)
برای اطلاع از قیمت لطفاً با شماره ی 09109999141 تماس بگیرید
@else
            
            <p> {{$Persian_Number = str_replace(
                array('0','1','2','3','4','5','6','7','8','9'),
                array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'),
                $product->price
            )}}</p>
            @endif
            <p>برای مشاهده ی جزئیات بیشتر درباره ی محصول روی تصویر کلیک کنید</p></a>
        </div>
        </div>
    </div>
    @endforeach
</div>
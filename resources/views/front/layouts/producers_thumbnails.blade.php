
<h2 id="producers-thumbnails-title">تولید کنندگان</h2>

<div class="thumbnails">

    @foreach($producers as $producer)
    <div class="producer_thumbnail col-lg-3 col-md-6 col-xs-12 col-sm-12 card">
     @if($producer->page_url!="")  <a href="{{'producers/'.$producer->page_url}}" > @endif
        @if($producer->image)
        <img src="{{asset('/images/producers/'.$producer->image)}}" class="producer_thumbnail" alt="">
        @else
        <img src="{{asset('/images/producers/1.jpg')}}" class="producer_thumbnail" alt="">
        @endif
 @if($producer->page_url!="") </a> @endif
    </div>
    @endforeach
</div>


<div class="thumbnails">
    
    
    
    @foreach($producttypes as $producttype)
    <div class="product_thumbnail col-lg-3 col-md-6 col-xs-12 col-sm-12 card">
        <a href="{{'pt/'.$producttype->page_url}}">
        @if($producttype->image)
        
       <span class="icon-olive_faraa"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span><span class="path32"></span><span class="path33"></span><span class="path34"></span><span class="path35"></span><span class="path36"></span><span class="path37"></span><span class="path38"></span><span class="path39"></span><span class="path40"></span><span class="path41"></span><span class="path42"></span><span class="path43"></span><span class="path44"></span><span class="path45"></span><span class="path46"></span><span class="path47"></span><span class="path48"></span><span class="path49"></span><span class="path50"></span><span class="path51"></span><span class="path52"></span><span class="path53"></span><span class="path54"></span><span class="path55"></span><span class="path56"></span><span class="path57"></span><span class="path58"></span><span class="path59"></span><span class="path60"></span><span class="path61"></span><span class="path62"></span><span class="path63"></span><span class="path64"></span><span class="path65"></span><span class="path66"></span><span class="path67"></span><span class="path68"></span><span class="path69"></span><span class="path70"></span><span class="path71"></span><span class="path72"></span><span class="path73"></span><span class="path74"></span><span class="path75"></span><span class="path76"></span><span class="path77"></span><span class="path78"></span><span class="path79"></span><span class="path80"></span><span class="path81"></span><span class="path82"></span><span class="path83"></span><span class="path84"></span><span class="path85"></span><span class="path86"></span><span class="path87"></span><span class="path88"></span><span class="path89"></span><span class="path90"></span><span class="path91"></span><span class="path92"></span><span class="path93"></span><span class="path94"></span><span class="path95"></span><span class="path96"></span><span class="path97"></span><span class="path98"></span><span class="path99"></span><span class="path100"></span><span class="path101"></span></span>
        <!--<img src="{{asset('/images/producttypes/'.$producttype->image)}}" class="product_thumbnail" alt="">-->
        @else
        <img src="{{asset('/images/producttypes/1.jpg')}}" class="product_thumbnail" alt="">
        @endif
        <div class="same-height">
            <div class="product_thumbnail_texts">
            <p> {{$producttype->title}}</p>
            
            
    
          
            <p>{{$producttype->description}}</p>
        </div>
        </div>
        </a>
    </div>
    @endforeach
</div>
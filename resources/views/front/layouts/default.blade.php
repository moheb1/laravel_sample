<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      
 
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
       <meta name="description" content="">


{!! SEO::generate() !!}




    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" >
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <!-- Fonts -->
  
  <style>

  body{
   /* background: url({!!asset('images/theme/atw13.png')!!}); */
  
    
  }
  
.navbar-brand img{
  margin-top:-30px;
}

.articles_page img{
  width:100%;
}



  @font-face {
    font-family: IRANSans;
    src: url('{!!asset("fonts/irsans_p30download.com.ttf")!!}');
}



.navbar-fixed-top{
  font-family:IRANSans;
  /*letter-spacing: unset;*/

}

.navbar-right>li{
    float:right;
}

  @media(max-width:770px) {
.newblog-description{

 padding: 0px 70px 80px 70px;
}
}


nav{
    background-color:#34495e;
}

#header>div>img{
  width:100%;
}



	#header{
			background-color:#ced0e6;
			padding:top:20px;
			height:60px;
    	    
    	}
		
		footer{
			background-color:#ced0e6;
			    
    width: 100%;
    bottom: 0px;
		}
    	

  
  #site-title{
      font-size: 24px;
    color: #fff;
    line-height: 30px;
    text-align: center;
  }
  
#front-navigation{
	display:flex;
	flex-direction:row-reverse;
	
	width:400px;
	justify-content:space-around;
	margin:auto;
	padding:20px 0px;
	
}



    

</style>


  </head>
  <body>

 <div id="header">

@include('front.layouts.navigation')

    </div>
  
   



    @yield('main_content')
    <!-- <footer> -->
 
   @include('front.layouts.footer')




@yield('footer_js')


  
    
  </body>
</html>
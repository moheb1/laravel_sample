 <!DOCTYPE html>
 <html lang="fa" dir="rtl">
     <head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
         <title>nashrara.ir</title> 
		 <meta name="csrf-token" content="{{ csrf_token() }}">
		     <meta name="viewport" content="width=device-width, initial-scale=1">
			 <script src="https://apis.google.com/js/api.js"></script>
<link rel="stylesheet" href="css/fp_app.css" />		 
<link rel="stylesheet" href="css/style.css" />	
<style>



  @font-face {
    font-family: IRANSans;
    src: url('{!!asset("fonts/irsans_p30download.com.ttf")!!}');
}

	#header{
			background-color:#ced0e6;
			padding:top:20px;
			height:60px;
    	    
    	}
		
		#front-navigation{
	display:flex;
	flex-direction:row;
	
	width:400px;
	justify-content:space-around;
	margin:auto;
	padding:20px 0px;
	
}

#fp-slider{
	background-color:green;
	height:100%;
	width:100%;
	max-width:600px;
}

#fp-slider img{
	width:100%;
}


</style>	 
     </head>
     <body>
	  <div id="header">
@include('front.layouts.navigation')
    </div>
	<div id="fp-slider">
	<img src="{{asset('images/articles/'.$lastArticleToFPSlider->image)}}" />
	
	</div>
	

<script src="{{asset('js/fp_app.js')}}"></script>          
     </body>
 </html>
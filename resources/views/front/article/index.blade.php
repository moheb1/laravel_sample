@extends('front.layouts.default')
@section('header_js')
<!-- <link rel="stylesheet" href="{{url('css/bootstrap_tab_2.css')}}"> -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>


@stop

@section('main_content')
<link rel="stylesheet" href="css/fp_app.css" />		 
<link rel="stylesheet" href="css/style.css" />	

<style>
	#article_body>p{
padding:20px;
	}
	#article{
		margin-top:20px;
	}
	#article>h1{
		background-color:#d6d9e2;
		padding:20px;
		
	}
	
	#fp-articles{
		display:flex;
		flex-wrap:wrap;
		justify-content:space-around;
		
		
	}
	
	#fp-articles div{
		/*float:right;*/
		direction:rtl;
		flex-basis:250px;
		margin:10px;
		  text-align: center;
		
		
	}
	
	#fp-articles>div:hover{
		  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
	}
	
	
	
	#fp-articles img{
		width:100%;
	}
	
	
	
</style>

<div class="container">

	<div  id="fp-articles">
	

	@foreach($articles as $article)
		<div>
	
	
	<a link href="http://localhost/faraavardeh_backup/public/articles/{{$article->slug}}"><h2>{{ $article->title}}  </h2>
	
	  <img src="{{url('images/articles/'.$article->image)}}">
	  
	 @if(strlen($article->description) > 402 ) 
	  <p> {{substr($article->description,0,300)}} </p>
  @else
	  <p> {{$article->description}} </p>
  @endif
	  <p>ادامه ی مطلب ...</p>

	</a>
	</div>
	@endforeach
		
	
	</div>
	
	
	<div>
	</div>




</div>

@stop




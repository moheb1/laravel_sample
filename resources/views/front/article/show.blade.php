@extends('front.layouts.default')
@section('header_js')
<!-- <link rel="stylesheet" href="{{url('css/bootstrap_tab_2.css')}}"> -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
@stop


@section('main_content')

<style>
	#article_body>p{
padding:20px;
	}

	#article>h1{
		background-color:#d6d9e2;
		padding:20px;
		
	}
</style>

<div class="container">
	
    <div id="article" class="row col-lg-9" style="float:right; background-color:#fff">
      <h1>{{$article->title}}</h1>
        <div>
            <img src="{{url('images/articles/'.$article->image)}}">
        </div>
   
<hr>
کلمات کلیدی  <br>
     @foreach($article->keywords as $keyword)
<a href="{{url('keywords/'.$keyword->id)}}">{{$keyword->name}}</a> ,

          @endforeach 
		  
<hr>
<div class="row " id="article_body">

	{!!$article->body!!}
</div>
 </div>
</div>
@stop

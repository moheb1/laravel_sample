@extends('layouts.default')
@section('header_js')


<link rel="stylesheet" href="{{url('js/ckeditor/samples/css/samples.css')}}">
<link rel="stylesheet" href="{{url('js/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
@stop
@section('header_css')
@include('layouts.css')
@stop
@section('main_content')
<div class="col-lg-12" style="float:right" id="create_message_form">
	<form method="post" style="direction:rtl" enctype="multipart/form-data" action="">
		{{csrf_field()}}
		<input type="hidden" value="1">
		<div class="form-group">
			<label for="name">عنوان</label>
			<input type="text" name="name" class="form-control" value="{{$message->title}}"></input>
		</div>
		
	
	


	<div class="form-group">
			<label for="body">بدنه</label>
			<textarea  class="form-control" name="body" id="editor2">{{$message->body}}</textarea>
		</div>

		<button type="submit">ارسال</button>
	</form>
</div>


@stop
@section('footer')

@stop

@section('footer_js')


@stop
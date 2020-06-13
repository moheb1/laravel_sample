@extends('admin.layouts.default')
@section('header_js')


<link rel="stylesheet" href="{{url('js/ckeditor/samples/css/samples.css')}}">
<link rel="stylesheet" href="{{url('js/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
@stop
@section('header_css')
@include('admin.layouts.css')
@stop
@section('main_content')
<div class="col-lg-12" style="float:right" id="create_article_form">
	<form method="post" style="direction:rtl" enctype="multipart/form-data" action="">
		{{csrf_field()}}
		<input type="hidden" value="1">
		<div class="form-group">
			<label for="name">عنوان</label>
			<input type="text" name="name" class="form-control" value="{{$article->title}}"></input>
		</div>
		<div class="form-group">
			<label for="name">نویسنده</label>
			<select type="text" name="author" class="form-control">
				@foreach($authors as $author)
				<option value="{{$author->id}}" >{{$author->contentmaker->firstname}}{{$author->contentmaker->lastname}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="category">موضوع</label>
			<select type="text" name="category" class="form-control">
				@foreach($categories as $category)
				<option value="{{$category->id}}" >{{$category->title}}</option>
				@endforeach
			</select>
		</div>
			<div class="form-group">
			<label for="page_title">عنوان صفحه</label>
			<input  class="form-control" name="page_title" id="" value="{{$article->page_title}}"></input>
		</div>

		<div class="form-group">
			<label for="slug">slug</label>
			<input  class="form-control" name="slug" id="editor" value="{{$article->slug}}"></input>
		</div>

		<div class="form-group">
			<label for="description">توضیحات</label>
			<textarea  class="form-control" name="description"  id="editor">{{$article->description}}</textarea>
		</div>


	<div class="form-group">
			<label for="body">بدنه</label>
			<textarea  class="form-control" name="body" id="editor2">{{$article->body}}</textarea>
		</div>


		<div class="form-gorup">
			<label for="">تصویر</label>

			<input type="file" name="thumbnail" id=""class="form-control">
			<img src="{{asset('images/articles/'.$article->image)}}" width="200px" height="auto"  alt="">
			<input type="hidden" value="{{$article->image}}" name="imagename">
		</div>
		<button type="submit">ارسال</button>
	</form>
</div>


<script>
 var CKEDITOR_BASEPATH = '../../../js/ckeditor/';


</script>

@stop
@section('footer')
<!--
<script src="{{url('js/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('js/ckeditor/translations/fa.js')}}"></script>
<script>
ClassicEditor
.create( document.querySelector( '#editor' ),{
			language: 'fa',
			dir:'rtl'
		} )
.catch( error => {
console.error( error );
} );
</script>-->
<script>
	//initSample();
</script>
@stop

@section('footer_js')
<script src="{{asset('js/admin_app_witheditor.js')}}"></script>

<script>



   CKEDITOR.replace('body');
</script>

@stop
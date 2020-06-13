@extends('admin.layouts.default')
@section('header_js')
<!-- <script src="{{url('js/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('js/ckeditor/samples/js/sample.js')}}"></script>
<link rel="stylesheet" href="{{url('js/ckeditor/samples/css/samples.css')}}">
<link rel="stylesheet" href="{{url('js/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}"> -->
@stop
@section('header_css')
@include('admin.layouts.css')
@stop
@section('main_content')
<div class="col-lg-8" style="float:right" id="create_article_form">
	<form method="post" style="direction:rtl" enctype="multipart/form-data" action="{{url('admin/articles/store')}}">
		{{csrf_field()}}
		<input type="hidden" value="1">
		<div class="form-group">
			<label for="name">عنوان</label>
			<input type="text" name="name" class="form-control"></input>
		</div>
		<div class="form-group">
			<label for="name">نویسنده</label>
			<select type="text" name="author" class="form-control">
				@foreach($authors as $author)
				<option value="{{$author->contentmaker->id}}" >{{$author->contentmaker->firstname}}{{$author->contentmaker->lastname}}</option>
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
<label for="description">کلمات کلیدی</label>
<select name="keywords[]" id=""  class="form-control" multiple >

    @foreach($keywords as $keyword)
    <option value="{{$keyword->id}}">{{$keyword->name}}</option>
    @endforeach


  </select>

<br>
</div>		

	<div class="form-group">
			<label for="description">توضیحات</label>
			<textarea  class="form-control" name="description" id="editor"></textarea>
		</div>

			<div class="form-group">
			<label for="page_title">عنوان صفحه</label>
			<input  class="form-control" name="page_title" id=""></input>
		</div>

		<div class="form-group">
			<label for="slug">slug</label>
			<input  class="form-control" name="slug" id="editor"></input>
		</div>



<!--


		<div class="form-group">
			<label for="body">بدنه</label>
			<textarea  class="form-control" name="body" id="editor2"></textarea>
		</div>
		
		-->

		<textarea name="body" id="body" rows="10" cols="80">
توضیحات مربوط به محصول را د ر این قسمت وارد نمایید!
</textarea>




		<div class="form-gorup">
			<label for="">تصویر</label>
			<input type="file" name="image" id="" class="form-control">
		</div>
		<button type="submit">send</button>
	</form>
</div>


<script>
 var CKEDITOR_BASEPATH = '../../js/ckeditor/';


</script>
<script>
	// CKEDITOR.replace('body', {
     //language: 'fa',
     // uiColor: '#9AB8F3',
     // customConfig: '/custom/ckeditor_config.js'
 //});
	//initSample();
</script>

@stop


@section('footer_js')
<script src="{{asset('js/admin_app_witheditor.js')}}"></script>

<script>



   CKEDITOR.replace('body', {
     language: 'en',
	 
	 
     // uiColor: '#9AB8F3',
     // customConfig: '/custom/ckeditor_config.js'
 });
 
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

@stop
@extends('layouts.default')
@section('header_js')
@stop
@section('header_css')

@stop
@section('main_content')
<div class="col-lg-8" style="float:right" id="create_article_form">
	<form method="post" style="direction:rtl" enctype="multipart/form-data" action="{{url('admin/articles/create')}}">
		{{csrf_field()}}
		<input type="hidden" value="1">
		<div class="form-group">
			<label for="name">عنوان</label>
			<input type="text" name="name" class="form-control"></input>
		</div>

		<textarea name="body" id="body" rows="10" cols="80" placeholder="متن مقاله ی خود را در این  قسمت وارد کنید...">
</textarea>



		<div class="form-gorup">
			<label for="">تصویر</label>
			<input type="file" name="image" id="" class="form-control">
		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary">send</button>
		</div>
	</form>
</div>






@stop


@section('footer_js')

@stop

@section('footer')

@stop
@extends('layouts.default')
@section('header_js')
@stop
@section('header_css')

@stop
@section('main_content')
<!-- /resources/views/post/create.blade.php -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
<div class="col-lg-8" style="float:right" id="create_message_form">
	<form method="post" style="direction:rtl" enctype="multipart/form-data" action="{{url('admin/messages/create')}}">
		{{csrf_field()}}
		<input type="hidden" value="1">
		<div class="form-group">
			<label for="name">عنوان</label>
			<input type="text" name="name" class="form-control"></input>
		</div>
<div class="form-group">
		<textarea name="body" id="body" rows="10" cols="80" placeholder="متن پیام خود را در این قسمت وارد نمایید...">
</textarea>
</div>
<div class="form-group">
		<button class="btn btn-primary" type="submit">send</button>
	</div></form>

</div>

@stop


@section('footer_js')

@stop

@section('footer')

@stop
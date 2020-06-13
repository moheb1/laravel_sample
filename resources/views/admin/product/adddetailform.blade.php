 @extends('admin.layouts.default')
@section('header_js')
@stop
@section('header_css')
@include('admin.layouts.css')
@stop

@section('header')
@stop
@section('main_content')
<style>
    .productadddetails img{
        width:100%;

    }
</style>
<br>
<div class="container">
  
<div class="row col-lg-9 productadddetails">
<img src="{{asset('images/products/'.$product->image)}}" alt="">
<br>
<br>
</div>
</div>
{{$product->title}}
<hr>
<br>

<form action="{{url('admin/products/'.$product->id.'/adddetails')}}" method="post">
@csrf
@foreach($product->category->properties as $property)
{{$property->label}} :
<?php
switch ($property->propertyvalueinputtype->name) {
    case 'text':
        echo '<input type="text" class="form-control" text="" name="'.$property->name.'"> ';
        break;
    case 'select':
        echo '<select name="'.$property->name.'" id="" class="form-control">';
        foreach ($property->property_input_value_options as $option) {
            echo '<option value="'.$option->value.'">' . $option->value . '</option>';
        }
        echo '</select>';
        break;

    case 'checkbox':
        echo '<input type="text"  class="form-control" >';
        break;

    case 'textarea':
        echo 'textarea';
        break;

    case 'radio':
        echo "radio botton";
        break;

    case 'file':
        echo "file";
        break;

    default:
        # code...
        break;
}



?>


@endforeach
<br>
<button type="submit" class="btn btn-primery" value="ذخیره کن">ذخیره کن</button>
   </form><br>	@stop

@section('admin.layouts.footer')
@include('admin.layouts.footer_js')
@stop

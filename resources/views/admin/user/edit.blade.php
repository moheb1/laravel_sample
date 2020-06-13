@extends('layouts.admin_layouts')
@section('header_js')
@stop
@section('header_css')
@include('layouts.admin_css')
@stop
@include('admin.navigation')
@section('main_content')



<div class="container">
    <div class="row">
        <form action="{{url('admin/users/'.$user->id.'/update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            نام<input type="text" name="name" id="" class="form-control" value="{{$user->name}}"><br>
            آدرس <input type="text" name="address" id="" class="form-control" value="{{$user->address}}"><br>
            موبایل <input type="text" name="mobile" id="" class="form-control" value="{{$user->mobile}}"><br>
            تلفن ثابت <input type="text" name="phone" id="" class="form-control" value="{{$user->phone}}"><br>
           

     
 
            
            
            <button type="submit" value="save" class="btn-primary">ذخیره
            </button>
        </form></div>
    </div>
   


@stop
@section('footer')
@include('layouts.admin_footer_js')
@stop

user
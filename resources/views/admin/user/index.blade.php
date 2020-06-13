@extends('admin.layouts.default')
@section('header_js')
@stop
@section('header_css')
@include('admin.layouts.css')
@stop

@section('main_content')
<table class="table">
    <thead>
        <tr>
            <th>ردیف</th>
            
            <th>نام</th>
            <th>شماره تلفن همراه</th>
			
			<th>آدرس</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
        	<td></td>
            <td><a href="{{url('admin/users/'.$user->id)}}" disabled="">
                   {{$user->name}}
                </a></td>
          
            <td>

                   {{$user->mobile}}
               
                
            </td>

            <td>
            	 {{$user->address}}
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
<br>
@stop
@section('footer')
@include('admin.layouts.footer_js')
@stop
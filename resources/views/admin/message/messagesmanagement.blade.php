 @extends('layouts.default')

@section('header_js')

@stop

@section('header_css')
@include('layouts.css')
@stop

@section('header')
@stop

@section('main_content')

    <table class="table">
        <thead>
        <tr>
            <th>نام</th>
				@if($user->hasRole('admin'))
                <th>ارسال کننده</th>


                 @endif	
           @if(!$user->hasRole('admin'))
            <th>ویرایش</th>
@endif
           
               
            <th>حذف</th>
	
      

        </tr>
        </thead>
        <tbody>

        @foreach($messages as $message)
            <tr>
                <td><a href="{{url('messages/'.$message->id)}}">{{$message->title}}</a></td>
    @if($user->hasRole('admin'))           
                <td>
{{$message->sender->name}}                    
                </td>
                @endif

@if($user->id==$message->owner_id)
                <td>
                    <a href="{{url('admin/messages/'.$message->id.'/edit')}}">
                       ویرایش
                    </a>
                </td>
                @endif

                <td>
			
                  <a href="{{url('admin/messages/'.$message->id.'/delete')}}" disabled="">
                        حذف
                    </a>
                </td>
            </tr>
          
        @endforeach

        </tbody>

    </table>
	@stop

@section('layouts.footer')
@include('layouts.footer_js')
@stop




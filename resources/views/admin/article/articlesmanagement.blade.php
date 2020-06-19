 @extends('layouts.default')

@section('header_js')

@stop

@section('header_css')
@stop

@section('header')
@stop

@section('main_content')

    <table class="table">
        <thead>
        <tr>
            <th>نام</th>
				<th>بسته بندی</th>
            <th>قیمت</th>
		
            {{--<th>توضیحات</th>--}}
            <th>تصویر</th>
            {{--<th>موجودی</th>--}}

        </tr>
        </thead>
        <tbody>

        @foreach($articles as $article)
            <tr>
                <td><a href="{{url('articles/'.$article->id)}}">{{$article->title}}</a></td>
				<td><a href="{{url('articles/'.$article->id)}}">{{$article->title}}</a></td>
                <td>{{$article->price}}</td>
               
                <td>
                    <a href="{{url('admin/articles/'.$article->id.'/edit')}}">
                        <img width="50px"  src="{{asset('images/articles/'.$article->image)}}" alt="">
                    </a>
                </td>


                <td>
                    <a href="{{url('admin/articles/'.$article->id.'/edit')}}">
                       ویرایش
                    </a>
                </td>

                <td>
			
                  <a href="{{url('admin/articles/'.$article->id.'/delete')}}" disabled="">
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




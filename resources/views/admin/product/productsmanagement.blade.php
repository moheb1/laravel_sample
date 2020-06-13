 @extends('admin.layouts.default')

@section('header_js')

@stop

@section('header_css')
@include('admin.layouts.css')
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

        @foreach($products as $product)
            <tr>
                <td><a href="{{url('admin/products/'.$product->id)}}">{{$product->title}}</a></td>
                <td><a href="{{url('admin/products/'.$product->id)}}">{{$product->package->title}}</a></td>
                <td>{{$product->price}}</td>

                <td>
                    <a href="{{url('admin/products/'.$product->id.'/edit')}}">
                        <img width="50px"  src="{{asset('images/products/'.$product->image)}}" alt="">
                    </a>
                </td>


                <td>
                    <a href="{{url('admin/products/'.$product->id.'/edit')}}">
                       ویرایش
                    </a>
                </td>

                <td>

                  <a class="delete_button" href="{{url('admin/products/'.$product->id.'/delete')}}" disabled="">
                        حذف
                    </a>
                </td>

                     <td>

                  <a href="{{url('admin/products/'.$product->id)}}" disabled="">

                    جزئیات بیشتر
                    </a>
                </td>




            </tr>

        @endforeach

        </tbody>

    </table>
  {{$products->links()}}





    @stop


@section('footer_js')

@include('admin.layouts.footer_js')

   <script>
const deleteBtn=document.querySelector('.delete_button');
deleteBtn.addEventListener('click',showdeletealert);
 function showdeletealert(e){
    

Swal.fire({
  title: 'هل تريد الاستمرار؟',
  type: 'question',
  customClass: {
    icon: 'swal2-arabic-question-mark'
  },
  confirmButtonText:  'نعم',
  cancelButtonText:  'لا',
  showCancelButton: true,
  showCloseButton: true
})
}

</script>



@stop

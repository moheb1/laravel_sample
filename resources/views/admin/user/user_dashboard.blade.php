@extends('admin.layouts.default')





    <table class="table">
        <thead>
        <tr>
            <th>نام</th>
            <th>قیمت</th>
            {{--<th>توضیحات</th>--}}
            <th>تصویر</th>
            {{--<th>موجودی</th>--}}

        </tr>
        </thead>
        <tbody>

        @foreach($products as $product)
            <tr>
                <td><a href="{{url('products/'.$product->id)}}">{{$product->title}}</a></td>
                <td>{{$product->price}}</td>
                {{--      <td>  <a href="{{url('admin/products/'.$product->id.'/edit')}}">{{$product->description}}</a></td></tr>--}}
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
                    <a href="" disabled="">
                        حذف
                    </a>
                </td>
            </tr>
            {{--      <td>  <a href="{{url('admin/products/'.$product->id.'/edit')}}">{{$product->totall}}</a></td></tr>--}}
        @endforeach

        </tbody>

    </table>

    <br>

    <a href="{{url('admin/products/create')}}">افزودن محصول جدید</a>





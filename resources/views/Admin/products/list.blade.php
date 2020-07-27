@extends('Admin.layouts.master')

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">اسم</th>
            <th scope="col">توضیحات</th>
            <th scope="col">عکس</th>
            <th scope="col">قیمت</th>
            <th scope="col">وضعیت </th>
            <th scope="col">عملیات </th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{mb_substr(strip_tags($product->description),0,50,'UTF8').'...'}}</td>
                <td><img src="{{asset('images/'.$product->image)}}" alt="" width="100px" height="100px"></td>
                <td>{{$product->price}}تومان </td>
                <td>   @if($product->status==1)
                        <form action="{{route('update.status.product',$product->id)}}" method="post">
                            @csrf
                            <button class="btn btn-danger">اتمام موجودی</button>
                        </form>
                    @else
                        <form action="{{route('update.status.product',$product->id)}}" method="post">
                            @csrf
                            <button class="btn btn-info">موجود</button>
                        </form>
                    @endif</td>
                <td>
                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">حذف</button>
                    </form>

                    <button class="btn btn-default"><a href="{{route('product.edit',$product->id)}}">ویرایش</a></button>
                </td>

                <td><a href="{{route('product.show',$product->id)}}" ><button class="btn btn-info">مشاهده</button></a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

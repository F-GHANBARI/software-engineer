@extends('Admin.Layouts.master')

@section('content')
    <form action="{{route('product.update',$product->id)}}" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-control">
            <label>نام
                <input type="text" name="name" class="form-control" value="{{$product->name}}">
            </label>
        </div>

        <div class="form-control">
            <label>متن
                <textarea name="description" class="form-control" cols="80" rows="10">{{$product->description}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>قیمت
                <input type="text" name="price" class="form-control" value="{{$product->price}}">
            </label>
        </div>


        <div class="form-control">
            <label>(حتما یک عکس اضافه شود در غیر این صورت عکس قبلی را مجدد بارگزاری کنید)
                <input type="file" name="image" class="form-control">
                <img src="{{asset('images/'.$product->image)}}" alt="" width="100px" height="100px">
            </label>
        </div>



        <div class="form-control">
            <label>وضعیت
                <select class="select-wrap" name="status">
                    <option value="1" @if($product->status==1)  selected  @endif>موجود</option>
                    <option value="0"  @if($product->status==0)  selected  @endif>اتمام موجودی</option>
                </select>
            </label>
        </div>
        <input type="submit" name="send" value="آپدیت" class="btn btn-info">
    </form>



@endsection



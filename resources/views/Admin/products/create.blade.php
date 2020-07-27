@extends('Admin.Layouts.master')

@section('content')
    <form action="{{route('product.store')}}" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="form-control">
            <label>عنوان
                <input type="text" name="name" class="form-control" >
            </label>
        </div>

        <div class="form-control">
            <label>متن
                <textarea name="description" class="form-control" cols="80" rows="10"></textarea>
            </label>
        </div>

        <div class="form-control">
            <label>قیمت
                <input type="text" name="price" class="form-control" >
            </label>
        </div>

        <div class="form-control">
            <label>عکس
                <input type="file" name="image" class="form-control">
            </label>
        </div>


        <div class="form-control">
                <label>وضعیت
                    <select class="select-wrap" name="status">
                        <option value="1">موجود</option>
                        <option value="0">اتمام موجودی</option>
                    </select>
                </label>
        </div>
        <input type="submit" name="send" value="ارسال" class="btn btn-info">
    </form>


@endsection



@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="content">
            <h1>سبد خرید</h1>
            <!-- start undo button -->
            <table class="items">
                <thead>
                <!-- start table head -->
                <tr>
                    <th>نام محصول</th>
                    <th>توضیحات</th>
                    <th>قیمت</th>
                </tr>
                <!-- end table head -->
                </thead>
                <tbody>
                <!-- start table body -->
                @foreach($products as $pro)
                    <tr>
                        <!-- start item one -->
                        <td>
                            {{$pro->name}}
                            <div class="item">
                                <div class="item">
                                    <img src="{{asset('images/'.$pro->image)}}" alt=""/>
                                </div>

                            </div>
                        </td>

                        <td><textarea readonly cols="20" rows="10">{{$pro->description}}</textarea> </td>



                        <td>{{$pro->price}} تومان</td>

                        <!-- end item one -->
                    </tr>
                @endforeach
                @foreach($count as $c)
                    <table class="items">
                        <thead>
                        <tr>
                            <th>تعداد</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <label>
                                    <input type="number" class="quantity" value="{{$c->count}}" min="1"/>

                                <form action="{{route('cart_item.destroy',$c->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">حذف</button>
                                </form>
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                @endforeach

                <!-- end table body -->
                </tbody>
            </table>
            <!-- start checkout list -->
        </div> <!-- End Content -->
    </div>
@endsection

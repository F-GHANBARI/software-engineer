@extends('layouts.master')
@section('content')
    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container" xmlns:fb="http://www.w3.org/1999/xhtml">
        <div class="push-up top-equal blocks-spacer">

            <!--  ==========  -->
            <!--  = Product =  -->
            <!--  ==========  -->
            <div class="row blocks-spacer">

                <!--  ==========  -->
                <!--  = Preview Images =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="product-preview">
                        <div class="picture">
                            <img src="{{asset('images/'.$product->image)}}" alt="" width="940" height="940" id="mainPreviewImg" />
                        </div>
                    </div>
                </div>

                <!--  ==========  -->
                <!--  = Title and short desc =  -->
                <!--  ==========  -->
                <div class="span7">
                    <div class="product-title">
                        <h1 class="name"><span class="light">{{$product->name}}</span></h1>
                        <div class="meta">
                            <span class="tag">{{$product->price}} تومان</span>
                            <span class="stock">
                                @if($product->status==1)
                                <span class="btn btn-success">موجود</span>
                                @else
                                <span class="btn btn-danger">اتمام موجودی</span>
                                @endif
                            </span>
                        </div>
                    <div class="product-description">
                        <p>{{$product->description}}</p>
                        <hr />

                        <!--  ==========  -->
                        <!--  = Add to cart form =  -->
                        <!--  ==========  -->
                        @if(\Illuminate\Support\Facades\Auth::check())
                        <form action="{{route('cart_item.store')}}" class="form form-inline clearfix" method="post">
                            @csrf
                            <div class="numbered">
                            	<label for="count">تعداد
                        <input type="text" name="count" value="1"  id="count" class="tiny-size" />
                                </label>

                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="cart_id">
                            </div>
                            <button class="btn btn-danger pull-right"><i class="icon-shopping-cart"></i> اضافه به سبد خرید</button>
                        </form>
                            @else
                            <button class="btn btn-danger pull-right">ابتدا ثبت نام کنید</button>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

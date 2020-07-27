@extends('layouts.master')

@section('content')
    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="push-up over-slider blocks-spacer">

                    <!--  ==========  -->
                    <!--  = Three Banners =  -->
                    <!--  ==========  -->
                    <div class="row">
                        <div class="span4">
                            <a href="#" class="btn btn-block banner">
                                <span class="title"><span class="light">فروش</span> تابستانی</span>
                                <em>تا 60% تخفیف روی کفش ها</em>
                            </a>
                        </div>
                        <div class="span4">
                            <a href="#" class="btn btn-block colored banner">
                                <span class="title"><span class="light">ارسال</span> رایگان</span>
                                <em>برای خرید های بیش از 69000 تومان</em>
                            </a>
                        </div>
                        <div class="span4">
                            <a href="#" class="btn btn-block banner">
                                <span class="title"><span class="light">محصولات</span> جدید</span>
                                <em>از محصولات جدید دیدن کنید.</em>
                            </a>
                        </div>
                    </div> <!-- /three banners -->
                </div>
            </div>
        </div>

        <!--  ==========  -->
        <!--  = Featured Items =  -->
        <!--  ==========  -->
    </div> <!-- /container -->

    <!--  ==========  -->
    <!--  = New Products =  -->
    <!--  ==========  -->
    <!--  ==========  -->
    <!--  = Most Popular products =  -->
    <!--  ==========  -->
    <div class="most-popular blocks-spacer">
        <div class="container">

            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles">
                        <h2 class="title">محصولات فروشگاه</h2>
                    </div>
                </div>
            </div> <!-- /title -->

            <div class="row popup-products">


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                @foreach($products as $product)
                    <div class="span3">
                        <div class="product">
                            <div class="product-img">
                                <div class="picture">
                                    <img src="{{asset('images/'.$product->image)}}" alt="" width="540"
                                         height="412"/>
                                    <div class="img-overlay">
                                        <a href="{{route('single.product.show',$product->id)}}"
                                           class="btn more btn-primary">توضیحات بیشتر</a>


                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            <form action="{{route('cart_item.store')}}"
                                                  class="form form-inline clearfix" method="post">
                                                @csrf
                                                <div class="numbered">
                                                    <label for="count">تعداد
                                                        <input type="text" name="count" value="1" class="tiny-size"
                                                               id="count"/>
                                                    </label>

                                                    <input type="hidden" value="{{$product->id}}" name="product_id">
                                                    <input type="hidden"
                                                           value="{{\Illuminate\Support\Facades\Auth::user()->id}}"
                                                           name="cart_id">
                                                </div>
                                                <button class="btn btn-danger pull-right"><i
                                                        class="icon-shopping-cart"></i> اضافه به سبد خرید
                                                </button>
                                            </form>
                                        @else
                                            <button class="btn btn-danger pull-right">ابتدا ثبت نام کنید</button>
                                        @endif


                                    </div>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <h4 class="title">{{$product->price}}تومان</h4>
                                <h5 class="no-margin">{{$product->name}}</h5>
                            </div>
                            <p class="desc">{{mb_substr(strip_tags($product->description),0,50,'UTF8').'...'}}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


@endsection

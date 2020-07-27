@extends('Admin.layouts.master')
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
                            <img src="{{asset('images/'.$product->image)}}" alt="" width="400" height="400"
                                 id="mainPreviewImg"/>
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
                        <div class="container">

                        <textarea readonly cols="130" rows="20" >{{$product->description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@extends('layouts.master')

@section('content')
    <body class="">
    <div class="master-wrapper">

        <div class="darker-stripe">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.html">وبمارکت</a>
                            </li>
                            <li><span class="icon-chevron-right"></span></li>
                            <li>
                                <a href="contact.html">ارتباط با ما</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="push-up top-equal blocks-spacer-last">
                <div class="row">

                    <!--  ==========  -->
                    <!--  = Main Title =  -->
                    <!--  ==========  -->

                    <div class="span12">
                        <div class="title-area">
                            <h1 class="inline"><span class="light">با ما</span> ارتباط برقرار کنید.</h1>
                        </div>
                    </div>

                    <!--  ==========  -->
                    <!--  = Main content =  -->
                    <!--  ==========  -->
                    <section class="span8 single single-page">

                        <!--  ==========  -->
                        <!--  = Post =  -->
                        <!--  ==========  -->

                        <hr/>

                        <!--  ==========  -->
                        <!--  = Contact Form =  -->
                        <!--  ==========  -->
                        @foreach($setting as $sett)
                        <section class="contact-form-container">
                            <h3 class="push-down-25"><span class="light">ارسال</span> پیام</h3>
                            <a href="mailto:{{$sett->email}}">
                            <button class="btn btn-primary bold" type="submit" tabindex="5" id="submit">
                                برای ارسال ایمیل به وب مارکت کلیک کنید
                            </button>
                            </a>
                        </section>

                        <hr/>

                        <!--  ==========  -->
                        <!--  = Company Info with Google Maps =  -->
                        <!--  ==========  -->
                        <article class="company-info">
                            <div class="row">
                                <div class="span3">
                                    <h3 class="push-down-30"><span class="light">اطلاعات</span> شرکت</h3>

                                    <p>
                                        <strong class="opensans dark-clr">شرکت خیالی با مسئولیت محدود</strong>
                                        <br/>
                                        {{$sett->address}}
                                    </p>

                                    <p>
                                        <strong class="opensans dark-clr">شماره تماس :</strong> {{$sett->phone}}
                                        <br/>
                                        <strong class="opensans dark-clr">فکس:</strong> {{$sett->fax}}
                                        <br/>
                                        <strong class="opensans dark-clr">ایمیل:</strong>
                                            {{$sett->email}}
                                    </p>
                                </div>
                                <div class="span5">
                                    <div class="add-googlemap" data-height="205" data-addr="Prešernov Trg, Ljubljana"
                                         data-title="Webmarket Business" data-zoom="14" data-type="roadmap"></div>
                                </div>
                            </div>

                        </article>

                    </section>

                </div>
            </div>
        </div>
    @endforeach
    @endsection


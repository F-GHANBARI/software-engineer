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
                                <a href="{{route('home')}}">Webmarket</a>
                            </li>
                            <li><span class="icon-chevron-right"></span></li>
                            <li>
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @foreach($setting as $sett)
        <div class="container">
            <div class="push-up blocks-spacer">
                <div class="row">

                    <!--  ==========  -->


                    <!--  ==========  -->
                    <!--  = Main content =  -->
                    <!--  ==========  -->
                    <section class="span9">

                        <!--  ==========  -->
                        <!--  = Title =  -->
                        <!--  ==========  -->
                        <div class="underlined push-down-20">
                            <h3><span style="color: red;">مزایای فروشگاه اینترنتی وب مارکت</span></h3>
                        </div> <!-- /title -->

                        <!--  ==========  -->
                        <!--  = Description=  -->
                        <!--  ==========  -->
                        <section class="blocks-spacer">
                            <h5><span>10روز </span>گارانتی خرید</h5>
                            <p>{{$sett->Buy_10_days_warranty}}</p>

                            <h5><span class="light">تضمین  </span>بهترین قیمت</h5>
                            <p>{{$sett->Best_price_guarantee}}</p>

                            <h5><span class="light">  چترحمایتی </span>وب مارکت</h5>
                            <p>{{$sett->Web_Market_Umbrella}}</p>


                            <h5><span class="light">  تحویل فوری </span>در 3 ساعت</h5>
                            <p>{{$sett->Immediate_delivery_in_3_hours}}</p>

                        </section>


                    </section> <!-- /main content -->

                    <section class="span9">

                        <!--  ==========  -->
                        <!--  = Title =  -->
                        <!--  ==========  -->
                        <div class="underlined push-down-20">
                            <h3><span style="color: red;">وب مارکت انتخاب اول</span></h3>
                        </div> <!-- /title -->

                        <!--  ==========  -->
                        <!--  = Description=  -->
                        <!--  ==========  -->
                        <section class="blocks-spacer">
                            <h5><span class="light">دلایل </span>اعتماد همگان به وب مارکت</h5>
                            <p>{{$sett->Reasons_to_trust_everyone_to_the_webmarket}}</p>


                            <h5><span class="light">بهره وری بالا  </span>امکان ارایه بهترین قیمت</h5>
                            <p>{{$sett->High_productivity_makes_it_possible_to_offer_the_best_price}}</p>


                            <h5><span class="light">  مزیت های وب مارکت </span>نسبت به سایرین </h5>
                            <p>{{$sett->The_advantages_of_the_webmarket_over_others}}</p>


                            <h5><span class="light">  پرسش های </span>متداول</h5>
                            <p>{{$sett->common_questions}}</p>

                        </section>


                    </section> <!-- /main content -->


                    <section class="span9">

                        <!--  ==========  -->
                        <!--  = Title =  -->
                        <!--  ==========  -->
                        <div class="underlined push-down-20">
                            <h3><span style="color: red;">ثبت سفارش,پرداخت,ارسال</span></h3>
                        </div> <!-- /title -->

                        <!--  ==========  -->
                        <!--  = Description=  -->
                        <!--  ==========  -->
                        <section class="blocks-spacer">
                            <h5><span class="light">مراحل </span>ثبت سفارش و خرید</h5>
                            <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود
                                شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی
                                سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط
                                سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای
                                خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را
                                شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم
                                است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید،
                                تنها لازمه آن بود. </p>

                            <h5><span class="light">روش های   </span>پرداخت</h5>
                            <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود
                                شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی
                                سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط
                                سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای
                                خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را
                                شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم
                                است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید،
                                تنها لازمه آن بود. </p>

                            <h5><span class="light">  روش ها </span>هزینه و مدت زمان ارسال </h5>
                            <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود
                                شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی
                                سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط
                                سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای
                                خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را
                                شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم
                                است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید،
                                تنها لازمه آن بود. </p>

                            <h5><span class="light">  نکات مهم </span>در هنگام تحئیل سفارش</h5>
                            <p>لورم اپیسوم لورم اپیسوم لورم اپیسوم لورم اپیسوم لورم اپیسوم لورم اپیسوم لورم اپیسوم لورم
                                اپیسوم لورم اپیسوم لورم اپیسوم لورم اپیسوم لورم اپیسوم </p>
                        </section>


                    </section> <!-- /main content -->


                    <section class="span9">

                        <!--  ==========  -->
                        <!--  = Title =  -->
                        <!--  ==========  -->
                        <div class="underlined push-down-20">
                            <h3><span style="color: red;">درباره وب مارکت</span></h3>
                        </div> <!-- /title -->

                        <!--  ==========  -->
                        <!--  = Description=  -->
                        <!--  ==========  -->
                        <section class="blocks-spacer">
                            <h5><span class="light">آشنایی </span>با وب مارکت</h5>
                            <p>{{$sett->Get_acquainted_with_the_webmarket}}</p>


                            <h5><span class="light">قوانین  </span>وب مارکت</h5>
                            <p>{{$sett->Web_Market_Rules}}</p>


                            <h5><span class="light">  عرضه </span>محصولات در وب مارکت </h5>
                            <p>{{$sett->Supply_of_products_in_the_webmarket}}</p>


                            <h5><span class="light">  بیمه </span>تکمیلی وب مارکت</h5>
                            <p>{{$sett->WebMarket_Supplemental_Insurance}}</p>

                        </section>


                    </section> <!-- /main content -->

                </div>
            </div>
        </div> <!-- /container -->
    @endforeach
@endsection








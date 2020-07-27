<!--  ==========  -->
<!--  = Footer =  -->
<!--  ==========  -->
<footer>
    @foreach($setting as $sett)
    <div class="foot-light">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <h2 class="pacifico">Webmarket &nbsp; <img src="/Front/images/webmarket.png" alt="Webmarket Cart" class="align-baseline" /></h2>
                    <p>{{$sett->footer_text}}</p>
                </div>


                <div class="span4">
                    <div class="main-titles lined">
                        <div class="top-right">
                            <div class="icons">
                                <a href="{{$sett->facebook}}"><span class="zocial-facebook"></span></a>
                                <a href="{{$sett->skype}}"><span class="zocial-skype"></span></a>
                                <a href="{{$sett->twitter}}"><span class="zocial-twitter"></span></a>
                                <a href="{{$sett->instagram}}"><span class="zocial-instagram"></span></a>
                            </div>
                        </div>

                    </div>
                    <div class="bordered">
                        <div class="fill-iframe">
                            <h3>راه های ارتباطی با وب مارکت</h3>
                        </div>
                    </div>
                </div>


                <div class="span4">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">عضویت</span> در خبرنامه</h3>
                    </div>
                    <p>برای اطلاع از جدیدترین اخبار وب مارکت ایمیل خود را ثبت کنید</p>
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="#" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="" novalidate>
                            <div class="mc-field-group">
                                <input type="email" value="" placeholder="آدرس ایمیلتان را وارد کنید" name="EMAIL" class="required email" id="mce-EMAIL">
                                <input type="submit" value="ارسال" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>

                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </div>
    </div> <!-- /upper footer -->

    <!--  ==========  -->
    <!--  = Middle footer =  -->
    <!--  ==========  -->
    <div class="foot-dark">
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Menu 1 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">مزایای فروشگاه اینترنتی وب مارکت</span></h3>
                    </div>
                    <ul class="nav bold">
                        <li><a href="{{route('about')}}">10 روز گارانتی خرید</a></li>
                        <li><a href="{{route('about')}}">تضمین بهترین قیمت</a></li>
                        <li><a href="{{route('about')}}">چترحمایتی وب مارکت</a></li>
                        <li><a href="{{route('about')}}">تحویل فوری در 3 ساعت</a></li>
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 2 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">وب مارکت انتخاب اول</span></h3>
                    </div>
                    <ul class="nav">
                        <li><a href="{{route('about')}}">دلایل اعتماد همگان به وب مارکت</a></li>
                        <li><a href="{{route('about')}}">بهره بری بالا,امکان ارایه بهترین قیمت ها</a></li>
                        <li><a href="{{route('about')}}">مزیت های وب مارکت نسبت یه سایرین</a></li>
                        <li><a href="{{route('about')}}">پرسش های متداول</a></li>
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 3 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">ثبت سفارش,پرداخت,ارسال</span></h3>
                    </div>
                    <ul class="nav">
                        <li><a href="{{route('about')}}">مراحل ثبت سفارش و خرید</a></li>
                        <li><a href="{{route('about')}}">روش های پرداخت</a></li>
                        <li><a href="{{route('about')}}">روش ها,هزینه و مدت زمان ارسال</a></li>
                        <li><a href="{{route('about')}}">نکات مهم در هنگام تحویل سفارش</a></li>
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 4 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">درباره وب مارکت</span></h3>
                    </div>
                    <ul class="nav">
                        <li><a href="{{route('about')}}">آشنایی با وب مارکت</a></li>
                        <li><a href="{{route('about')}}">قوانین وب مارکت</a></li>
                        <li><a href="{{route('about')}}">عرضه محصولات در وب مارکت</a></li>
                        <li><a href="{{route('about')}}">بیمه تکمیلی وب مارکت</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div> <!-- /middle footer -->

    <!--  ==========  -->
    <!--  = Bottom Footer =  -->
    <!--  ==========  -->
    <div class="foot-last">
        <a href="#" id="toTheTop">
            <span class="icon-chevron-up"></span>
        </a>
        <div class="container">
            <div class="row">
                <div class="span6">
                    Copyright © 2020.webmarketir. All Rights Reserved
                </div>

            </div>
        </div>
    </div> <!-- /bottom footer -->
    @endforeach
</footer> <!-- /footer -->



<!--  ==========  -->
<!--  = Modal Windows =  -->
<!--  ==========  -->

<!--  = Login =  -->
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="loginModalLabel"><span class="light">ورود</span> در وبمارکت</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="{{route('login')}}">
            @csrf
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="phone">شماره تلفن</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="phone" placeholder="شماره تلفن..." name="phone">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPassword">رمز عبور</label>
                <div class="controls">
                    <input type="password" class="input-block-level" id="inputPassword" placeholder="رمزعبور..." name="password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox">
                        مرا به خاطر بسپار
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary input-block-level bold higher">
                ورود
            </button>
        </form>
    </div>
</div>

<!--  = Register =  -->
<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="registerModalLabel"><span class="light">ثبت نام</span> در وبمارکت</h3>
    </div>
    <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن') }}</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required >

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس') }}</label>

                <div class="col-md-6">
                    <textarea id="address"  class="form-control @error('address') is-invalid @enderror" name="address" required  autofocus></textarea>

                    @error('address')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>







            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>



            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('ثبت نام') }}
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>





<!--  ==========  -->
<!--  = JavaScript =  -->
<!--  ==========  -->

<!--  = FB =  -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<!--  = jQuery - CDN with local fallback =  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="/Front/js/jquery.min.js"><\/script>');
    }
</script>

<!--  = _ =  -->
<script src="/Front/js/underscore/underscore-min.js" type="text/javascript"></script>

<!--  = Bootstrap =  -->
<script src="/Front/js/bootstrap.min.js" type="text/javascript"></script>

<!--  = Slider Revolution =  -->
<script src="/Front/js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="/Front/js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<!--  = CarouFredSel =  -->
<script src="/Front/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

<!--  = jQuery UI =  -->
<script src="/Front/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/Front/js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

<!--  = Isotope =  -->
<script src="/Front/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

<!--  = Tour =  -->
<script src="/Front/js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<!--  = PrettyPhoto =  -->
<script src="/Front/js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

<!--  = Google Maps API =  -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/Front/js/goMap/js/jquery.gomap-1.3.2.min.js"></script>

<!--  = Custom JS =  -->
<script src="/Front/js/custom.js" type="text/javascript"></script>

{{--cart js--}}
<script src="/Front/cart/js/jquery-3.1.1.min.js"></script>
<script src="/Front/cart/js/jquery-ui.min.js"></script>
<script  src="/Front/cart/js/scripts.js"></script>
</body>
</html>

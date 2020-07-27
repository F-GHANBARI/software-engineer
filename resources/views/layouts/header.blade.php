<!DOCTYPE html>
<!--[if lt IE 8]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Webmarket HTML Template - Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

    {{--    cart style--}}
    <link type="text/css" href="/Front/cart/css/style.css" rel="stylesheet"/>

    <!-- Twitter Bootstrap -->
    <link href="/Front/stylesheets/bootstrap.css" rel="stylesheet">
    <link href="/Front/stylesheets/responsive.css" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="/Front/js/rs-plugin/css/settings.css" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="/Front/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css"
          type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="/Front/js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
    <!-- main styles -->

    <link href="/Front/stylesheets/main.css" rel="stylesheet">


    <!-- Modernizr -->
    <script src="/Front/js/modernizr.custom.56918.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Front/images/apple-touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Front/images/apple-touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Front/images/apple-touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="/Front/images/apple-touch/57.png">
    <link rel="shortcut icon" href="/Front/images/apple-touch/57.png">
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>


<body>

<div class="master-wrapper">

    <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <header id="header">
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Logo =  -->
                <!--  ==========  -->
                <div class="span7">
                    <a class="brand" href="{{route('home')}}">
                        <img src="/Front/images/logo.png" alt="Webmarket Logo" width="48" height="48"/>
                        <span class="pacifico">Webmarket</span>
                        <span class="tagline">قدرتمند ترین فروشگاه اینترنتی</span>
                    </a>
                </div>

                <!--  ==========  -->
                <!--  = Social Icons =  -->
                <!--  ==========  -->
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="span5">
                        <div class="topmost-line">
                        <div class="dropdown">
                            <button class="dropbtn">{{\Illuminate\Support\Facades\Auth::user()->name}}</button>
                            <div class="dropdown-content">
                                <a href="{{route('user.edit.front',Auth::id())}}">مشاهده پروفایل</a>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button class="btn btn-danger">خروج</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @else
            <div class="span5">
                <div class="topmost-line">
                    <div class="register">
                        <a href="#loginModal" role="button" data-toggle="modal">
                            <button class="btn btn-primary">ورود</button>
                        </a> <b class="text-bold">یا</b>
                        <a href="#registerModal" role="button" data-toggle="modal">
                            <button class="btn btn-primary">ثبت نام</button>
                        </a>
                    </div>
                </div>
            </div>
            @endif

            <!-- /social icons -->
            </div>
        </div>
    </header>
</div>

<!--  ==========  -->
<!--  = Main Menu / navbar =  -->
<!--  ==========  -->
<div class="navbar navbar-static-top" id="stickyNavbar">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!--  ==========  -->
                    <!--  = Menu =  -->
                    <!--  ==========  -->
                    <div class="nav-collapse collapse">
                        <ul class="nav" id="mainNavigation">
                            <li class="dropdown active">
                                <a href="{{route('home')}}" class="dropdown-toggle"> خانه </a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"> دسته بندی </a>
                            </li>
                            <li><a href="{{route('about')}}">درباره ما</a></li>
                            <li><a href="{{route('contact')}}">تماس با ما</a></li>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                @if(\Illuminate\Support\Facades\Auth::user()->type=='1')
                                    <li><a href="{{route('Admin.index')}}">صفحه ادمین</a></li>
                                @endif
                            @endif
                        </ul>

                        <!--  ==========  -->
                        <!--  = Search form =  -->
                        <!--  ==========  -->
                        <form class="navbar-form pull-right" action="{{route('search')}}" method="get">
                            <button type="submit"><span class="icon-search"></span></button>
                            <input type="text" class="span1" name="keyword" id="navSearchInput" title="">
                        </form>


                    </div><!-- /.nav-collapse -->
                </div>

                <!--  ==========  -->
                <!--  = Cart =  -->
                <!--  ==========  -->
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="span3">
                        <div class="cart-container" id="cartContainer">
                            <div class="cart">
                                <p class="items">سبد خرید</p>
                                <a href="{{route('cart.show',Auth::id())}}"
                                   class="btn btn-danger">
                                    <!-- <span class="icon icons-cart"></span> -->
                                    <i class="icon-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- /cart -->
                @else
                    <div class="span3">
                        <div class="cart-container" id="cartContainer">
                            <div class="cart">
                                <p class="items">ابتدا ثبت نام کنید</p>
                                <!-- <span class="icon icons-cart"></span> -->
                                <button class="btn btn-danger">
                                    <i class="icon-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div> <!-- /cart -->

                @endif


            </div>
        </div>
    </div>
</div> <!-- /main menu -->


<!--  ==========  -->
<!--  = Slider Revolution =  -->
<!--  ==========  -->
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <ul>
            <li data-transition="premium-random" data-slotamount="3">
                <img src="/Front/images/dummy/slides/1/slide.jpg" alt="slider img" width="1400" height="377"/>

                <!-- baloons -->
                <div class="caption lft ltt"
                     data-x="570"
                     data-y="50"
                     data-speed="4000"
                     data-start="1000"
                     data-easing="easeOutElastic">
                    <img src="/Front/images/dummy/slides/1/baloon1.png" alt="baloon" width="135" height="186"/>
                </div>

                <div class="caption lft ltt"
                     data-x="770"
                     data-y="60"
                     data-speed="4000"
                     data-start="1200"
                     data-easing="easeOutElastic">
                    <img src="/Front/images/dummy/slides/1/baloon3.png" alt="baloon" width="40" height="55"/>
                </div>

                <div class="caption lft ltt"
                     data-x="870"
                     data-y="80"
                     data-speed="4000"
                     data-start="1500"
                     data-easing="easeOutElastic">
                    <img src="/Front/images/dummy/slides/1/baloon2.png" alt="baloon" width="60" height="83"/>
                </div>

                <!-- texts -->
                <div class="caption lfl big_theme"
                     data-x="120"
                     data-y="120"
                     data-speed="1000"
                     data-start="500"
                     data-easing="easeInOutBack">
                    با وبمارکت، هیچ محدودیتی ندارید
                </div>

                <div class="caption lfl small_theme"
                     data-x="120"
                     data-y="190"
                     data-speed="1000"
                     data-start="700"
                     data-easing="easeInOutBack">
                    با امکانات قالب HTML وبمارکت آشنا شوید
                </div>

                <a href="features.html" class="caption lfl btn btn-primary btn_theme"
                   data-x="120"
                   data-y="260"
                   data-speed="1000"
                   data-start="900"
                   data-easing="easeInOutBack">
                    تمامی امکانات قالب
                </a>
            </li><!-- /slide -->

            <li data-transition="premium-random" data-slotamount="3">
                <img src="/Front/images/dummy/slides/2/slide.jpg" alt="slider img" width="1400" height="377"/>

                <!-- woman -->
                <div class="caption lfb ltb"
                     data-x="800"
                     data-y="50"
                     data-speed="1000"
                     data-start="1000"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/2/woman.png" alt="woman" width="361" height="374"/>
                </div>

                <!-- plane -->
                <div class="caption lfl str"
                     data-x="400"
                     data-y="20"
                     data-speed="10000"
                     data-start="1000"
                     data-easing="linear">
                    <img src="/Front/images/dummy/slides/2/plane.png" alt="aircraft" width="117" height="28"/>
                </div>

                <!-- texts -->
                <div class="caption lfl big_theme"
                     data-x="120"
                     data-y="120"
                     data-speed="1000"
                     data-start="500"
                     data-easing="easeInOutBack">
                    Slider Revolution
                </div>

                <div class="caption lfl small_theme"
                     data-x="120"
                     data-y="190"
                     data-speed="1000"
                     data-start="700"
                     data-easing="easeInOutBack">
                    این اسلایدر پریمیوم، به عنوان یک هدیه، به صورت رایگان به شما عرضه میشود!
                </div>

                <a href="features.html" class="caption lfl btn btn-primary btn_theme"
                   data-x="120"
                   data-y="260"
                   data-speed="1000"
                   data-start="900"
                   data-easing="easeInOutBack">
                    و خیلی چیز های دیگر
                </a>
            </li><!-- /slide -->

            <li data-transition="premium-random" data-slotamount="3">
                <img src="/Front/images/dummy/slides/3/slide.jpg" alt="slider img" width="1400" height="377"/>

                <!-- phone -->
                <div class="caption sfr fadeout"
                     data-x="950"
                     data-y="77"
                     data-speed="1000"
                     data-start="2500"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/3/phone.png" alt="phone in a hand" width="495" height="377"/>
                </div>

                <!-- texts -->
                <div class="caption lfl big_theme"
                     data-x="120"
                     data-y="120"
                     data-speed="1000"
                     data-start="500"
                     data-easing="easeInOutBack">
                    با طراحی مناسب برای موبایل
                </div>

                <div class="caption lfl small_theme"
                     data-x="120"
                     data-y="190"
                     data-speed="1000"
                     data-start="700"
                     data-easing="easeInOutBack">
                    پنجره مرورگر خود را تغییر سایز دهید، خواهید دید که وبمارکت روی هر رزولوشنی به خوبی کار میکند.
                </div>

                <a href="icons.html" class="caption lfl btn btn-primary btn_theme"
                   data-x="120"
                   data-y="260"
                   data-speed="1000"
                   data-start="900"
                   data-easing="easeInOutBack">
                    در ضمن آیکن های آن هم مناسب رتینا هستند ...
                </a>
            </li><!-- /slide -->

            <li data-transition="premium-random" data-slotamount="3">
                <img src="/Front/images/dummy/slides/4/slide.jpg" alt="slider img" width="1400" height="377"/>

                <!-- faces -->
                <div class="caption lft ltt"
                     data-x="-150"
                     data-y="0"
                     data-speed="300"
                     data-start="2000"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/4/person1.png" alt="satisfied customer" width="108"
                         height="204"/>
                </div>
                <div class="caption lft ltt"
                     data-x="0"
                     data-y="0"
                     data-speed="300"
                     data-start="2200"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/4/person2.png" alt="satisfied customer" width="108"
                         height="321"/>
                </div>
                <div class="caption lft ltt"
                     data-x="500"
                     data-y="0"
                     data-speed="300"
                     data-start="2400"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/4/person3.png" alt="satisfied customer" width="108"
                         height="139"/>
                </div>
                <div class="caption lft ltt"
                     data-x="720"
                     data-y="0"
                     data-speed="300"
                     data-start="2600"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/4/person4.png" alt="satisfied customer" width="108"
                         height="191"/>
                </div>
                <div class="caption lft ltt"
                     data-x="940"
                     data-y="0"
                     data-speed="300"
                     data-start="2800"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/4/person5.png" alt="satisfied customer" width="108"
                         height="139"/>
                </div>
                <div class="caption lft ltt"
                     data-x="1200"
                     data-y="0"
                     data-speed="300"
                     data-start="3000"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/4/person6.png" alt="satisfied customer" width="108"
                         height="179"/>
                </div>
                <div class="caption lft ltt"
                     data-x="1350"
                     data-y="0"
                     data-speed="300"
                     data-start="3200"
                     data-easing="easeInOutCubic">
                    <img src="/Front/images/dummy/slides/4/person7.png" alt="satisfied customer" width="108"
                         height="133"/>
                </div>

                <!-- texts -->
                <div class="caption lfl big_theme"
                     data-x="120"
                     data-y="140"
                     data-speed="1000"
                     data-start="500"
                     data-easing="easeInOutBack">
                    بیش از 1000 مشتری خوشنود
                </div>

                <div class="caption lfl small_theme"
                     data-x="120"
                     data-y="210"
                     data-speed="1000"
                     data-start="700"
                     data-easing="easeInOutBack">
                    پروفایل ما را ببینید در <a href="http://themeforest.net/user/ProteusThemes" target="_blank">ThemeForest</a>!
                </div>

                <a href="http://proteusthemes.ticksy.com/" class="caption lfl btn btn-primary btn_theme"
                   data-x="120"
                   data-y="280"
                   data-speed="1000"
                   data-start="900"
                   data-easing="easeInOutBack">
                    به خوبی شما را پشتیبانی میکنیم
                </a>
            </li><!-- /slide -->
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
    <!--  ==========  -->
    <!--  = Nav Arrows =  -->
    <!--  ==========  -->
    <div id="sliderRevLeft"><i class="icon-chevron-left"></i></div>
    <div id="sliderRevRight"><i class="icon-chevron-right"></i></div>
</div> <!-- /slider revolution -->

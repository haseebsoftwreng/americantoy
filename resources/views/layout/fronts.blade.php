<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preview.colorlib.com/theme/cozastore/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 13:05:17 GMT -->

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=""> --}}
    {{-- <link rel="icon" type="image/png" href="{{asset('front/images/icons/logo-02.ico')}}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('front/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/MagnificPopup/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/main.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('user/datatable/jquery.dataTables.css')}}">
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '322520159238034');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=322520159238034&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

    <style>
        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);

            z-index: 1000;
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 10px;
            transition: all 0.4s ease;
            color: white;
            font-size: 15px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .inctagram {
            background: #55ACEE;
            color: white;
        }

        .google {
            background: #dd4b39;
            color: white;
        }

        .phone {
            background: #3B5998;
            color: white;
        }

        .message {
            background: #bb0000;
            color: white;
        }

        .whatsapp {
            background: #52d62a;
            color: white;
        }
    </style>
    @yield('styles')
</head>

<body class="animsition">
    <div class="icon-bar">
        <a href="tel:+61-432-455-507" class="phone"><i class="fa fa-phone"></i></i></a>

        <a href="https://api.whatsapp.com/send?phone=+61432455507&text=Hi, AustralianCarts Support " class="whatsapp"><i
                class="fa fa-whatsapp"></i></i></a>

    </div>
    @include('sweet::alert')
    <header class="header-v4">
        <div class="container-menu-desktop">
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        <span>Free delivery</span>
                        <!-- <img src="{{asset('front/images/icons/free.png')}}" alt="">  -->
                    </div>
                    <div class="right-top-bar flex-w h-full">
                        {{-- <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Help & FAQs
                        </a> --}}
                        <a href="{{route('user.order.create')}}" class="flex-c-m trans-04 p-lr-25">
                            My Account
                        </a>
                        {{-- <a href="#" class="flex-c-m trans-04 p-lr-25">
                            EN
                        </a> --}}
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            USD
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('front/images/icons/logo-01.png')}}"
                            alt="Australian Cart | Free Home Delivery">
                    </a>
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="{{ Request::is('/')? 'active-menu': ' ' }}">

                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="{{ Request::is('shop')? 'active-menu': ' ' }}">
                                <a href="{{route('front.shop.index')}}">Shop</a>
                            </li>
                            <!-- <li class="label1" data-label1="hot">
                                <a href="shoping-cart.html">Features</a>
                            </li> -->
                            <!-- <li>
                                <a href="blog.html">Blog</a>
                            </li> -->
                            <li class="{{ Request::is('about')? 'active-menu': ' ' }}">
                                <a href="{{url('about')}}">About</a>
                            </li>
                            <li class="{{ Request::is('contact')? 'active-menu': ' ' }}">
                                <a href="{{url('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                        <a href="{{route('front.cart')}}">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart cartvalue"
                                data-notify="{{Session::has('cart')?Session::get('cart')['qty']:0}}">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        </a>
                        <a href="{{route('front.wish-products.index')}}"
                            class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti wishvalue"
                            data-notify="{{countwish()}}">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="wrap-header-mobile">
            <div class="logo-mobile">
                <a href="{{route('home')}}"><img src="{{asset('front/images/icons/logo-01.png')}}"
                        alt="Australian Cart | Free Home Delivery"></a>
            </div>
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>
                <a href="{{route('front.cart')}}">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart cartvalue"
                        data-notify="{{Session::has('cart')?Session::get('cart')['qty']:0}}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </a>
                <a href="{{route('front.wish-products.index')}}"
                    class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti wishvalue"
                    data-notify="{{countwish()}}">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free Delivery
                    </div>
                </li>
                <li>
                    <div class="right-top-bar flex-w h-full">
                        {{-- <a href="#" class="flex-c-m p-lr-10 trans-04">
                            Help & FAQs
                        </a> --}}
                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            My Account
                            {{-- </a>
                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            EN
                        </a> --}}
                            <a href="#" class="flex-c-m p-lr-10 trans-04">
                                PKR
                            </a>
                    </div>
                </li>
            </ul>
            <ul class="main-menu-m">
                <li>
                    <a href="{{route('home')}}">Home</a>

                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>
                <li>
                    <a href="{{route('front.shop.index')}}">Shop</a>
                </li>
                <!-- <li>
                    <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                </li> -->
                <!-- <li>
                    <a href="blog.html">Blog</a>
                </li> -->
                <li>
                    <a href="{{url('about')}}">About</a>
                </li>
                <li>
                    <a href="{{url('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="front/images/icons/icon-close2.png" alt="CLOSE">
                </button>
                <form class="wrap-search-header flex-w p-l-15" action="{{ route('front.product.search') }}" method="POST">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="keyword" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>
    {{-- <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>
        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>
                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    @php
                        $products = App\Helpers\Cart::products();
                        if(Session::has('cart')){
                            $amount = Session::get('cart')['amount'];
                        }
                    @endphp
                    @if ($products)
                    @foreach ($products as $product)
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{asset($product->images->first()->path)}}" alt="IMG">
    </div>
    <div class="header-cart-item-txt p-t-8">
        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
            {{$product->name}}
        </a>
        <span class="header-cart-item-info">
            {{$product['qty']}} x {{$product->price}}
        </span>
    </div>
    </li>
    @endforeach

    @else
    <h3>Your Cart is Empty</h3>
    @endif


    </ul>
    <div class="w-full">
        @if (Session::has('cart'))
        <div class="header-cart-total w-full p-tb-40">
            Total: PKR-{{$amount}}
        </div>
        @endif

        <div class="header-cart-buttons flex-w w-full">
            <a href="{{route('front.cart')}}"
                class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                View Cart
            </a>
            <a href="{{route('front.checkout')}}"
                class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                Check Out
            </a>
        </div>
    </div>
    </div>
    </div>
    </div> --}}

    @yield('content')
    {{-- <div class="sticky">
        <div class="btn-group-vertical float-right">
            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16 pt-2 ">
                <i class="fa fa-facebook "></i>
            </a>
            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16 pt-2 ">
                <i class="fa fa-whatsapp"></i>
            </a>
            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16 pt-2 ">
                <i class="fa fa-instagram"></i>
                <i class="fa fa-instagram"></i>
            </a>

        </div>
    </div> --}}
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>
                    <ul>

                        <li>      
                            <a href="{{route('front.shop.index')}}"><button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=""> 
                                Accessories
                               
                            </button></a>
                        </li>
                        <li>      
                            <a href="{{route('front.shop.index')}}"><button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=""> 
                                Car gadgets
                              
                            </button></a>
                        </li>
                        <li>      
                            <a href="{{route('front.shop.index')}}"><button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=""> 
                             
                                Kitchen Gadgets
                              
                            </button></a>
                        </li>
                        <li>      
                            <a href="{{route('front.shop.index')}}"><button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=""> 
                             
                                Decorations
                            </button></a>
                        </li>
                        <li>      
                            <a href="{{route('front.shop.index')}}"><button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=""> 
                             
                                Tool's
                            </button></a>
                        </li>
                                
                      
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>
                    <ul>

                        <li class="p-b-10">
                            <a href="{{ route('front.polices') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                Returns & Shipping
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>
                    <p class="stext-107 cl7 size-201">
                        Dellwood Street Bankstown New Sourh Wales Australia <br> (+61) 432 455 507
                    </p>
                    <div class="p-t-27">
                        <a href="https://www.facebook.com/Australiancarts" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/australiancarts/" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>
                        {{-- <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a> --}}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form action="{{route('front.orderstatus')}}" method="POST">
                        <div class="wrap-input1 w-full">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="number" name="code"
                                placeholder="Enter Order Code" required>
                            <div class="focus-input1 trans-04"></div>
                        </div>
                        <div class="p-t-10">
                            <button type="submit" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Track Order
                            </button>
                        </div>
                    </form>

                    <form>
                        <div class="wrap-input1 w-full p-b-4 p-t-10">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>
                        <div class="p-t-10">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="p-t-40">
                {{-- <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="{{asset('front/images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
                </a>
                <a href="#" class="m-all-1">
                    <img src="{{asset('front/images/icons/icon-pay-02.png')}}" alt="ICON-PAY">
                </a>
                <a href="#" class="m-all-1">
                    <img src="{{asset('front/images/icons/icon-pay-03.png')}}" alt="ICON-PAY">
                </a>
                <a href="#" class="m-all-1">
                    <img src="{{asset('front/images/icons/icon-pay-04.png')}}" alt="ICON-PAY">
                </a>
                <a href="#" class="m-all-1">
                    <img src="{{asset('front/images/icons/icon-pay-05.png')}}" alt="ICON-PAY">
                </a>
            </div> --}}
            <p class="stext-107 cl6 txt-center">
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> Australian Cart</a>
            </p>
        </div>
        </div>
    </footer>
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>
    {{-- <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="front/images/icons/icon-close.png" alt="CLOSE">
                </button>
                <div class="row">
                    <div class="col-md-6 col-lg-7 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb" id="crousel_slider">
                                    <div class="item-slick3" data-thumb="front/images/product-detail-01.jpg" >
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="front/images/product-detail-01.jpg" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="front/images/product-detail-01.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick3" data-thumb="front/images/product-detail-02.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="front/images/product-detail-02.jpg" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="front/images/product-detail-02.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick3" data-thumb="front/images/product-detail-03.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="front/images/product-detail-03.jpg" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="front/images/product-detail-03.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 id="p_name" class="mtext-105 cl2 js-name-detail p-b-14">
                                
                            </h4>
                            <span class="mtext-106 cl2" id="p_price">
                                
                            </span>
                            <p class="stext-102 cl3 p-t-23" id="p_des">
                                
                            </p>
                            <div class="p-t-33">
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Size
                                    </div>
                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
                                                <option>Choose an option</option>
                                                <option>Size S</option>
                                                <option>Size M</option>
                                                <option>Size L</option>
                                                <option>Size XL</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Color
                                    </div>
                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
                                                <option>Choose an option</option>
                                                <option>Red</option>
                                                <option>Blue</option>
                                                <option>White</option>
                                                <option>Grey</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-204 flex-w flex-m respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m btnDown">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
                                            <input id="sst" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m btnUp">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail cart b_pid">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                <div class="flex-m bor9 p-r-10 m-r-11">
                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                </div>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="{{asset('front/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('front/vendor/animsition/js/animsition.min.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(".js-select2").each(function() {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
    </script>
    <script src="{{asset('front/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('front/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('front/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('front/js/slick-custom.js')}}"></script>
    <script src="{{asset('front/vendor/parallax100/parallax100.js')}}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <script src="{{asset('front/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });
    </script>
    <script src="{{asset('front/vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function() {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        
        $(this).on('click', function() {
            number = $('.wishvalue').attr('data-notify');
            id = this.id;
            // alert(id);
            $.ajax({
					url : "{{url('wish/add')}}",
					type : "POST",
					data : {
						id : id
					},
					success:function(response){
                        //  console.log(response);

                         if(response == 'false'){
                           window.location.href="{{route('front.login')}}"
                         }
                         else if(response == 'true'){
                           
                            value = parseInt(number)+1;
                            $('.wishvalue').attr('data-notify',value);
                            swal(nameProduct, "is added to wishlist !", "success");

                           
                         }else{
                            number = $('.wishvalue').attr('data-notify');
                            value = parseInt(number)-1;
                            $('.wishvalue').attr('data-notify',value);
                            $('.pc'+id).remove();
                            swal(nameProduct, "is removed from wishlist !", "success");
                            
                         }
                        
					}
				});
           

             $(this).toggleClass('js-addedwish-b2');
            // $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function() {
            number = $('.wishvalue').attr('data-notify');
            id = this.id;
            alert(id);
            $.ajax({
					url : "{{url('wish/add')}}",
					type : "POST",
					data : {
						id : id
					},
					success:function(response){
                        //  console.log(response);

                         if(response == 'false'){
                           window.location.href="{{route('front.login')}}"
                         }
                         else if(response == 'true'){
                           
                            value = parseInt(number)+1;
                            $('.wishvalue').attr('data-notify',value);
                            swal(nameProduct, "is added to wishlist !", "success");

                           
                         }else{
                            number = $('.wishvalue').attr('data-notify');
                            value = parseInt(number)-1;
                            $('.wishvalue').attr('data-notify',value);
                            $('.pc'+id).remove();
                            swal(nameProduct, "is removed from wishlist !", "success");
                            
                         }
                        
					}
				});
            $(this).toggleClass('js-addedwish-detail');

        });
    });

    /*---------------------------------------------*/

    
    </script>
    <script src="{{asset('front/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
        $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });
    </script>
    <script src="{{asset('front/js/main.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#mytable').DataTable();
            let qty;
    
        $('body').on('click', '.qvb', function(e){
            e.preventDefault();
        let id = $(this).attr('id');
        $('#id').val(id);

            $.ajax({
                    url: "{{route('front.cart/add')}}",
                    method: 'post',
                    data: {
                        id: id
                    },
                    success: function(result){
                    
                        $('.cartvalue').attr('data-notify',result.qty);
                        window.location.href = "{{route('front.checkout')}}";
                        swal('Product', "is added to cart !", "success");



                        
                    }
                });
            });

            
       
        $('.btnDown').on('click', function() { 
            
            qty = qty=$('#sst').val();
            if (qty > 1)
                $('#sst').val(parseInt($('#sst').val())-1);
            
        });

        $('.btnUp').on('click', function() {
            $('#sst').val(parseInt($('#sst').val())+1);
            qty = qty=$('#sst').val();
        });
            

        $('.cart').on('click',function(e){
                e.preventDefault();
                var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
                     
                
                
                let id=this.id;
                
                $.ajax({
                
                url:"{{route('front.cart/add')}}",
                type:'POST',
                data:{
                    id : id,
                    qty : qty

                },
                success:function(response){
                    console.log(response);
                    // $('.cartvalue').html(response.qty);
                     $('.cartvalue').attr('data-notify',response.qty);
                     $('#sst').val(1);
                     swal(nameProduct, "is added to cart !", "success");
                    

                }

                });
            });

            
    
        });

        $('.cartbtn').on('click',function(e){
                e.preventDefault();
                var pname = this.name;
                     
                
                
                let id=this.id;
                
                $.ajax({
                
                url:"{{route('front.cart/add')}}",
                type:'POST',
                data:{
                    id : id,

                },
                success:function(response){
                    console.log(response);
                    // $('.cartvalue').html(response.qty);
                     $('.cartvalue').attr('data-notify',response.qty);
                     $('#sst').val(1);
                     swal(pname, "is added to cart !", "success");
                    

                }

                
            });

            
    
        });
       
    </script>
    <script type="text/javascript" charset="utf8" src="{{asset('user/datatable/jquery.dataTables.js')}}"></script>

    @yield('scripts')
</body>


</html>
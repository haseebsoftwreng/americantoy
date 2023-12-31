@extends('layout.front')
@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/images/bg-01.jpg');">
    <h2 class="ltext-105 cl1 txt-center">
        Search Results
    </h2>
</section>
@if (count($products)>0)
<div class="bg0 m-t-10 p-b-10">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            {{-- <div class="flex-w flex-c-m m-tb-10">
                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Filter
                </div>
                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                </div>
            </div>
            <div class="dis-none panel-filter w-full p-t-10">
                <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                    <div class="filter-col1 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Sort By
                        </div>
                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Default
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Popularity
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Average rating
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Newness
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Price: Low to High
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Price: High to Low
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-col2 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Price
                        </div>
                        <ul>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    All
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $0.00 - $50.00
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $50.00 - $100.00
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $100.00 - $150.00
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $150.00 - $200.00
                                </a>
                            </li>
                            <li class="p-b-6">
                                <a href="#" class="filter-link stext-106 trans-04">
                                    $200.00+
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-col3 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Color
                        </div>
                        <ul>
                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Black
                                </a>
                            </li>
                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>
                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Blue
                                </a>
                            </li>
                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Grey
                                </a>
                            </li>
                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Green
                                </a>
                            </li>
                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                    <i class="zmdi zmdi-circle"></i>
                                </span>
                                <a href="#" class="filter-link stext-106 trans-04">
                                    Red
                                </a>
                            </li>
                            <li class="p-b-6">
                                <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </span>
                                <a href="#" class="filter-link stext-106 trans-04">
                                    White
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-col4 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Tags
                        </div>
                        <div class="flex-w p-t-4 m-r--5">
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Fashion
                            </a>
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Lifestyle
                            </a>
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Denim
                            </a>
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Streetstyle
                            </a>
                            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                Crafts
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="row isotope-grid">
            @foreach ($products as $product)
            <div class="box col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->category->name}}">
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <a href="{{route('front.product_detail',$product->handler)}}">
                            @if ($product->images->count()>0)
                            <img src="{{asset($product->images->first()->path)}}" alt="IMG-PRODUCT" height="282"
                                width="228">
                            @endif

                        </a>
                        <a id="{{$product->id}}" href="#"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 qvb">
                            Buy Now
                        </a>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l " style="height: 90px;">
                            <a href="{{route('front.product_detail',$product->handler)}}"
                                class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-dark">
                                {{strlen($product->name) > 35 ? substr($product->name,0,150)."..." : $product->name}}
                            </a>

                            @if($product->color != "none")

                            Color : {{$product->color}}

                            @endif



                            <span class="stext-105 cl3 text-danger">
                                <del> $ {{$product->oldprice}}</del>&nbsp;
                                <b class="text-dark"> $ {{$product->price}}</b>
                            </span>


                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3 {{getClassActive($product->id)}}">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                id="{{$product->id}}">

                                <img class="icon-heart1 dis-block trans-04"
                                    src="{{asset('front/images/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="{{asset('front/images/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>

                        </div>
                        <div class="d-flex justify-content-between" style="margin-left: auto">
                            <button class="btn btn-primary cartbtn" name="{{$product->name}}" id="{{$product->id}}">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
@else
<div class="col-md-12 text-center mt-5 mb-5">
    <h3 class"text-danger  mt-3"> <i class="fa fa-exclamation-triangle"></i> Sorry No Result Found</h3>  
</div>
  
@endif

@endsection
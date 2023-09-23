@extends('layout.front')
@section('content')
     <!-- Hero/Intro Slider Start -->
 <div class="section">
    <div class="hero-slider swiper-container">
        <div class="swiper-wrapper">

            <div class="hero-slide-item swiper-slide">
                <div class="hero-slide-bg">
                    <img src="{{asset('front/assets/images/slider/slider1-1.png')}}" alt="Slider Image" />
                </div>
                <div class="container">
                    <div class="hero-slide-content">
                        <h2 class="title m-0">Get -30% off</h2>
                        <p>Latest baby product & toy collections.</p>
                        <a href="shop.html" class="btn btn-primary btn-hover-light">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="hero-slide-item swiper-slide">
                <div class="hero-slide-bg">
                    <img src="{{asset('front/assets/images/slider/slider1-2.png')}}" alt="Slider Image" />
                </div>
                <div class="container">
                    <div class="hero-slide-content">
                        <h2 class="title m-0"> New Arrivals <br />Get flat 50% off </h2>
                        <a href="shop.html" class="btn btn-primary btn-hover-light">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Swiper Pagination Start -->
        <div class="swiper-pagination d-lg-none"></div>
        <!-- Swiper Pagination End -->

        <!-- Swiper Navigation Start -->
        <div class="home-slider-prev swiper-button-prev main-slider-nav d-lg-flex d-none"><i class="pe-7s-angle-left"></i></div>
        <div class="home-slider-next swiper-button-next main-slider-nav d-lg-flex d-none"><i class="pe-7s-angle-right"></i></div>
        <!-- Swiper Navigation End -->
    </div>
</div>
<!-- Hero/Intro Slider End -->

<!-- Banner Section Start -->
<div class="section section-margin">
    <div class="container">
        <!-- Banners Start -->
        <div class="row mb-n6">

            <!-- Banner Start -->
            <div class="col-md-6 col-12 mb-6 pe-lg-2 pe-md-3">
                <a href="shop.html" class="banner" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('front/assets/images/banner/1.png')}}" alt="Banner Image" />
                </a>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-md-6 col-12 mb-6 ps-lg-2 ps-md-3">
                <a href="shop.html" class="banner" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{asset('front/assets/images/banner/2.png')}}" alt="Banner Image" />
                </a>
            </div>
            <!-- Banner End -->

        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->

<!-- Product Section Start -->
<div class="section section-margin mt-0 position-relative">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row mb-lg-8 mb-6">
            <!-- Section Title Start -->
            <div class="col-lg col-12">
                <div class="section-title mb-0 text-center" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="title mb-2">Product Collection</h2>
                    <p>New Arrival products to weekly lineup</p>
                </div>
            </div>
            <!-- Section Title End -->

        </div>
        <!-- Section Title & Tab End -->

        <!-- Products Tab Start -->
        
        <div class="row">
            <div class="col" data-aos="fade-up" data-aos-delay="600">
                <div class="product-carousel arrow-outside-container">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach (App\Models\Product::all() as $product)
                             <!-- Product Start -->
                             <div class="swiper-slide">
                                <div class="product-wrapper">
                                    <div class="product mb-6">
                                        <div class="thumb">
                                            <a href="{{route('front.product_detail',$product->handler)}}" class="image">
                                                @if ($product->images->count()>0)
                                                <img class="fit-image" src="{{asset($product->images->first()->path)}}" alt="IMG-PRODUCT" height="282"
                                                width="228">
                                                <img class="second-image fit-image" src="{{asset($product->images->first()->path)}}" alt="Product" />
                                                @endif
                                                {{-- <img class="fit-image" src="{{asset('front/assets/images/products/medium-product/1.jpg')}}" alt="Product" />
                                                <img class="second-image fit-image" src="{{asset('front/assets/images/products/medium-product/3.jpg')}}" alt="Product" />
                                             --}}
                                            </a>
                                            <span class="badges">
                                                    <span class="sale">-18%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                {{-- <a href="compare.html" class="action compare"><i class="pe-7s-refresh-2"></i></a> --}}
                                                <a href="{{route('front.product_detail',$product->handler)}}" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="pe-7s-search"></i></a>
                                            </div>
                                            <div class="add-cart-btn">
                                                <button class="btn btn-whited btn-hover-primary text-capitalize add-to-cart cartbtn" name="{{$product->name}}" id="{{$product->id}}">Add To Cart</button>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">{{$product->name}}</a></h5>
                                            <span class="price">
                                                    <span class="text-danger">
                                                        <del> $ {{$product->oldprice}}</del>&nbsp;
                                                    </span>
                                                    <span class="new">
                                                        $ {{$product->price}}
                                                    </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product End -->
                            @endforeach
                            
                            
                        </div>

                        <div class="swiper-pagination d-block d-md-none"></div>
                        <div class="swiper-button-prev swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-left"></i></div>
                        <div class="swiper-button-next swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products Tab End -->
    </div>
</div>
<!-- Product Section End -->

<!-- Testimonial Section Start -->
<div class="section testimonial-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Start -->
                <div class="section-title text-center" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="title text-white">Testimonials</h2>
                    <p class="sub-title text-white">What they say</p>
                </div>
                <!-- Section Title End -->

                <!-- Testimonial Carousel Start -->
                <div class="testimonial-carousel" data-aos="fade-up" data-aos-delay="400">
                    <div class="swiper-container testimonial-gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('front/assets/images/testimonial/thumb-1.png')}}" alt="Product Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('front/assets/images/testimonial/thumb-2.png')}}" alt="Product Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('front/assets/images/testimonial/thumb-3.png')}}" alt="Product Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('front/assets/images/testimonial/thumb-4.png')}}" alt="Product Image">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container testimonial-gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Testimonial Content Start -->
                                <div class="testimonial-content text-center">
                                    <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci augue nec sapien. Cum sociis natoque</p>
                                    <span class="ratings justify-content-center mb-3">
                                            <span class="rating-wrap text-white">
                                                <span class="star text-warning" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num text-light">(3)</span>
                                    </span>
                                    <h4 class="testimonial-author mb-0">Anamika lusy</h4>
                                </div>
                                <!-- Testimonial Content End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Testimonial Content Start -->
                                <div class="testimonial-content text-center">
                                    <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci augue nec sapien. Cum sociis natoque</p>
                                    <span class="ratings justify-content-center mb-3">
                                            <span class="rating-wrap text-white">
                                                <span class="star text-warning" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num text-light">(3)</span>
                                    </span>
                                    <h4 class="testimonial-author mb-0">Tinsy Nilom</h4>
                                </div>
                                <!-- Testimonial Content End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Testimonial Content Start -->
                                <div class="testimonial-content text-center">
                                    <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci augue nec sapien. Cum sociis natoque</p>
                                    <span class="ratings justify-content-center mb-3">
                                            <span class="rating-wrap text-white">
                                                <span class="star text-warning" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num text-light">(3)</span>
                                    </span>
                                    <h4 class="testimonial-author mb-0">Cristal Aryan</h4>
                                </div>
                                <!-- Testimonial Content End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Testimonial Content Start -->
                                <div class="testimonial-content text-center">
                                    <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci augue nec sapien. Cum sociis natoque</p>
                                    <span class="ratings justify-content-center mb-3">
                                            <span class="rating-wrap text-white">
                                                <span class="star text-warning" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num text-light">(3)</span>
                                    </span>
                                    <h4 class="testimonial-author mb-0">Jems Jhon</h4>
                                </div>
                                <!-- Testimonial Content End -->
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white d-none"></div>
                        <div class="swiper-button-prev swiper-button-white d-none"></div>
                    </div>
                </div>
                <!-- Testimonial Carousel End -->
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

<!-- Product List Banner Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row mb-n6">

            <!-- Banner Start -->
            <div class="col-lg-4 col-md-12 col-12 mb-6">
                <div class="banner" data-aos="fade-up" data-aos-delay="200">
                    <a href="shop.html"><img src="{{asset('front/assets/images/banner/3.png')}}" alt="Banner Image" /></a>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Product List Start -->
            <div class="col-lg-4 col-md-6 col-12 mb-6">

                <!-- Product List Wrapper Start -->
                <div class="product-list-wrapper" data-aos="fade-up" data-aos-delay="400">
                    <!-- Product List Title Start -->
                    <div class="product-list-title mb-5">
                        <h4 class="title">Best Seller Product</h4>
                    </div>
                    <!-- Product List Title End -->

                    <!-- Product List Carousel Start -->
                    <div class="product-list-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/1.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/10.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Happy Kids With Gift</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 67%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$12.50</span>
                                            <span class="old">$15.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/2.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/9.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Baby Cat Doll</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(3)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$10.50</span>
                                            <span class="old">$12.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/3.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/8.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Mini Car Toy for Kids</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 50%"></span>
                                            </span>
                                            <span class="rating-num">(6)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$22.50</span>
                                            <span class="old">$25.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/4.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/7.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Dinosaur Toys for Baby</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 60%"></span>
                                            </span>
                                            <span class="rating-num">(5)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$18.50</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/5.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/6.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Robotics for Kids </a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 75%"></span>
                                            </span>
                                            <span class="rating-num">(9)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$20.50</span>
                                            <span class="old">$22.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                </div>

                                <div class="swiper-slide">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/18.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/17.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Happy Kids With Gift</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 67%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$13.00</span>
                                            <span class="old">$16.00</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/16.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/15.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Mini Car Toy for Kids</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(3)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$14.50</span>
                                            <span class="old">$15.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/14.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/13.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Baby Rocking Horse</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 50%"></span>
                                            </span>
                                            <span class="rating-num">(6)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$26.50</span>
                                            <span class="old">$27.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/12.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/11.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Baby Cat Doll</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 60%"></span>
                                            </span>
                                            <span class="rating-num">(5)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$19.50</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/10.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/9.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Dinosaur Toys for Baby</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 75%"></span>
                                            </span>
                                            <span class="rating-num">(9)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$21.50</span>
                                            <span class="old">$22.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->
                        </div>

                    </div>
                    <!-- Product List Carousel End -->
                </div>
                <!-- Product List Wrapper End -->

            </div>
            <!-- Product List End -->

            <!-- Product List Start -->
            <div class="col-lg-4 col-md-6 col-12 mb-6">

                <!-- Product List Wrapper Start -->
                <div class="product-list-wrapper" data-aos="fade-up" data-aos-delay="600">

                    <!-- Product List Title Start -->
                    <div class="product-list-title mb-5">
                        <h4 class="title">On-Sale Product</h4>
                    </div>
                    <!-- Product List Title End -->

                    <!-- Product List Carousel Start -->
                    <div class="product-list-carousel-2">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/18.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/17.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Happy Kids With Gift</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 67%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$13.00</span>
                                            <span class="old">$16.00</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/16.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/15.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Mini Car Toy for Kids</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(3)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$14.50</span>
                                            <span class="old">$15.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/14.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/13.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Baby Rocking Horse</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 50%"></span>
                                            </span>
                                            <span class="rating-num">(6)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$26.50</span>
                                            <span class="old">$27.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/12.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/11.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Baby Cat Doll</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 60%"></span>
                                            </span>
                                            <span class="rating-num">(5)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$19.50</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/10.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/9.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Dinosaur Toys for Baby</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 75%"></span>
                                            </span>
                                            <span class="rating-num">(9)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$21.50</span>
                                            <span class="old">$22.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                </div>

                                <div class="swiper-slide">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/1.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/10.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Happy Kids With Gift</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 67%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$12.50</span>
                                            <span class="old">$15.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/2.jpg')}} alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/9.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Baby Cat Doll</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(3)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$10.50</span>
                                            <span class="old">$12.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/3.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/8.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Mini Car Toy for Kids</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 50%"></span>
                                            </span>
                                            <span class="rating-num">(6)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$22.50</span>
                                            <span class="old">$25.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-4">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/4.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/7.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Dinosaur Toys for Baby</a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 60%"></span>
                                            </span>
                                            <span class="rating-num">(5)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$18.50</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="{{asset('front/assets/images/products/small-product/5.jpg')}}" alt="Product Image">
                                                    <img class="fit-image second-image" src="{{asset('front/assets/images/products/small-product/6.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Robotics for Kids </a>
                                            </h6>
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 75%"></span>
                                            </span>
                                            <span class="rating-num">(9)</span>
                                            </span>
                                            <span class="price">
                                                    <span class="new">$20.50</span>
                                            <span class="old">$22.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->
                        </div>

                    </div>
                    <!-- Product List Carousel End -->

                </div>
                <!-- Product List Wrapper End -->

            </div>
            <!-- Product List End -->

        </div>
    </div>
</div>
<!-- Product List Banner Section End -->

<!-- Latest Blog Section Start -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Section Title Start -->
                <div class="section-title text-center" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title">Testimonials</h2>
                    <p class="sub-title">What they say</p>
                </div>
                <!-- Section Title End -->

                <!-- Latest Blog Carousel Start -->
                <div class="latest-blog-carousel arrow-outside-container" data-aos="fade-up" data-aos-delay="600">
                    <div class="swiper-container">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <!-- Blog Thumb Start -->
                                    <div class="blog-thumb">
                                        <a href="blog-details.html">
                                            <img class="fit-image" src="{{asset('front/assets/images/blog/blog-medium/1.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <!-- Blog Thumb End -->
                                    <!-- Blog Content Start -->
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <p>03/11/2022 | <span>Admin</span></p>
                                        </div>
                                        <h5 class="blog-title">
                                            <a href="blog-details.html">It is a long established fact that a reader will be distracted</a>
                                        </h5>
                                    </div>
                                    <!-- Blog Content End -->
                                </div>
                                <!-- Single Blog End -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <!-- Blog Thumb Start -->
                                    <div class="blog-thumb">
                                        <a href="blog-details.html">
                                            <img class="fit-image" src="{{asset('front/assets/images/blog/blog-medium/2.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <!-- Blog Thumb End -->
                                    <!-- Blog Content Start -->
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <p>03/11/2022 | <span>Admin</span></p>
                                        </div>
                                        <h5 class="blog-title">
                                            <a href="blog-details.html">There are many variations of passages of lorem ipsum</a>
                                        </h5>
                                    </div>
                                    <!-- Blog Content End -->
                                </div>
                                <!-- Single Blog End -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <!-- Blog Thumb Start -->
                                    <div class="blog-thumb">
                                        <a href="blog-details.html">
                                            <img class="fit-image" src="{{asset('front/assets/images/blog/blog-medium/3.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <!-- Blog Thumb End -->
                                    <!-- Blog Content Start -->
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <p>03/11/2022 | <span>Admin</span></p>
                                        </div>
                                        <h5 class="blog-title">
                                            <a href="blog-details.html">The standard chunk of lorem ipsum used since</a>
                                        </h5>
                                    </div>
                                    <!-- Blog Content End -->
                                </div>
                                <!-- Single Blog End -->
                            </div>

                        </div>

                        <!-- Swiper Pagination Start -->
                        <div class="swiper-pagination d-block d-md-none"></div>
                        <!-- Swiper Pagination End -->

                        <!-- Next Previous Button Start -->
                        <div class="swiper-blog-button-next swiper-button-next swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-blog-button-prev swiper-button-prev swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->
                    </div>
                </div>
                <!-- Latest Blog Carousel End -->
            </div>
        </div>
    </div>
</div>
<!-- Latest Blog Section End -->

<!-- Brand Logo Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="border-top border-bottom">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <!-- Brand Logo Wrapper Start -->
                    <div class="brand-logo-carousel arrow-outside-container">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{asset('front/assets/images/brand-logo/1.png')}}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{asset('front/assets/images/brand-logo/2.png')}}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{asset('front/assets/images/brand-logo/3.png')}}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{asset('front/assets/images/brand-logo/4.png')}}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{asset('front/assets/images/brand-logo/5.png')}}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo">
                                    <a href="#"><img src="{{asset('front/assets/images/brand-logo/6.png')}}" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-logo-button-next swiper-button-next swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-logo-button-prev swiper-button-prev swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->
                        </div>
                    </div>
                    <!-- Brand Logo Wrapper End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo Section End -->

<!-- Footer Section Start -->   
@endsection

@section('model')
<div class="modal-content">
    <button class="btn close" data-bs-dismiss="modal">×</button>
    <div class="row">
        <div class="col-md-6 col-12">

            <!-- Product Details Image Start -->
            <div class="modal-product-carousel">

                <!-- Single Product Image Start -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <a class="swiper-slide" href="#">
                            <img class="w-100" src="{{asset('front/assets/images/products/large-product/1.jpg')}}" alt="Product">
                        </a>
                        <a class="swiper-slide" href="#">
                            <img class="w-100" src="{{asset('front/assets/images/products/large-product/2.jpg')}}" alt="Product">
                        </a>
                        <a class="swiper-slide" href="#">
                            <img class="w-100" src="{{asset('front/assets/images/products/large-product/3.jpg')}}" alt="Product">
                        </a>
                        <a class="swiper-slide" href="#">
                            <img class="w-100" src="{{asset('front/assets/images/products/large-product/4.jpg')}}" alt="Product">
                        </a>
                        <a class="swiper-slide" href="#">
                            <img class="w-100" src="{{asset('front/assets/images/products/large-product/5.jpg')}}" alt="Product">
                        </a>
                    </div>

                    <!-- Swiper Pagination Start -->
                    <!-- <div class="swiper-pagination d-md-none"></div> -->
                    <!-- Swiper Pagination End -->

                    <!-- Next Previous Button Start -->
                    <div class="swiper-product-button-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                    <div class="swiper-product-button-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                    <!-- Next Previous Button End -->
                </div>
                <!-- Single Product Image End -->

            </div>
            <!-- Product Details Image End -->

        </div>
        <div class="col-md-6 col-12 overflow-hidden position-relative">

            <!-- Product Summery Start -->
            <div class="product-summery position-relative">

                <!-- Product Head Start -->
                <div class="product-head mb-3">
                    <h2 class="product-title">Sample product title</h2>
                </div>
                <!-- Product Head End -->

                <!-- Rating Start -->
                <span class="ratings justify-content-start mb-2">
                <span class="rating-wrap">
                    <span class="star" style="width: 100%"></span>
                </span>
                <span class="rating-num">(4)</span>
                </span>
                <!-- Rating End -->

                <!-- Price Box Start -->
                <div class="price-box mb-2">
                    <span class="regular-price">$80.00</span>
                    <span class="old-price"><del>$90.00</del></span>
                </div>
                <!-- Price Box End -->

                <!-- Description Start -->
                <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                <!-- Description End -->

                <!-- Quantity Start -->
                <div class="quantity d-flex align-items-center mb-5">
                    <span class="me-2"><strong>Qty: </strong></span>
                    <div class="cart-plus-minus">
                        <input class="cart-plus-minus-box" value="1" type="text">
                        <div class="dec qtybutton"></div>
                        <div class="inc qtybutton"></div>
                    </div>
                </div>
                <!-- Quantity End -->

                <!-- Cart Button Start -->
                <div class="cart-btn mb-4">
                    <div class="add-to_cart">
                        <a class="btn btn-dark btn-hover-primary" href="cart.html">Add to cart</a>
                    </div>
                </div>
                <!-- Cart Button End -->

                <!-- Action Button Start -->
                <div class="actions border-bottom mb-4 pb-4">
                    <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-refresh-2"></i> Compare</a>
                    <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i> Wishlist</a>
                </div>
                <!-- Action Button End -->

                <!-- Social Shear Start -->
                <div class="social-share">
                    <span><strong>Social: </strong></span>
                    <a href="#" class="facebook-color"><i class="fa fa-facebook"></i> Like</a>
                    <a href="#" class="twitter-color"><i class="fa fa-twitter"></i> Tweet</a>
                    <a href="#" class="pinterest-color"><i class="fa fa-pinterest"></i> Save</a>
                </div>
                <!-- Social Shear End -->

                <!-- Payment Option Start -->
                <div class="payment-option mt-4 d-flex">
                    <span><strong>Payment: </strong></span>
                    <a href="#">
                        <img class="fit-image ms-1" src="{{asset('front/assets/images/payment/payment.png')}}" alt="Payment Option Image">
                    </a>
                </div>
                <!-- Payment Option End -->

                <!-- Product Delivery Policy Start -->
                <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                    <li> <i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                    <li><i class="fa fa-truck"></i><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                    <li><i class="fa fa-refresh"></i><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                </ul>
                <!-- Product Delivery Policy End -->

            </div>
            <!-- Product Summery End -->

        </div>
    </div>
</div>
@endsection

@extends('layout.front')

@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Thank you
        </h2>
       <h3 style="color: whitesmoke"> Your order is in processing, We'll notify you soon regarding the status of your order.</h3>
    </section>
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form method="POST" action="{{route('front.contact.store')}}">
                        @csrf
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Send Us A Message
                        </h4>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <img class="how-pos4 pointer-none" src="front/images/icons/icon-email.png" alt="ICON">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Your Email Address" required style="padding-left: 65px">
                        </div>
                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="message" placeholder="How Can We Help?"></textarea>
                        </div>
                        <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Submit
                        </button>
                    </form>
                </div>
                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-map-marker"></span>
                        </span>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Address
                            </span>
                            <p class="stext-115 cl6 size-213 p-t-18">
                               Dellwood Street Bankstown New Sourh Wales Australia.
                            </p>
                        </div>
                    </div>
                    <div class="flex-w w-full p-b-42">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-phone-handset"></span>
                        </span>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Lets Talk
                            </span>
                            <p class="stext-115 cl1 size-213 p-t-18">
                                +61 432 455 507
                            </p>
                        </div>
                    </div>
                    <div class="flex-w w-full">
                        <span class="fs-18 cl5 txt-center size-211">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                Sale Support
                            </span>
                            <p class="stext-115 cl1 size-213 p-t-18">
                                <a  class="__cf_email__">support@australiancart.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="map">
        <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="front/images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
    </div> -->
@endsection
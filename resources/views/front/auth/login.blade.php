@extends('layout.front')


@section('content')

<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Login
    </h2>
</section>
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr d-flex justify-content-center">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{route('front.user_login')}}">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Enter Credentials
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <img class="how-pos4 pointer-none" src="front/images/icons/icon-email.png" alt="ICON">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Your Email Address" required style="padding-left: 65px">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input type="password" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="password" placeholder="Enter Password" required style="padding-left: 65px">
                        <img class="how-pos4 pointer-none" src="front/images/icons/password.png" alt="ICON">
                    </div>
                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Submit
                    </button>
                    {{-- <hr> --}}
                    <p class="text-center my-3">OR</p>
                    <div>
                      <a href="{{route('front.register')}}" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">Create an Account</a>
                    </div>
                </form>
            </div>
            {{-- <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-map-marker"></span>
                    </span>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Address
                        </span>
                        <p class="stext-115 cl6 size-213 p-t-18">
                            Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
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
                            +1 800 1236879
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
                            <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88ebe7e6fce9ebfcc8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</a>
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection
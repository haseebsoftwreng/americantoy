@extends('layout.front')

@section('content')

<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Register
    </h2>
</section>
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr d-flex justify-content-center">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{route('front.user_register')}}">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Enter Details
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Your Name" required  style="padding-left: 65px">
                        <img class="how-pos4 pointer-none" src="front/images/icons/user.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Your Email Address" required  style="padding-left: 65px">
                        <img class="how-pos4 pointer-none" src="front/images/icons/icon-email.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input type="password" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="password" placeholder="Enter Password" required  style="padding-left: 65px">
                        <img class="how-pos4 pointer-none" src="front/images/icons/password.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input type="number" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="phone" placeholder="Enter Phone Number" required  style="padding-left: 65px">
                        <img class="how-pos4 pointer-none" src="front/images/icons/phone.png" alt="ICON">
                    </div>
                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Submit
                    </button>
                </form>
            </div>
           
        </div>
    </div>
</section>

@endsection
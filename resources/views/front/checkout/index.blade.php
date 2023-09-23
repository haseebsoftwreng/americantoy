@extends('layout.front')

@section('content')

<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Checkout
    </h2>
</section>

<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{route('front.ordercreate')}}">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Details
                    </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-r-30" type="text" name="first_name"
                                    placeholder=" First Name*" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-r-30" type="text" name="last_name"
                                    placeholder="Last Name*" required>
                            </div>
                        </div>
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-r-30" type="text" name="email"
                            placeholder="Email*" required>
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-r-30" type="number" name="phone"
                            placeholder="Phone Number*" required>
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-r-30" type="text" name="city"
                            placeholder="City*" required>
                    </div><div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-r-30"  type="text" name="country"
                           placeholder="Country*"   required>
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <textarea class="form-control cl2 plh3 p-r-30" type="text" name="street" rows="5"
                            placeholder="Street*" required></textarea>
                    </div>
                    <div hidden class="form-check-inline">
                        <label class="form-check-label">
                            <input checked="checked" type="radio" value="stripe" class="form-check-input" name="method"><img height="50" width="80" src="{{asset('images/icons/stripe1.png')}}">
                        </label>
                    </div>
                    {{-- <div class="form-check-inline ml-5 mb-3">
                        <label class="form-check-label">
                            <input type="radio" value="paypal" class="form-check-input" name="method"><img height="50" width="80" src="{{asset('images/icons/paypal.jpg')}}">
                        </label>
                        
                    </div> --}}
                    
                    @if (Auth::check())
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                    @endif
                    
                    <button type="submit"
                        class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Proceed to Payment
                    </button>
                </form>
            </div>
            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-lr-15-lg w-full-md">
                <div class="flex-w w-full p-b-42">
                    {{-- <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-map-marker"></span>
                    </span> --}}
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Your Order
                        </span>
                        {{-- <p class="stext-115 cl6 size-213 p-t-18">
                            Main Bazar Kotmomin District Sargodha Near Old Post Office Kotmomin
                        </p> --}}
                        <hr>
                    </div>
                    *Average Delivery time is 25 Days.
                </div>
                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-pie-chart"></span>
                    </span>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Subtotal
                        </span>
                        <p class="stext-115 cl1 size-213 p-t-18" style="
                        font-size: 19px;">
                            <b>{{Session::get('cart')['amount']}} $ </b>
                        </p>
                    </div>
                </div>
                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-pie-chart"></span>
                    </span>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Delivery
                        </span>
                        <p class="stext-115 cl1 size-213 p-t-18" style="
                        font-size: 19px;">
                            <b> Free </b>
                        </p>
                    </div>
                </div>
                <div class="flex-w w-full">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-pencil"></span>
                    </span>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Total
                        </span>
                        <p class="stext-115 cl1 size-213 p-t-18" style="
                        font-size: 19px;">
                            <b> {{Session::get('cart')['amount']}} $ </b>
                        </p>
                    </div>
                </div>
                {{-- <div class="card flex-w w-full">
                    <div class="card-body">
                        subtotal:

                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>


@endsection
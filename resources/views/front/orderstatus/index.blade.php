@extends('layout.front')


@section('content')
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/images/bg-01.jpg');">
        <h3 class="ltext-105 cl0 txt-center">
            @if ($order == null)
                
            No Order Found
                
            @else
                
            Order Status
            
            @endif
        </h3>
    </section>
    @if ($order != null)
                @if ($order->deleted_at == null)
                    

     <section class="bg0 p-t-75 p-b-50">
        <div class="container">
            <div class="row">
                <div class="order-md-2 col-md-11 col-lg-12 p-b-20 text-center">
                    <Button class="btn btn-lg bg-success text-warning" ><strong>YOUR ORDER IS</strong>
                    @if ($order->completed == 0)
                        <strong>IN PROCESSING</strong>
                    @else
                        <strong>DELIVERED</strong>
                    @endif
                    </Button>
                </div>
            </div>
        </div>
    </section>

    @else
        
     <section class="bg0 p-t-75 p-b-50">
        <div class="container">
            <div class="row">
                <div class="order-md-2 col-md-11 col-lg-12 p-b-20 text-center">
                    <Button class="btn btn-lg bg-danger text-warning">
                        <strong>Your Payment Is Pending</strong>    
                    </Button><br>
                    <button class="p-t-35" ><a href="" class="btn btn-sm bg-success">Proceed To Payment</a></button>
                </div>
            </div>
        </div>
    </section>

    @endif

    @else
    <section class="bg0 p-t-75 p-b-50">
        <div class="container">
            <div class="row">
                <div class="order-md-2 col-md-11 col-lg-12 p-b-20">
                    <div class="hov-img0 text-center">
                        <img class=" col-md-3 col-lg-4" src="{{asset("front/images/error.png")}}"  alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection
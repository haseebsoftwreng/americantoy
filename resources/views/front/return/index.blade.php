@extends('layout.front')

@section('content')
 
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{route('home')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Shipping & Returns
        </span>
    </div>
</div>


<div class="container">
    <div class="row p-b-8">
        <div class="col-md-7 col-lg-8">
            <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                <h3 class="mtext-111 cl2 p-b-16">
                    Shipping & Returns  
                </h3>
                <p class="stext-113 cl6 p-b-26">
                    <strong>NOTE :</strong><br>
                    The processing of an order starts only when the payment for an order has been made in full. The orders are delivered usually within 20 to 30 (Business days) after receipt of cleared payment. 
                    The data shared is only estimated and cannot be used to guarantee a delivery on a specific date or time. However, you can always reach out to the courier company to get updates on the order once it is dispatched. 
                    The delivery timeframes are expected to be affected due to health/climate or miscellaneous circumstances. Australian-carts will be playing its role critically in dispatching the products however, for a delay in these situations your patience is highly appreciated. 
                </p>
                <p class="stext-113 cl6 p-b-26">
             <strong>Delivery Issues</strong><br>       
            <mark> Transit Issue/No Tracking update </mark>
                The tracking number is provided to you is just to check your order from our support,once the package has been dispatched . The tracking number will be shared with you will come live and show movements of the package only when it gets scanned by the courier company in the depot or parcel facility. Please note, in case the tracking is not showing up any updates after 10days please contact us immediately so that we can reach out to the courier company and get it resolved to ensure you have a good customer satisfaction
                </p>
                <p class="stext-113 cl6 p-b-26">
                     <strong>Product undeliverable</strong><br> 
A product can be undeliverable due to multiple factors; our team will contact to resolve the matter, and payment will be returned fully to your account. 
                </p>      
                <p class="stext-113 cl6 p-b-26">
                     <strong>Returned to Sender (RTS)</strong><br> 
                     <mark>If a product has been RTS, it may be because of the following reasons,</mark> <br>
                      <strong>Invalid address:</strong><br>
                     Please make sure the address provided by the customer is always correct. Australian-carts does not hold the responsibility for address validation at our end. If the product gets returned to Sender due to an invalid address then a re-delivery cost will incur. If the customer wants a refund, then a one-way shipping cost along with 15% restocking fees will be deducted.  <br>
                      <strong>Delivery Rejected by Receiver:</strong><br>
                     If the receiver rejects the item, then support team will resolve the order issue manually. <br>
                      <strong>Unsuccessful Delivery:</strong><br>
                     By default, the packages will be dispatched with the status "Authorized to Leave (ATL)". However, this cannot be the case if the product value is high or if the courier company delivery driver does not find a safe place to drop off the package. In such cases, the package will be taken back either to the post office or depot or a parcel collection center of the carrier company after leaving the calling card in the mailbox. It is the customer's responsibility to monitor the tracking of the package and contact the courier company immediately if they have missed the delivery. A re-delivery cost will incur. 
                </p>     
            </div>
        </div>
        <div class="order-md-1 col-md-3 col-lg-4 m-lr-auto mt-md-4">
            <div class="mt-md-4">
                <div class="hov-img0 mt-md-4">
                  <img src="{{asset('front\images\scooter.png')}}" alt="">
                </div>
            </div>
        </div> 
    </div>
    
</div>


@endsection


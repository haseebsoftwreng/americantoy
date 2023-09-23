@extends('layout.front')

@section('content')
 
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index-2.html" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Shoping Cart
        </span>
    </div>
</div>
@if (Session::has('cart'))

<form class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Product</th>
                                <th class="column-2"></th>
                                <th class="column-3">Price</th>
                                <th class="column-4">Quantity</th>
                                <th class="column-5">Total</th>
                            </tr>
                            @foreach (App\Helpers\Cart::products() as $product)
                                <tr class="table_row p{{$product->id}}">
                                    <td class="column-1">
                                        <div class="how-itemcart1 icon_close" productId="{{$product->id}}">
                                            <img src="{{$product->images->first()->path}}" alt="IMG">
                                        </div>
                                    </td>
                                    <td class="column-2">{{$product->name}}</td>
                                    <td class="column-3">{{$product->price}} USD</td>
                                    <td class="column-4">
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m decrease" productId="{{$product->id}}"productprice="{{$product->price}}">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
                                            <input id="sst{{$product->id}}" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{{$product['qty']}}" readonly>
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m increase" productId="{{$product->id}}"productprice="{{$product->price}}">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="column-5" id="prp{{$product->id}}">{{$product->price * $product['qty']}} USD</td>
                                </tr>
                            @endforeach
                          
                        </table>
                    </div>
                    {{-- <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
                            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                Apply coupon
                            </div>
                        </div>
                        <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            Update Cart
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Cart Totals
                    </h4>
                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2" >
                                Subtotal:
                            </span>
                        </div>
                        <div class="size-209">
                            <span class="mtext-110 cl2" id="subTotal">
                                {{Session::get('cart')['amount']}}  $
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2" >
                                Delivery:
                            </span>
                        </div>
                        <div class="size-209">
                            <span class="mtext-110 cl2" id="subTotal">
                               Free
                            </span>
                        </div>
                    </div>
                   
                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl2">
                                Total:
                            </span>
                        </div>
                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl2" id="total">
                               {{Session::get('cart')['amount']}}/- USD
                            </span>
                        </div>
                        
                    </div>
                    <input type="hidden" name="ordertoken" value="rand(111111,9999999)" id="">
                       
                    <a href="{{route('front.checkout')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Proceed to Checkout
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</form>
@else
<h2 align="center" class="pb-5"> Your Cart is Empty</h2>

 @endif

@endsection

@section('scripts')

<script>
    let id,qty,price;
    $(document).ready(function(){
			$('.increase').on('click', function(){
				 id = $(this).attr('productId');
                 price = $(this).attr('productprice');
                //  alert(id);
				$.ajax({
					url : "{{url('cart/increment')}}",
					type : "POST",
					data : {
						id : id
					},
					success:function(response){
                        //console.log(response);

                        if(response.error)
                           // console.log('Item out of Stock!');
                           // toastr.error("Item out of Stock!");
                           swal('Error', "Item out of Stock!", "error");
						else {
							$('#sst'+id).val(parseInt($('#sst'+id).val())+1);
                            qty=$('#sst'+id).val();
                            updateView(response);
						}
					}
				});

			});

            $('.decrease').on('click', function(){
				 id = $(this).attr('productId');
                 price = $(this).attr('productprice');
				$.ajax({
					url : "{{route('front.cart/decrement')}}",
					type : "POST",
					data : {
						id : id
					},
					success:function(response){
                        qty = parseInt($('#sst'+id).val()) - 1;
                        if(qty > 0) $('#sst'+id).val(qty);
						else {
							removeFromView(id,response);
						}
						updateView(response);
					}
				});

			});

            $('.icon_close').click(function(){
            id = $(this).attr('productId');
            $.ajax({
                url : "{{url('cart/remove')}}",
                type : "POST",
                data : {
                    id : id
                },
                success:function(response){
                    removeFromView(id,response);
                    updateView(response);
                }
            });
        });
            

            function updateView(response){
                // $('.cartValue').html('$'+response.cart.qty);
                $('.cartvalue').attr('data-notify',response.cart.qty);
                $('#subTotal').html(response.cart.amount+'/- USD');
                $('#total').html(response.cart.amount+'/-USD');
                $('#prp'+id).html(price*qty+' USD');
            }

            function removeFromView(id,response){
                $('.p'+id).remove();
                swal('Success', "Item removed from Cart", "success");
                if (response.cart == null) location.reload();
            }
            
           


    });
</script>
    
@endsection
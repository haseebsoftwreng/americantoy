<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Cart;
use App\Helpers\TransactionHelper;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Models\Reviewable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Facades\PayPal;
use Stripe\Charge;
use Stripe\Stripe;

class OrderController extends Controller
{

    public function cart(){
        
        return view('front.cart.index');
    }
    public function checkout(){
        return view('front.checkout.index');
    }

    public function create(Request $request)
    {
    
        $allorders = random_int(100000,999999);
        $order = Order::create([
            'qty' => Session::get('cart')['qty'],
            'subtotal' => Session::get('cart')['amount'],
            'method' => $request->method,
            'order_no' => $allorders
        ] + $request->all());
        foreach (Cart::products() as $product) {
            Item::create([
                'product_id' => $product->id,
                'order_id' => $order->id,
                'qty' => $product['qty']
            ]);
        }

        foreach (Cart::products() as $product) {
            $orderPRoduct = Product::find($product->id);
            $orderPRoduct->update([
                'stock' => $orderPRoduct->stock - $product['qty'],
            ]);
        }

        if ($request->method == 'stripe') {
            $order->delete();     
            return view('front.payment.stripe')->with('amount', $request->amount)->with('order', $order);
        } else if ($request->method == 'paypal') {
            //    dd($request);
            $provider = PayPal::setProvider('express_checkout');
            //  dd($order);
            $data = [];
            $data['invoice_id'] = $order->id;
            $data['total'] = $order->subtotal;
            $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";

            $data['items'] = [
                [
                    'name' => 'Sale Invoice INV-',
                    'price' => $order->subtotal,
                    'desc'  => 'Description for package Sale',
                    'qty' => 1
                ]
            ];

            $data['return_url'] = route('front.paypal.save', $order->id);

            $data['cancel_url'] = route('front.checkout');
            $response = $provider->setExpressCheckout($data);
            return redirect($response['paypal_link']);
        }

        if ($request->user_id) {

            Reviewable::create([
                'user_id' => $request->user_id,
                'product_id' => $product->id,
            ]);
        }

        // alert()->success('Your Oder Has Been Placed', 'Thank You')->persistent('Close');
        return redirect()->route('home');
    }

    public function savePaypal($id)
    {
        $order = Order::find($id);
        TransactionHelper::cardPayment($order, 'Paypal');
        Session::forget('cart');
        alert()->success('Cash Received Successfully', 'Thank You')->persistent('Close');

        return redirect()->route('front.thankyou');
    }

    // STRIPE PAYMENT 


    public function stripePay(Request $request)
    {  
        $order = Order::withTrashed()->find($request->order_id);
        Stripe::setApiKey('sk_test_51IVZcBDoZl8DJ0XN2B6ryI8a1tssqoDcso3P1IDP7GxJ1qtmPnCGh9Ywap5fBwmQkGB5LIX4luKiWLlg202VvuJU00KKpdAkHt');
        Charge::create([
            "amount" => $order->subtotal * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from australiancart for order"
        ]);
        $order->restore();
        Session::forget('cart');
        $data = ['order' => $order];
        Mail::send('mail', $data, function ($message) use ($order){
            $message->from('admin@mail.com','Australiancarts');
            $message->to($order->email, 'Buyer')
            ->subject('Your Order is Placed order #'.$order->order_no.'');
        });
        alert()->success('Your Oder Has Been Placed', 'Thank You')->persistent('Close');
        return redirect()->route('front.thankyou');
    }

    public function orderstatus(Request $request){
        
        $order = Order::where('order_no',$request->code)->first();
        if($order == null)
        {
            $order = Order::onlyTrashed()->where('order_no',$request->code)->first();
        }
        return view('front.orderstatus.index')->with('order',$order);
    }   
    
   
}

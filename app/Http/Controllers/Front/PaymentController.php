<?php

namespace App\Http\Controllers\Front;

use App\Helpers\TransactionHelper;
use App\Http\Controllers\Controller;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;
use Srmklive\PayPal\Facades\PayPal;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function gotoPaypal($id){
        
        $provider = PayPal::setProvider('express_checkout');

        $data = [];
        $data['invoice_id'] = $package->id;
        $data['total'] = $package->price;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        
        $data['items'] = [
            [
                'name' => 'Sale Invoice INV-'.$package->id,
                'price' => $package->price,
                'desc'  => 'Description for package Sale',
                'qty' => 1
            ]
        ];
        
        $data['return_url'] = route('user.paypal.save',$package->id);
        $data['cancel_url'] = route('user.package');

        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
    }

    public function savePaypal($id){
        $package = Package::find($id);
        TransactionHelper::cardPayment($package, 'Paypal');

        alert()->success('Cash Received Successfully', 'Thank You')->persistent('Close');

        return redirect()->route('user.inventory.index');
    }
}

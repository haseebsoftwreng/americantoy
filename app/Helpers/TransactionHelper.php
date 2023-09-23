<?php
namespace App\Helpers;

use App\Models\Transaction;
use App\Models\Account;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class TransactionHelper
{

    public static function payment($request){
        $account = Account::find(1);
        Transaction::create([
            'opening_balance' => $account->balance,
            'closing_balance' => $account->balance - $request->amount,
            'mode' => 'Credit',
            'type' => 'Payment'
        ] + $request->all());

        $account->balance -= $request->amount;
        $account->save();
    } 

    public static function recovery($request){
        $account = Account::find(1);
        //Creating Transaction
        Transaction::create([
            'opening_balance' => $account->balance,
            'closing_balance' => $account->balance + $request->amount,
            'mode' => 'Debit',
            'type' => 'Recovery'
           
        ] + $request->all());
            //Add Recovered Amount OUR Balance
            $account->balance += $request->amount;
            $account->save();
    }
    
    public static function cardPayment($package, $method){
        $pacakge = Package::find($package->id);
        //Creating Transaction
        Payment::create ([
            "amount" => $package->price * 100,
            "user_id" => Auth::user()->id,
            "currency" => "usd",
            "source" => 'paypal',
            "desc" => "Payment from teckle" 
    ]);
            //Add Recovered Amount OUR Balance
       
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::completed();
        return view('admin.order.completed')->with('orders',$orders);
    } 
    
    public function pending()
    {
        $orders = Order::onlyTrashed()->get();
        return view('admin.order.paypending')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $orders = Order::where('completed',false)->get();
        return view('admin.order.new')->with('orders',$orders);
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $orderitems = $order->items;
        return view('admin.order.detail')->with('orderitems',$orderitems);
    }
    
    public function showpending($id)
    {
        $order = Order::onlyTrashed()->find($id);
        $orderitems = $order->items;
        return view('admin.order.detail')->with('orderitems',$orderitems);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // dd($order);
        $order->update([
            'completed' => true,
        ]);
        alert()->success('Order Completed', 'Done');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function newmail(){
        
        // $order = Order::where('order_no',$request->code)->first();
        // if($order == null)
        // {
        //     $order = Order::onlyTrashed()->where('order_no',$request->code)->first();
        // }

        $orders = Order::where('completed',0)->get();
        return view('admin.customersupport.new')->with('orders',$orders);
    }
    
    public function completedmail(){
        
        // $order = Order::where('order_no',$request->code)->first();
        // if($order == null)
        // {
        //     $order = Order::onlyTrashed()->where('order_no',$request->code)->first();
        // }

        $orders = Order::where('completed',1)->get();
        return view('admin.customersupport.completed')->with('orders',$orders);
    } 
    
    public function newmailview(Request $request){
        $order = Order::find($request->id);
        return view('admin.customersupport.mailview')->with('order',$order);
    }

    public function newmailsend(Request $request){
        $mail = OrderMail::create($request->all());    
        $data = ['mail' => $mail];
        Mail::send('sendmail', $data, function ($message) use ($mail){
            $message->from('admin@mail.com','Australiancarts');
            $message->to($mail->email, 'Buyer')
            ->subject('Australian Cart Supports');
        });
        alert()->success('Mail Sent Successfully', 'Done');
      
        return redirect()->route('admin.new.mail');
    }
}

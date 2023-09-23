@extends('layout.front')

@section('content')
@include('layout.user')


<div class="main-content-area clearfix">
    <section class="section-padding no-top gray">
       <!-- Main Container -->
       <div class="container">
          <!-- Row -->
          <div class="row">
             <!-- Middle Content Area -->
             <div class="col-md-12 col-xs-12 col-sm-12">
                <section class="search-result-item">
                    <div>
                        <table id="mytable" class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>phone</th>
                                    <th>Address</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key => $order)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->qty}}</td>
                                    <td>{{$order->subtotal}}</td>
                                    <td>
                                        <a href="{{route('user.order.show',$order->id)}}" class="btn btn-sm btn-info">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
             </div>
          </div>
       </div>
    </section>
</div>
    
@endsection
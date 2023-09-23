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
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>SubTotal</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderitems as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->product->name}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->product->price}}</td>
                                    <td>{{$item->product->price * $item->qty}}</td>
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
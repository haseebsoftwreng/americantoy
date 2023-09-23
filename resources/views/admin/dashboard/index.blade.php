@extends('layout.admin')

@section('content')

<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">AustralianCart Admin</a></li>
        <li class="breadcrumb-item active"> Dashboard</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-chart-area'></i> Marketing <span class='fw-300'>Dashboard</span>
            <small>
            </small>
        </h1>
        {{-- <div class="d-flex mr-4">
            <div class="mr-2">
                <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#967bbd&quot;, &quot;#ccbfdf&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }">7/10</span>
            </div>
            <div>
                <label class="fs-sm mb-0 mt-2 mt-md-0">New Sessions</label>
                <h4 class="font-weight-bold mb-0">70.60%</h4>
            </div>
        </div>
        <div class="d-flex mr-0">
            <div class="mr-2">
                <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#2196F3&quot;, &quot;#9acffa&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }">3/10</span>
            </div>
            <div>
                <label class="fs-sm mb-0 mt-2 mt-md-0">Page Views</label>
                <h4 class="font-weight-bold mb-0">14,134</h4>
            </div>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <a href="{{route('admin.category.index')}}"> 
                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500 text-white">
                            {{ App\Models\Category::all()->count() }}
                            <small class="m-0 l-h-n text-white"> Categorys</small>
                        </h3>
                    </div>
            </a>
                <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{route('admin.product.index')}}">
                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500 text-white">
                            {{ App\Models\Product::all()->count() }}
                            <small class="m-0 l-h-n text-white">Products</small>
                        </h3>
                    </div>
                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                </div>
            </a>
           
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{route('admin.order.create')}}">
                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500 text-white">
                            {{ App\Models\Order::all()->count() }}
                            <small class="m-0 l-h-n">Order</small>
                        </h3>
                    </div>
                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                </div>
            </a>
            
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{route('admin.order.index')}}">
                <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                            {{ App\Models\Order::where('completed',true)->count() }}
                            <small class="m-0 l-h-n text-white">Completed Order</small>
                        </h3>
                    </div>
                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                </div>
            </a>
            
        </div>
    </div>
   
</main>
@endsection
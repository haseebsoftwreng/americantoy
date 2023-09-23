@extends('layout.admin')

@section('content')

<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"> Order Detail</li>
    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
</ol>
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i>Order Details
    </h1>
</div>

<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                     Order <span class="fw-300"><i>Detail</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-primary btn-sm" data-toggle="dropdown">Table Style</button>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right position-absolute pos-top">
                        <button class="dropdown-item active" data-action="toggle" data-class="table-bordered" data-target="#dt-basic-example"> Bordered Table </button>
                        <button class="dropdown-item" data-action="toggle" data-class="table-sm" data-target="#dt-basic-example"> Smaller Table </button>
                        <button class="dropdown-item" data-action="toggle" data-class="table-dark" data-target="#dt-basic-example"> Table Dark </button>
                        <button class="dropdown-item active" data-action="toggle" data-class="table-hover" data-target="#dt-basic-example"> Table Hover </button>
                        <button class="dropdown-item active" data-action="toggle" data-class="table-stripe" data-target="#dt-basic-example"> Table Stripped </button>
                        <div class="dropdown-divider m-0"></div>
                        <div class="dropdown-multilevel dropdown-multilevel-left">
                            <div class="dropdown-item">
                                tbody color
                            </div>
                            <div class="dropdown-menu no-transition-delay">
                                <div class="js-tbody-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap" style="width: 15.9rem; padding: 0.5rem">
                                    <a href="javascript:void(0);" data-bg="bg-primary-100" class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-200" class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-300" class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-400" class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-500" class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-600" class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-700" class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-800" class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-900" class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-100" class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-200" class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-300" class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-400" class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-500" class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-600" class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-700" class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-800" class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-900" class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-100" class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-200" class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-300" class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-400" class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-500" class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-600" class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-700" class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-800" class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-900" class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-100" class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-200" class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-300" class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-400" class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-500" class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-600" class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-700" class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-800" class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-900" class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-100" class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-200" class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-300" class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-400" class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-500" class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-600" class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-700" class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-800" class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-900" class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-100" class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-200" class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-300" class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-400" class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-500" class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-600" class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-700" class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-800" class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-900" class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="" class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-multilevel dropdown-multilevel-left">
                            <div class="dropdown-item">
                                thead color
                            </div>
                            <div class="dropdown-menu no-transition-delay">
                                <div class="js-thead-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap" style="width: 15.9rem; padding: 0.5rem">
                                    <a href="javascript:void(0);" data-bg="bg-primary-100" class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-200" class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-300" class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-400" class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-500" class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-600" class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-700" class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-800" class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-primary-900" class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-100" class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-200" class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-300" class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-400" class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-500" class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-600" class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-700" class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-800" class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-success-900" class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-100" class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-200" class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-300" class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-400" class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-500" class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-600" class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-700" class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-800" class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-info-900" class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-100" class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-200" class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-300" class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-400" class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-500" class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-600" class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-700" class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-800" class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-danger-900" class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-100" class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-200" class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-300" class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-400" class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-500" class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-600" class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-700" class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-800" class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-warning-900" class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-100" class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-200" class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-300" class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-400" class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-500" class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-600" class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-700" class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-800" class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="bg-fusion-900" class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                    <a href="javascript:void(0);" data-bg="" class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0" style="margin:1px"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                   
                    <!-- datatable start -->
                    <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
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
                            @foreach ($orderitems as $key=> $item)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$item->product->name}}</td>
                                <td>
                                   
                                    <a target="_blank" href="{{$item->product->link}}"><button type="button"
                                            class="btn btn-warning btn-sm waves-effect"
                                            id="{{$item->id}}">
                                            <span class="fal  fa-edit mr-1"></span>
                                            Link
                                        </button></a>
                                </td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->product->price}}</td>
                                <td>{{$item->product->price * $item->qty}}</td>
                            </tr>
                            @endforeach
                    </table>
                    <!-- datatable end -->
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection

@section('scripts')


<script>
    /* demo scripts for change table color */
    /* change background */


    $(document).ready(function()
    {
        $('#dt-basic-example').dataTable(
        {
            responsive: true
        });

        $('.js-thead-colors a').on('click', function()
        {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
        });

        $('.js-tbody-colors a').on('click', function()
        {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
        });

        $('body').on('click', '.edit-btn', function(){
            let id = $(this).attr('id');
            let name = $(this).attr('name');
            $('#name').val(name);
            $('#myForm').attr('action','{{route("admin.category.update",'')}}' + '/' +id);
        });

        $('body').on('click', '.deleteBtn', function(){
            let id = $(this).attr('id');
            $('#id').val(id);
            $('#deleteForm').attr('action','{{route('admin.product.destroy','')}}' +'/'+id);
        });

    });

</script>

    
@endsection
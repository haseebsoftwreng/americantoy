@extends('layout.admin')

@section('content')

<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">Attribute Listing</li>
    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
</ol>
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i>Attributes
    </h1>
</div>


<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Attributes <span class="fw-300"><i>listing</i></span>
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
                                <th>Category Name</th>
                                <th>Name</th>
                                <th>Handler</th>
                                <th>Type</th>
                                <th>Add Option</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attributes as $key=> $attribute)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$attribute->category->name}}</td>
                                <td>{{$attribute->name}}</td>
                                <td>{{$attribute->handler}}</td>
                                <td>{{$attribute->type}}</td>
                                <th>
                                    @if ($attribute->type == 'select')
                                        <a href="{{route('admin.attribute.show',$attribute->id)}}">
                                            <button type="button" class="btn btn-sm btn-outline-primary waves-effect waves-themed">
                                            <span class="fal  fa-plus mr-1"></span>
                                            Add Option
                                            </button>
                                        </a>
                                    @endif
                                </th>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info waves-effect waves-themed edit-btn" data-toggle="modal" data-target="#edit_modal" name="{{$attribute->name}}" handler="{{$attribute->handler}}" Atype="{{$attribute->type}}" id="{{$attribute->id}}" category_id="{{$attribute->category_id}}">
                                        <span class="fal  fa-edit mr-1"></span>
                                        Edit
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-danger waves-effect waves-themed deleteBtn" data-toggle="modal" data-target="#delete_modal" id="{{$attribute->id}}">
                                        <span class="fal fa-times mr-1"></span>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    <!-- datatable end -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
            
            <div class="modal-header">
                <h4 class="modal-title">
                    Warning
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                   Edit Attribute
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="name" class="col-form-label">Cayegory</label>
                      <select  name="category_id" class="form-control" id="category_id">
                          @foreach (App\Models\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name" class="col-form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="handler" class="col-form-label">Handler</label>
                      <input type="text" name="handler" class="form-control" id="handler">
                    </div>
                    <div class="form-group">
                      <label for="type" class="col-form-label">Type</label>
                      <select name="type" class="form-control" id="type">
                          <option value="input">Input</option>
                          <option value="select">Select</option>
                      </select>
                    </div>
                  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
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
            let handler = $(this).attr('handler');
            let type = $(this).attr('Atype');
            let category_id = $(this).attr('category_id');
            $('#name').val(name);
            $('#handler').val(handler);
            $('#type').val(type);
            $('#category_id').val(category_id);
            $('#myForm').attr('action','{{route("admin.attribute.update",'')}}' + '/' +id);
        });

        $('body').on('click', '.deleteBtn', function(){
            let id = $(this).attr('id');
            $('#id').val(id);
            $('#deleteForm').attr('action','{{route('admin.attribute.destroy','')}}' +'/'+id);
        });

    });

</script>

    
@endsection
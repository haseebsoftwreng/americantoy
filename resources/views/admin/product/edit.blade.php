@extends('layout.admin')

@section('content')

<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">Edit Product</li>
    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
</ol>
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i> Edit Product
    </h1>
</div>
<div class="row">
    <div class="col-xl-6">

        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                    Edit <span class="fw-300"><i>Product</i></span>
                </h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form autocomplete="off" novalidate action="{{route('admin.product.update', $product->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="single-default">
                                Select Category
                            </label>
                            <select name="category_id" class="select2 form-control w-100" id="category_id">
                                <option selected disabled>Select Category</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option {{$product->category_id == $category->id? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                 
                            </select>
                        </div>
                        @foreach (App\Models\Attribute::all() as $attribute)

                        @php($data = $attribute->selectedValue($product))

                        @if($data)
                            @if ($attribute->type == 'select')
                                @include('admin.product.selected.select')
                            @else
                                @include('admin.product.selected.otherinputs')
                            @endif
                        @else
                            @if ($attribute->type == 'select')
                                @include('admin.product.normal.select')
                            @else
                                @include('admin.product.normal.otherinputs')
                            @endif
                        @endif

                        @endforeach
                       
                        <div class="form-group">
                            <label for="price">Discounted Price</label>
                            <input type="" name="price" class="form-control" id="price" placeholder="Price" value="{{$product->price}}">
                        </div> 
                        <div class="form-group">
                            <label for="price">Actual Price</label>
                            <input type="number" name="oldprice" class="form-control" id="price" placeholder="Price" value="{{$product->oldprice}}">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" class="form-control" id="stock" placeholder="Stock Quantity" value="{{$product->stock}}">
                        </div>
                        <div class="form-group">
                            <label for="image">Images</label>
                            <input type="file" name="images[]" class="form-control" id="image" multiple>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="single-default">
                                Product Description
                            </label>
                            <textarea class="form-control w-100" rows="5" name="description" id="single-default">{{$product->description}}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="number" name="order" class="form-control" id="order" placeholder="Order of Product" value="{{$product->order}}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Products <span class="fw-300"><i>Images</i></span>
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
                                <th>Image</th>
                                <th>Default</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product->images as $key=> $image)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="{{asset($image->path)}}" alt="image" height="60" width="60"></td>
                                <td>
                                    @if ($image->order == '1')
                                        Selected
                                        
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.image.edit',$image->id)}}"><button type="submit" class="btn btn-sm btn-outline-primary waves-effect waves-themed">
                                        <span class="fal fa-edit mr-1"></span>
                                        Cover Photo
                                    </button></a>
                                </td>
                                <td>
                                    <form action="{{route('admin.image.destroy',$image->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger waves-effect waves-themed">
                                            <span class="fal fa-times mr-1"></span>
                                            Delete
                                        </button>

                                    </form>
                                    
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#category_id').on('change', function() {
            id = this.value;
            fetchAttribute(id);

            });
            function fetchAttribute(id){
                $.ajax({
                    url: "{{route('admin.fetch_attribute')}}",
                    method: 'post',
                    data: {
                        id: id
                    },
                    success: function(result){
                    console.log(result);
                        $('.attributes').hide();
                        $('.makedisable').prop('disabled',true);
                        

                    for (i=0;i<result.length;i++){
                        $('#'+result[i].id).show();
                        $('#inp-'+result[i].id).prop('disabled',false);

                    
                        }
                    
                    }
                });
            }     
            $('#category_id').change();
        });
    </script>
@endsection


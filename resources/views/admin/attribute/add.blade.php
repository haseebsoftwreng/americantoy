@extends('layout.admin')

@section('content')

<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">Add Attribute</li>
    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
</ol>
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i> Add Attribute
    </h1>
</div>
<div class="row">
    <div class="col-xl-6">

        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                    ADD <span class="fw-300"><i>Attribute</i></span>
                </h2>
                {{-- <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div> --}}
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form  action="{{route('admin.attribute.store')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="single-default">
                                Select Category
                            </label>
                            <select name="category_id" class="select2 form-control w-100" id="single-default" required>
                               
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                 
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                        </div>
                       
                        <div class="form-group">
                            <label for="inputName">Handler</label>
                            <input type="text" name="handler" class="form-control" id="inputName" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="single-default">
                                Select Type
                            </label>
                            <select class="form-control w-100" name="type" id="single-default" required>
                                <option value="input">Input</option>                                 
                                <option value="select">Select</option>                                 
                            </select>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection


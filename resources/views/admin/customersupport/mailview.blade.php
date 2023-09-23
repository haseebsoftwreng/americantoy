@extends('layout.admin')

@section('content')

<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">Send Mail</li>
    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
</ol>
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i> Send Mail
    </h1>
</div>
<div class="row">
    <div class="col-xl-6">
       
        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                    Send <span class="fw-300">Mail<i></i></span>
                </h2>
                {{-- <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div> --}}
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form autocomplete="off"  action="{{route('admin.new.mail.send')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputName">Customer Email</label>
                            <input type="hidden" name="order_id" value="{{$order->id}}">
                            <input type="email" name="email" class="form-control" id="inputName" value="{{$order->email}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Traking No</label>
                            <input type="text" name="tracking_no" class="form-control" id="">
                        </div>    
                        
                        <div class="form-group">
                            <label for="message">Write Mail</label>
                            <textarea name="message" id="message" class="form-control summernote" rows="6" placeholder="Write Mail" required></textarea>
                        </div>    
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
  
</div>
@endsection
@extends('layout.admin')

@section('content')

<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item">Add Product</li>
    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
</ol>
<div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i> Add Product
    </h1>
</div>
<div class="row">
    <div class="col-xl-6">

        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                    ADD <span class="fw-300"><i>Product</i></span>
                </h2>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form autocomplete="off"  action="{{route('admin.product.store')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputName">Link of the Product</label>
                            <input type="text" name="link" class="form-control" id="inputlink" placeholder="Link">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="multiple-basic">
                                Select Product Color
                            </label>
                            <select name="color" class="select2 form-control" id="multiple-basic" >
                               
                               
                                <optgroup label="Select Colors">
                                    <option value="none">None</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                    <option value="blue">Blue</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Red">Red</option>
                                    <option value="Green">Green</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Brown">Brown</option>
                                    <option value="Purple">Purple</option>
                                    <option value="Navy blue">Navy blue</option>
                                    <option value="Gray">Gray</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Gold">Gold</option>
                                    

                                </optgroup>
                                
                            </select>
                           
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="single-default">
                                Select Category
                            </label>
                            <select name="category_id" class="select2 form-control w-100" id="category_id" required>
                                <option selected disabled>Select Category</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                 
                            </select>
                        </div>
                        @foreach (App\Models\Attribute::all() as $attribute)
                            @if ($attribute->type == 'select')
                                <div class="form-group attributes" style="display: none">
                                    <label class="form-label" for="single-default">
                                        {{$attribute->name}}
                                    </label>
                                    <select class="form-control w-100 makedisable" name="attrs[{{$attribute->id}}]" id="single-default" id="inp-{{$attribute->id}}" required>
                                        @foreach ($attribute->options as $option)
                                        <option value="{{$option->option}}">{{$option->option}}</option>
                                        @endforeach                               
                                    </select>

                                </div>
                            @else 
                                <div class="form-group attributes" id="{{$attribute->id}}" style="display: none">
                                    <label for="price">{{$attribute->name}}</label>
                                    <input type="text" name="attrs[{{$attribute->id}}]" class="form-control makedisable" id="inp-{{$attribute->id}}" placeholder="{{$attribute->name}}" required>
                                </div>
                            @endif
                        @endforeach
                       
                        <div class="form-group">
                            <label for="price">Discounted Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Price" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Actual Price</label>
                            <input type="number" name="oldprice" class="form-control" id="price" placeholder="Price" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" class="form-control" id="stock" placeholder="Stock Quantity">
                        </div> --}}
                        <div class="form-group">
                            <label for="image">Images</label>
                            <input type="file" name="images[]" class="form-control" id="image" multiple required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="single-default">
                                Product Description
                            </label>
                            <textarea class="form-control w-100" rows="5" name="description" id="single-default"></textarea>

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
        });
    </script>
@endsection


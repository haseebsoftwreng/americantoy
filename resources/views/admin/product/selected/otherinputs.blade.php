<div class="form-group attributes" id="{{$attribute->id}}" style="display: none">
    <label for="price">{{$attribute->name}}</label>
    <input type="text" name="attrs[{{$attribute->id}}]" class="form-control makedisable" id="inp-{{$attribute->id}}" placeholder="{{$attribute->name}}" value="{{$data->value}}">
</div>
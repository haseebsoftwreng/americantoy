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
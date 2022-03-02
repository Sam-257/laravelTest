<div class="form-group">
    <label for="Name">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="" value = "{{old('user_name')}}" class="form-control" placeholder="" aria-describedby="helpId">
    <small id="helpId" class="text-danger">
        {{-- @error('user_name')
            {{$message}}
        @enderror --}}
        {{$demo}}
    </small>
</div>
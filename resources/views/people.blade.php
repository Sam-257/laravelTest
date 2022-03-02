@extends('layout.main')
@push('title')
    <title> {{$isRegister? 'Register' : 'Update'}} </title>
@endpush

@section('main-section')
    <div class="jumbotron text-center">
        <h2 class="display-5">{{$isRegister? 'Register' : 'Update'}} Page</h2>
    </div>
    <form action="{{$url}}" method="post">
        @csrf
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="people_name" id="" value = "{{$isRegister? old('people_name'):$person->people_name}}" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('people_name')
                    {{$message}}
                @enderror
            </small>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="people_email" id="" value = "{{$isRegister? old('people_email'):$person->people_email}}" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('people_email')
                    {{$message}}
                @enderror
            </small>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="people_password" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('people_password')
                    {{$message}}
                @enderror
            </small>
        </div>
        <div class="form-group">
            <label for="Confirm Password">Confirm Password</label>
            <input type="password" name="people_confirm_password" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('people_confirm_password')
                    {{$message}}
                @enderror
            </small>
        </div>
        
        <div class="form-group">
            <label for="Gender">Gender</label>
            <div class="form-check">
                <label class="form-check-label" style="padding-left: 40px" >
                    <input class="form-check-input" type="radio" name="people_gender" id="" value="M"
                    {{(($isRegister?old('people_gender'):$person->people_gender) =='M')?'checked':''}}> Male
                </label>
                <label class="form-check-label" style="padding-left: 40px">
                    <input class="form-check-input" type="radio" name="people_gender" id="" value="F"
                    {{(($isRegister?old('people_gender'):$person->people_gender) =='F')?'checked':''}}> Female
                </label>
                <label class="form-check-label" style="padding-left: 40px">
                    <input class="form-check-input" type="radio" name="people_gender" id="" value="O"
                    {{(($isRegister?old('people_gender'):$person->people_gender) =='O')?'checked':''}}> Other
                </label>
            </div> 
            <small id="helpId" class="text-danger">
                @error('people_gender')
                    {{$message}}
                @enderror
            </small>
        </div>
        <div class="form-group">
          <label for="">Address</label>
          <textarea class="form-control" name="people_address" id="" rows="3">{{$isRegister? old('people_address'):$person->people_address}}</textarea>
          <small id="helpId" class="text-danger">
            @error('people_address')
                {{$message}}
            @enderror
        </small>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">{{$isRegister? 'Register' : 'Update'}}</button>
        </div>
    </form>
    
@endsection
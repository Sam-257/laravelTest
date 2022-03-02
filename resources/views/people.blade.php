@extends('layout.main')
@push('title')
    <title> People Register </title>
@endpush

@section('main-section')
    <div class="jumbotron text-center">
        <h2 class="display-5">People Register Page</h2>
    </div>
    <form action="{{url('/')}}/people" method="post">
        @csrf
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="people_name" id="" value = "{{old('people_name')}}" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('people_name')
                    {{$message}}
                @enderror
            </small>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="people_email" id="" value = "{{old('people_email')}}" class="form-control" placeholder="" aria-describedby="helpId">
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
                    <input class="form-check-input" type="radio" name="people_gender" id="" value="M"> Male
                </label>
                <label class="form-check-label" style="padding-left: 40px">
                    <input class="form-check-input" type="radio" name="people_gender" id="" value="F"> Female
                </label>
                <label class="form-check-label" style="padding-left: 40px">
                    <input class="form-check-input" type="radio" name="people_gender" id="" value="O"> Other
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
          <textarea class="form-control" name="people_address" id="" rows="3">{{old('people_address')}}</textarea>
          <small id="helpId" class="text-danger">
            @error('people_address')
                {{$message}}
            @enderror
        </small>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    
@endsection
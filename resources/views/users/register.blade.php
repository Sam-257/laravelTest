@extends('layout.main')
@push('title')
    <title> Register </title>
@endpush

@section('main-section')
    <div class="jumbotron text-center">
        <h2 class="display-5">User Register Page</h2>
    </div>
    <form action="{{url('/')}}/users/register" method="post">
        @csrf
        {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
        </pre> --}}
        {{-- Using a component two files are created using 
            php artisan make:component ComponentName
            1. app/view/component --- class file
            2. resources/view/components  --- out reusable component 
            x represents component --}}
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="user_name" id="" value = "{{old('user_name')}}" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('user_name')
                    {{$message}}
                @enderror
            </small>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="user_email" id="" value = "{{old('user_email')}}" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('user_email')
                    {{$message}}
                @enderror
            </small>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </small>
        </div>
        <div class="form-group">
            <label for="Confirm Password">Confirm Password</label>
            <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-danger">
                @error('password_confirmation')
                    {{$message}}
                @enderror
            </small>
        </div>
        
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    
@endsection


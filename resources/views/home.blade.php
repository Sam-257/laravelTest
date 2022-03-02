@extends('layout.main')

{{-- pushes into the stack named 'title' --}}
@push('title')
    <title> Home </title>
@endpush
{{-- Section name is same as that used in yield  --}}
@section('main-section')
    <div class="container jumbotron text-center">
        <h1>Home Page </h1>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">MVC Models Views Controllers</h4>
                <p class="card-text">Laravel uses MVC architecture</p>
            </div>
        </div>
    </div>
@endsection      
    
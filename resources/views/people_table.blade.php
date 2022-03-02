@extends('layout.main')

@push('title')
    <title> View Table </title>
@endpush

{{-- Section name is same as that used in yield  --}}
@section('main-section')
    {{-- <pre>
        {{ print_r($people->all());}}
    </pre> --}}
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)
            <tr>
                <td>{{$person->people_name}}</td>
                <td>{{$person->people_email}}</td>
                <td>
                    @if($person->people_gender == 'M')
                        Male
                    @elseif($person->people_gender == 'F') 
                        Female
                    @else
                        Other
                    @endif
                </td>
                <td>{{$person->people_address}}</td>
                <td>
                    <a href = '{{url('/people_edit/')}}/{{$person->people_id}}'>
                    <button type="button" class="btn btn-outline-primary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href = '{{url('/people_delete/')}}/{{$person->people_id}}'>
                    <button type="button" class="btn btn-outline-danger">Delete</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection  



@extends('admin.master')

@section('content')

    <h1>Parcel Details</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Address</th>
        <th scope="col">Receiver</th>
        <th scope="col">Receiver Address</th>
         <th scope="col">Contact</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

        @foreach($details as $key=>$list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <td>{{$list->address}}</td>
        <td>{{$list->receiver}}</td>
        <td>{{$list->rec_address}}</td>
        <td>{{$list->contact}}</td>

    </tr>

    @endforeach

    </tbody>
</table>
@endsection

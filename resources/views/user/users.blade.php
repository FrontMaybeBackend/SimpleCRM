@extends('layouts.app')

@section('content')

    <table class="table ">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user -> id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td> <button class="btn btn-danger" data-id="{{$user->id}}">Delete</button> </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

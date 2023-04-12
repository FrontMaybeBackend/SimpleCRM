@extends('layouts.app')

@section('content')

    <table class="table w-75 ">
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
            <form action={{route('users/destroy', $user->id)}} method="POST">
                @csrf
                @method('DELETE')
            <td> <button class="btn btn-danger">Delete</button> </td>
            </form>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

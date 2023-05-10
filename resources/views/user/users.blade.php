@extends('layouts.app')

@section('content')
    <div class="col py-3" >
        <div class="container ">
            <div class="row ">
                <div class="col-md-8 bg-white border border-dark" id="table">
                    <div class="col m-2 "> Users List
                        <hr>
                        <div class="table-responsive" >
    <table class="table text-nowrap ">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user -> id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname}}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->email }}</td>
                <form action={{route('users.destroy', $user)}} method="POST">
                    @csrf
                    @method('DELETE')
                    <td> <button  id="delete" class="btn btn-danger" data-user-name="{{$user->name}}">X</button> </td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
                        </div>
    {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('javascript')

    const deleteButtons = document.querySelectorAll('button[data-user-name]');
    deleteButtons.forEach(button => button.addEventListener('click', deleteUser));

    function deleteUser(event){
    const userName = event.target.dataset.userName;
    alert(`You have removed ${userName}`);
    };
    @endsection

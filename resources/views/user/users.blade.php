@extends('layouts.app')

@section('content')
    <div class="col py-3">
        <div class="container ">
            <div class="row ">
                <div class="col-md-8 bg-white border border-dark">
                    <div class="col m-2 "> Users List
                        <hr>
    <table class="table ">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Company</th>
            <th scope="col">Vat</th>
            <th scope="col">Adress</th>
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
                <form action={{route('users.destroy', $user)}} method="POST">
                    @csrf
                    @method('DELETE')
                    <td> <button  id="delete" class="btn btn-danger" data-user-name="{{$user->name}}">Delete</button> </td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
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

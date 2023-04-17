@extends('layouts.app')

@section('content')

    <form action="{{route('index.create')}}" method="GET">
        @csrf
<button class="btn-success btn">Create client</button>
    </form>
            <div class="col py-3">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-8 bg-white border border-dark">
                            <div class="col m-2 "> Clients List
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
                                    @foreach($clients as $client)
                                    <tr>
                                        <th scope="row">{{ $client -> id }}</th>
                                        <td>{{ $client->company }}</td>
                                        <td>{{ $client->vat }}</td>
                                        <td>{{ $client->address }}</td>
                                        <form action="{{route('index.destroy', $client->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <td> <button class="btn btn-danger" >Delete</button> </td>
                                        </form>
                                        <form action="{{route('edit', $client->id)}}" method="GET">
                                            @csrf
                                            <td> <button class="btn btn-info" >Edit</button> </td>
                                        </form>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

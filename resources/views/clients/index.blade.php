@extends('layouts.app')

@section('content')

    <form action="{{route('index.create')}}" method="GET">
        @csrf
<button class="btn-success btn">Create client</button>
    </form>
            <div class="col py-3">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-8 bg-white border border-dark" id="table">
                            <div class="col m-2 "> Clients List
                                <hr>
                                <div class="table-responsive" >
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
                                        <td>
                                        <form action="{{route('index.destroy', $client)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                       <button class="btn btn-danger action-button" >X</button>
                                        </form>
                                        </td>
                                        <td>
                                            <a class="" href="{{route('edit', $client)}}">
                                                <button type="button" class="btn btn-primary action-button">E</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                                {{ $clients->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

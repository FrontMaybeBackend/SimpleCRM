 @extends('layouts.app')

    @section('content')

        <form action="{{route('project.create')}}" method="GET">
            @csrf
            <button class="btn-success btn">Create project</button>
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
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Client</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $project ->title }}</th>
                                        <td>{{ $project->description }}</td>
                                        <td>{{ $project->deadline}}</td>
                                        <td>{{ $project->assigned_client }}</td>
                                        <td>{{ $project->assigned_user }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $projects->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    @endsection


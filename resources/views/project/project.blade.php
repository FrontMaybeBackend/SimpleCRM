@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">SimpleCRM</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users') }}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Users</span> </a>
                        </li>
                        <li>
                            <a href="{{route('index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Clients</span></a>
                        </li>
                        <li>
                            <a href="{{route('project')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Projects</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Tasks</span> </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>




            <form class="w-75 m-3 h-100" style="background-color: white" method="POST">
                @csrf
            <p class="m-3">Create project</p>
           <hr class="w-100">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            @error('form-label')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label class="form-label" id="title" name="title" for="title">Title</label>
                            <input type="text" id="title" class="form-control" />
                        </div>
                    </div>
                </div>


                <!-- Text input -->
                <div class="form-outline mb-4">
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="description">Description</label>
                    <textarea class="form-control"  id="description" name="description" ></textarea>
                </div>


                <!-- Date input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example4">Deadline</label>
                    <input type="date" id="form6Example4" class="form-control" />

                </div>

                <!-- Assigned user input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example5">Assigned user</label>
                    <select class="form-select" id="form6Example5">
                        <option class="selected">Users</option>
                        @foreach($users as $user)
                        <option value="1">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Assigned client input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example6">Assigned client</label>
                    <select class="form-select" id="form6Example6">
                        <option class="selected">Clients</option>
                        @foreach($clients as $client)
                            <option value="1">{{$client->company}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
            </form>

@endsection

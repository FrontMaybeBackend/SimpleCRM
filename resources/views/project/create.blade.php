@extends('layouts.app')

@section('content')


    <form action="{{route('project.store')}}" class="w-75 m-3 h-100" style="background-color: white" method="POST">
        @csrf
        <p class=" p-3">Create project</p>
        <hr>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label m-2" id="title" name="title" for="title">Title
                    </label>
                    <input id="title" type="text"  name="title" class=" form-control @error('title') is-invalid @enderror"  value="{{ old('title') }}">
                    @error('title')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">

            <label  class="m-2" for="description" >Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  ></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>


        <!-- Date input -->
        <div class="form-outline mb-4">
            <label class="form-label m-2" for="deadline">Deadline</label>
            <input type="date" id="deadline" class="form-control @error('deadline') is-invalid @enderror" name="deadline" value="{{old('deadline')}}" />
            @error('deadline')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <!-- Assigned user input -->
        <div class="form-outline mb-4">
            <label class="form-label m-2" for="assigned_user">Assigned user</label>
            <select class="form-select @error('assigned_user') is-invalid @enderror" id="assigned_user" name="assigned_user" value="{{old('assigned_user')}}">
                <option class="selected">Users</option>
                @foreach($users as $user)
                    <option value={{$user->id}}>{{$user->name}}</option>
                @endforeach
            </select>
            @error('assigned_user')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <!-- Assigned client input -->
        <div class="form-outline mb-4">
            <label class="form-label m-2" for="assigned_client">Assigned client</label>
            <select class="form-select @error('assigned_client') is-invalid @enderror" id="assigned_client" name="assigned_client" value="{{old('assigned_client')}}" id="assigned_client">
                <option class="selected">Clients</option>
                @foreach($clients as $client)
                    <option value={{$client->id}}>{{$client->company}}</option>
                @endforeach
            </select>
            @error('assigned_client')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4 m-2">Save</button>
    </form>

@endsection


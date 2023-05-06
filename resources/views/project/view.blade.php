@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Project View</div>

                    <div class="card-body">

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text"  class="form-control "name="title" value="{{$projects->title}}" readonly >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                <textarea id="description"   class="form-control" name="description" readonly >{{ $projects->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="deadline" class="col-md-4 col-form-label text-md-end">Deadline</label>

                        <div class="col-md-6">
                            <input id="deadline"   class="form-control" name="deadline" value="{{ $projects->deadline }}" readonly >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="user" class="col-md-4 col-form-label text-md-end">User</label>
                        <div class="col-md-6">
                            <input id="user"   class="form-control" name="user" value="{{ $projects->assigned_user }}" readonly >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="client" class="col-md-4 col-form-label text-md-end">Client</label>

                        <div class="col-md-6">
                            <input id="client"   class="form-control" name="client" value="{{ $projects->assigned_client }}" readonly >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

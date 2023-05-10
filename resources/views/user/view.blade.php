@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User View</div>

                    <div class="card-body">

                        <div class="row mb-3">
                            <label for="Name" class="col-md-4 col-form-label text-md-end">Name</label>

                            <div class="col-md-6">
                                <input id="Name" type="text"  class="form-control "name="name" value="{{$users->name}}" readonly >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">Surname</label>

                            <div class="col-md-6">
                                <textarea id="surname"   class="form-control" name="surname" readonly >{{ $users->surname }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                        <div class="col-md-6">
                            <input id="email"   class="form-control" name="email" value="{{ $users->email }}" readonly >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="phone-number" class="col-md-4 col-form-label text-md-end">Phone Number</label>

                        <div class="col-md-6">
                            <input id="phone-number"   class="form-control" name=phone-number" value="{{ $users->phone_number }}" readonly >
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

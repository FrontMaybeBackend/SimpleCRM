@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('index.update', ['client' => $client]) }}">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $client->id }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Client edit</div>

                    <div class="card-body">

                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-form-label text-md-end">Company</label>

                                <div class="col-md-6">
                                    <input id="company" type="text" maxlength="500" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ $client->company }}"  autofocus>

                                    @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Vat</label>

                                <div class="col-md-6">
                                    <textarea id="vat" type="text" maxlength="1500" class="form-control @error('vat') is-invalid @enderror" name="vat"  autofocus>{{ $client->vat }}"</textarea>

                                    @error('vat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>

                                <div class="col-md-6">
                                    <input id="address"   class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $client->address }}"  autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edit
                                    </button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection

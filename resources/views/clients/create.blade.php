@extends('layouts.app')

@section('content')


    <form class="w-75 m-3 h-100" style="background-color: white" action="{{ route('index.store') }}" method="POST">
        @csrf
        <p class=" p-3">Create Client</p>
        <hr>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label m-2" id="company" name="company" for="company">Company
                    </label>
                    <input id="company" type="company"  name="company" class=" form-control @error('company') is-invalid @enderror">
                    @error('company')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">

            <label  class="m-2" for="vat" >Vat</label>
            <textarea class="form-control @error('vat') is-invalid @enderror" name="vat"   ></textarea>
            @error('vat')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>


        <!-- Date input -->
        <div class="form-outline mb-4">
            <label class="form-label m-2" for="address">Address</label>
            <input type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address"  />
            @error('address')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4 m-2">Save</button>
    </form>

@endsection

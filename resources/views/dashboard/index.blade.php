@php use Illuminate\Support\Facades\DB; @endphp
@extends('layouts.app')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
    <h1>Dashboard</h1>
    <div class="row justify-content-between p-5 ">
        <div class="col-4 ">
            <div class="col text-center p-2  border-start border-success border-5 bg-white rounded-2 ">
                <img class="" src="{{url('/images/user3.png')}}" alt="usersicon">
                <p class="lead">Users:</p>
                <p class="lead"> {{ $users = DB::table('users')->count() }} </p>
            </div>
        </div>
        <div class="col-4  ">
            <div class="col  text-center p-2  border-start border-success border-5 bg-white rounded-2">
                <img class="" src="{{url('/images/clients.jpg')}}" alt="usersicon">
                <p class="lead" >Clients:</p>
                <p class="lead"> {{ $clients = DB::table('clients')->count() }}</p>
            </div>
        </div>
        <div class="col-4 ">
            <div class="col text-center p-2  border-start  border-success border-5 bg-white  rounded-2">
                <img class="" src="{{url('/images/project.png')}}" alt="projecticon">
                <p class="lead" >Projects:</p>
                <p class="lead"> {{ $projects = DB::table('projects')->count() }}</p>
            </div>
        </div>
    </div>
@endsection

@php use Illuminate\Support\Facades\DB; @endphp
@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{url('dashboard.css')}}">
</head>
@section('content')
    <h1>Dashboard</h1>
    <div class="row justify-content-between p-5 ">
        <div class="col-4 ">
            <div class="col text-center p-2  border-start border-success border-5 bg-white rounded-2 ">
                <img class="" src="{{url('/images/user3.png')}}" alt="usersicon">
                <p class="lead">Users:</p>
                <p class="lead"> {{ $users = DB::table('users')->count() }} </p>
                <button class="btn btn-info">Check</button>
            </div>
        </div>
        <div class="col-4  ">
            <div class="col  text-center p-2  border-start border-success border-5 bg-white rounded-2">
                <img class="" src="{{url('/images/clients.jpg')}}" alt="usersicon">
                <p class="lead" >Clients:</p>
                <p class="lead"> {{ $clients = DB::table('clients')->count() }}</p>
                <button class="btn btn-info">Check</button>
            </div>
        </div>
        <div class="col-4 ">
            <div class="col text-center p-2  border-start border-success border-5 bg-white  rounded-2">
                <img class="" src="{{url('/images/project.png')}}" alt="projecticon">
                <p class="lead" >Projects:</p>
                <p class="lead"> {{ $projects = DB::table('projects')->count() }}</p>
                <button class="btn btn-info">Check</button>
            </div>
        </div>
    </div>
@endsection

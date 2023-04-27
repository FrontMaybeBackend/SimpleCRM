@php use Illuminate\Support\Facades\DB; @endphp
@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <div class="container  p-5">
        <div class="row">
            <div class="col text-center p-2 border-dark border">
                <p>Users:</p>
                {{ $users = DB::table('users')->count() }}
            </div>
            <div class="col  text-center p-2 border-dark border">
                <p>Clients:</p>
                {{ $clients = DB::table('clients')->count() }}
            </div>
            <div class="col text-center p-2 border-dark border ">
                <p>Projects:</p>
                {{ $projects = DB::table('projects')->count() }}
            </div>
        </div>
    </div>

@endsection

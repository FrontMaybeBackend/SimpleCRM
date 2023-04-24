<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Project\ProjectCreateRequest;
use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function show(): Renderable
    {

        return view('project/project', [
            'users' => User::all(),
            'clients' => Client::all(),
        ]);
    }


    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('project/project');
    }


    public function store(ProjectCreateRequest $request): RedirectResponse
    {

        Project::create($request->validated());
        return redirect()->route('index');
    }


}

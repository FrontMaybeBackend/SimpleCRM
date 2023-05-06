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


    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */


     public function view(Project $project): View
     {
         return view('project.view',[
             'projects'=>$project
         ]);
     }

        public function index(): View
        {
            return view('project.index', [
                'projects' => Project::paginate(5),
            ]);
        }



    public function create(): View
    {
        return view('project.create',[
            'users'=>User::all(),
            'clients'=>Client::all(),
        ]);
    }


    public function store(ProjectCreateRequest $request): RedirectResponse
    {
        Project::create($request->validated());
        return redirect()->route('project.index');
    }


}

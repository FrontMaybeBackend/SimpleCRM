<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(): Renderable
    {

        return view('dashboard/show', [
            'projects' => Project::all()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\View\View;
use SebastianBergmann\FileIterator\Factory;

class DashboardController extends Controller
{
    public function index(): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('dash');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::query()->get();

        return view('projects', [
            'projects' => $projects
        ]);
    }
}

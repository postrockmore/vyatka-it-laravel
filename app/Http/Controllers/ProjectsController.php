<?php

namespace App\Http\Controllers;

use App\Models\Project\Project;
use App\Models\Project\ProjectCategory;
use Illuminate\Contracts\View\View;

class ProjectsController extends Controller
{
    public function index(): View
    {
        $categories = ProjectCategory::query()->get();
        $projects = Project::query()->get();

        return view('projects', [
            'categories' => $categories,
            'projects' => $projects
        ]);
    }

    public function category(ProjectCategory $project_category): View
    {
        $categories = ProjectCategory::query()->get();
        $projects = $project_category->projects()->get();

        return view('projects', [
            'current_category' => $project_category,
            'categories' => $categories,
            'projects' => $projects
        ]);
    }

    public function single(Project $project): View
    {
        return view('project', [
            'project' => $project
        ]);
    }
}

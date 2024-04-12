<?php

namespace App\Composers;

use App\Models\Project;
use Illuminate\View\View;

class ProjectsComposer
{
    protected VK $vk;

    public function __construct()
    {

    }

    public function compose(View $view): void
    {
        $projects = Project::query()->get();

        $view->with('projects', $projects);
    }
}

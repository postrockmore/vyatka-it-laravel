<?php

namespace App\Composers;

use App\Models\Project\Project;
use Illuminate\View\View;

class ProjectsComposer
{

    public function __construct()
    {

    }

    public function compose(View $view): void
    {
        $projects = cache()->remember('projects_composer', 3600, function () {
            return Project::query()->get();
        });

        $view->with('projects', $projects);
    }
}

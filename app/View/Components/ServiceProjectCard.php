<?php

namespace App\View\Components;

use App\Models\Service\ServiceProject;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceProjectCard extends Component
{
    public function __construct(
        public ServiceProject $project
    )
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.service-project-card');
    }
}

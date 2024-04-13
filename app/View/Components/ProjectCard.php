<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectCard extends Component
{

    public function __construct(
        public string $title,
        public string $thumbnail,
        public string $link,
    )
    {

    }

    public function render(): View|Closure|string
    {
        return view('components.project-card');
    }
}

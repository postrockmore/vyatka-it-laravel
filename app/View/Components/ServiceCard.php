<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceCard extends Component
{
    public function __construct(
        public string $class = '',
        public string $background = '',
        public string $title = '',
        public string $description = '',
        public string $deadlines = '',
        public string $price = '',
        public string $link = ''
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.service-card');
    }
}

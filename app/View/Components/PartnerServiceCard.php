<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PartnerServiceCard extends Component
{
    public function __construct(
        public int $columns = 2,
        public string $background = '',
        public string $name = '',
        public string $description = ''
    )
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.partner-service-card');
    }
}

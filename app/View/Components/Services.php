<?php

namespace App\View\Components;

use App\Models\Service\ServiceCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Services extends Component
{
    public array|Collection $categories;

    public function __construct()
    {
        $this->categories = ServiceCategory::query()
            ->with('media')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services');
    }
}

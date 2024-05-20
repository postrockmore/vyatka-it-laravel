<?php

namespace App\View\Components;

use App\Models\Employee;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Employees extends Component
{
    public function __construct(
        public Collection $employees
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->employees = Employee::query()->get();

        return view('components.employees');
    }
}

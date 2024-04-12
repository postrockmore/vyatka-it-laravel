<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Radio extends Component
{
    public string $id;

    public function __construct(
        public string $name,
        public string $label = '',
        public string $value = '',
        public bool $checked = false,
        public int $variation = 1
    )
    {
        $this->id = uniqid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.radio');
    }
}

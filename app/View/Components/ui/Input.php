<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $id;

    public function __construct(
        public string $name,
        public string $value = '',
        public string $placeholder = '',
    )
    {
        $this->id = uniqid();
    }

    public function render(): View|Closure|string
    {
        return view('components.ui.input');
    }
}

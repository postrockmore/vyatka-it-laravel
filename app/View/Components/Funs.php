<?php

namespace App\View\Components;

use App\Settings\CompanyGallerySettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Funs extends Component
{
    public array $gallery;

    public function __construct(
        CompanyGallerySettings $companyGallerySettings
    )
    {
        $this->gallery = $companyGallerySettings->company;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.funs');
    }
}

<?php

namespace App\Composers;

use App\Services\VK;
use Illuminate\View\View;

class ReviewsComposer
{
    protected VK $vk;

    public function __construct(VK $vk)
    {
        $this->vk = $vk;
    }

    public function compose(View $view): void
    {
        $reviews = $this->vk->get();

        $view->with('reviews', $reviews);
    }
}
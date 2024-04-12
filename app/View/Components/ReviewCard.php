<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReviewCard extends Component
{
    public function __construct(
        public string $name = '',
        public string $avatar = '',
        public string $date = '',
        public string $text = '',
    )
    {

    }

    public function render() : View|Closure|string
    {
        return view( 'components.review-card' );
    }
}

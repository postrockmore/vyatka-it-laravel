<?php

namespace App\Http\Controllers;

use App\Services\VK;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(VK $vk): View
    {
        $reviews = $vk->get(-1);

        return view('reviews', [
            'reviews' => $reviews
        ]);
    }
}

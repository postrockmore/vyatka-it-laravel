<?php

namespace App\Http\Controllers;

use App\Services\VK;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ReviewsController extends Controller
{
    public function index(VK $vk): View
    {
        $reviews = cache()->remember('reviews_all', 3600, function () use ($vk) {
            return $vk->get(-1);
        });

        return view('reviews', [
            'reviews' => $reviews
        ]);
    }
}

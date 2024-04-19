<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class PromotionsController extends Controller
{
    public function index (): View
    {
        $promotions = cache()->rememberForever('promotions', function () {
            return Promotion::query()->with('media')->get();
        });

        return view('promotions', [
            'promotions' => $promotions
        ]);
    }
}

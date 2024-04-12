<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PromotionsController extends Controller
{
    public function index (): View
    {
        $promotions = Promotion::query()->get();

        return view('promotions', [
            'promotions' => $promotions
        ]);
    }
}

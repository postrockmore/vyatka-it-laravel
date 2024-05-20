<?php

namespace App\Http\Controllers;

use App\Settings\AboutPageSettings;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AboutController extends Controller
{
    public function index(AboutPageSettings $aboutPageSettings): View
    {
        return view('about', [
            'title' => $aboutPageSettings->title,
            'description' => $aboutPageSettings->description,
            'tags' => $aboutPageSettings->tags,
            'bulits' => $aboutPageSettings->bulits,
        ]);
    }
}

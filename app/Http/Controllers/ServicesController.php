<?php

namespace App\Http\Controllers;

use App\Models\Service\Service;
use App\Models\Service\ServiceCategory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {

    }

    public function category(ServiceCategory $serviceCategory): View|Application|Factory
    {
        $services = $serviceCategory->services;

        return view('service-category', [
            'category' => $serviceCategory,
            'services' => $services
        ]);
    }

    public function single(Service $service): View
    {
        $projects = cache()->rememberForever('service_projects_' . $service->id, function () use ($service) {
            return $service->projects()->with('media')->get();
        });

        return view('service', [
            'service' => $service,
            'projects' => $projects
        ]);
    }
}

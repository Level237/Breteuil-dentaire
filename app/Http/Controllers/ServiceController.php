<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $servicesByCategory = Service::query()
            ->published()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->groupBy('category');

        return view('services', compact('servicesByCategory'));
    }

    public function show(string $slug): View
    {
        $service = Service::query()
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('service-show', compact('service'));
    }
}

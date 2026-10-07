<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::query()
            ->published()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('services', compact('services'));
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

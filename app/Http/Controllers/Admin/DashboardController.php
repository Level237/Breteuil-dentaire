<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'galleries_count' => Gallery::count(),
            'personnel_count' => TeamMember::count(),
            'services_count' => Service::count(),
            'faqs_count' => Faq::count(),
        ];

        $latestGalleries = Gallery::query()
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->take(4)
            ->get();

        return view('admin.dashboard', compact('stats', 'latestGalleries'));
    }
}

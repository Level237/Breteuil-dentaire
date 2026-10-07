<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\View\View;

class GaleryController extends Controller
{
    public function index(): View
    {
        $galleries = Gallery::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('galeries', compact('galleries'));
    }
}

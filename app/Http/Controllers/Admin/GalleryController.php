<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Services\GalleryImageCompressor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function __construct(private readonly GalleryImageCompressor $compressor)
    {
    }

    public function index(): View
    {
        $galleries = Gallery::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.galeries.index', compact('galleries'));
    }

    public function create(): View
    {
        return view('admin.galeries.create');
    }

    public function store(StoreGalleryRequest $request): RedirectResponse
    {
        $path = $this->compressor->compressAndStore($request->file('image'));

        Gallery::query()->create([
            'path' => $path,
            'alt' => $request->validated('alt'),
            'sort_order' => $request->integer('sort_order'),
        ]);

        return redirect()
            ->route('admin.galeries.index')
            ->with('success', 'La photo a été ajoutée à la galerie.');
    }

    public function edit(Gallery $gallery): View
    {
        return view('admin.galeries.edit', compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery): RedirectResponse
    {
        $data = [
            'alt' => $request->validated('alt'),
            'sort_order' => $request->integer('sort_order'),
        ];

        if ($request->hasFile('image')) {
            $newPath = $this->compressor->compressAndStore($request->file('image'));
            Storage::disk('public')->delete($gallery->path);
            $data['path'] = $newPath;
        }

        $gallery->update($data);

        return redirect()
            ->route('admin.galeries.index')
            ->with('success', 'La photo a été mise à jour.');
    }

    public function destroy(Gallery $gallery): RedirectResponse
    {
        Storage::disk('public')->delete($gallery->path);
        $gallery->delete();

        return redirect()
            ->route('admin.galeries.index')
            ->with('success', 'La photo a été retirée de la galerie.');
    }
}

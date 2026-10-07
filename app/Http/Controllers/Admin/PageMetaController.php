<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePageMetaRequest;
use App\Models\PageMeta;
use App\Services\GalleryImageCompressor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PageMetaController extends Controller
{
    public function __construct(private readonly GalleryImageCompressor $compressor)
    {
    }

    public function index(): View
    {
        $pages = collect(PageMeta::PAGES)->map(function (array $page, string $key) {
            $meta = PageMeta::query()->firstOrCreate(
                ['page_key' => $key],
                [
                    'meta_title' => $page['label'],
                    'meta_description' => 'Breteuil dentaire - '.$page['label'],
                    'meta_image' => 'assets/images/accueil.jpeg',
                ]
            );

            return $meta;
        });

        return view('admin.seo.index', compact('pages'));
    }

    public function edit(PageMeta $page_meta): View
    {
        return view('admin.seo.edit', ['page' => $page_meta]);
    }

    public function update(UpdatePageMetaRequest $request, PageMeta $page_meta): RedirectResponse
    {
        $data = [
            'meta_title' => $request->validated('meta_title'),
            'meta_description' => $request->validated('meta_description'),
        ];

        if ($request->boolean('remove_meta_image') && ! $request->hasFile('meta_image')) {
            $this->deleteStoredImage($page_meta->meta_image);
            $data['meta_image'] = null;
        } elseif ($request->hasFile('meta_image')) {
            $this->deleteStoredImage($page_meta->meta_image);
            $data['meta_image'] = $this->compressor->compressAndStore($request->file('meta_image'), 'seo');
        }

        $page_meta->update($data);

        return redirect()
            ->route('admin.seo.index')
            ->with('success', 'Les métadonnées de la page ont été mises à jour.');
    }

    private function deleteStoredImage(?string $path): void
    {
        if (! $path || str_starts_with($path, 'http') || str_starts_with($path, 'assets/')) {
            return;
        }

        Storage::disk('public')->delete($path);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreServiceRequest;
use App\Http\Requests\Admin\UpdateServiceRequest;
use App\Models\Service;
use App\Services\GalleryImageCompressor;
use App\Services\HtmlContentSanitizer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(
        private readonly GalleryImageCompressor $compressor,
        private readonly HtmlContentSanitizer $sanitizer,
    ) {
    }

    public function index(): View
    {
        $services = Service::query()
            ->orderBy('category')
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.services.index', compact('services'));
    }

    public function create(): View
    {
        return view('admin.services.create');
    }

    public function uploadImage(Request $request): JsonResponse
    {
        $request->validate([
            'file' => ['required', 'image', 'mimes:jpeg,jpg,png,webp', 'max:8192'],
        ], [], [
            'file' => 'image',
        ]);

        $path = $this->storeImage($request->file('file'));

        return response()->json([
            'location' => Storage::disk('public')->url($path),
        ]);
    }

    public function store(StoreServiceRequest $request): RedirectResponse
    {
        $data = $this->extractData($request);

        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $this->storeImage($request->file('hero_image'));
        }

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $this->storeImage($request->file('featured_image'));
        }

        if ($request->hasFile('meta_image')) {
            $data['meta_image'] = $this->storeImage($request->file('meta_image'));
        }

        Service::query()->create($data);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Le service a été ajouté.');
    }

    public function edit(Service $service): View
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service): RedirectResponse
    {
        $data = $this->extractData($request);

        if ($request->boolean('remove_hero_image') && ! $request->hasFile('hero_image')) {
            $this->deleteStoredImage($service->hero_image);
            $data['hero_image'] = null;
        } elseif ($request->hasFile('hero_image')) {
            $this->deleteStoredImage($service->hero_image);
            $data['hero_image'] = $this->storeImage($request->file('hero_image'));
        }

        if ($request->boolean('remove_featured_image') && ! $request->hasFile('featured_image')) {
            $this->deleteStoredImage($service->featured_image);
            $data['featured_image'] = null;
        } elseif ($request->hasFile('featured_image')) {
            $this->deleteStoredImage($service->featured_image);
            $data['featured_image'] = $this->storeImage($request->file('featured_image'));
        }

        if ($request->boolean('remove_meta_image') && ! $request->hasFile('meta_image')) {
            $this->deleteStoredImage($service->meta_image);
            $data['meta_image'] = null;
        } elseif ($request->hasFile('meta_image')) {
            $this->deleteStoredImage($service->meta_image);
            $data['meta_image'] = $this->storeImage($request->file('meta_image'));
        }

        $service->update($data);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Le service a été mis à jour.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $this->deleteStoredImage($service->hero_image);
        $this->deleteStoredImage($service->featured_image);
        $this->deleteStoredImage($service->meta_image);
        $service->delete();

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Le service a été retiré.');
    }

    private function extractData(StoreServiceRequest|UpdateServiceRequest $request): array
    {
        $slug = $request->validated('slug');
        if (blank($slug)) {
            $slug = Str::slug($request->validated('title'));
        }

        return [
            'title' => $request->validated('title'),
            'slug' => $slug,
            'category' => $request->validated('category'),
            'meta_title' => $request->validated('meta_title') ?: $request->validated('title'),
            'meta_description' => $request->validated('meta_description'),
            'excerpt' => $request->validated('excerpt'),
            'body' => $this->sanitizer->sanitize($request->input('body')),
            'sort_order' => $request->integer('sort_order'),
            'is_published' => $request->boolean('is_published'),
        ];
    }

    private function storeImage(UploadedFile $file): string
    {
        return $this->compressor->compressAndStore($file, 'services');
    }

    private function deleteStoredImage(?string $path): void
    {
        if (! $path || str_starts_with($path, 'http') || str_starts_with($path, 'assets/')) {
            return;
        }

        Storage::disk('public')->delete($path);
    }
}

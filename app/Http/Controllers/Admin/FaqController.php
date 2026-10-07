<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFaqRequest;
use App\Http\Requests\Admin\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        $faqs = Faq::query()
            ->orderBy('category')
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.faqs.index', compact('faqs'));
    }

    public function create(): View
    {
        return view('admin.faqs.create', [
            'categories' => $this->categorySuggestions(),
        ]);
    }

    public function store(StoreFaqRequest $request): RedirectResponse
    {
        Faq::query()->create($this->extractData($request));

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'La question a été ajoutée.');
    }

    public function edit(Faq $faq): View
    {
        return view('admin.faqs.edit', [
            'faq' => $faq,
            'categories' => $this->categorySuggestions(),
        ]);
    }

    public function update(UpdateFaqRequest $request, Faq $faq): RedirectResponse
    {
        $faq->update($this->extractData($request));

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'La question a été mise à jour.');
    }

    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'La question a été retirée.');
    }

    private function extractData(StoreFaqRequest|UpdateFaqRequest $request): array
    {
        return [
            'category' => $request->validated('category'),
            'question' => $request->validated('question'),
            'answer' => $request->validated('answer'),
            'sort_order' => $request->integer('sort_order'),
            'is_published' => $request->boolean('is_published'),
        ];
    }

    /**
     * @return \Illuminate\Support\Collection<int, string>
     */
    private function categorySuggestions()
    {
        return Faq::query()
            ->select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');
    }
}

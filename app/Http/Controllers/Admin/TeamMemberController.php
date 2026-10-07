<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTeamMemberRequest;
use App\Http\Requests\Admin\UpdateTeamMemberRequest;
use App\Models\TeamMember;
use App\Services\GalleryImageCompressor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TeamMemberController extends Controller
{
    public function __construct(private readonly GalleryImageCompressor $compressor)
    {
    }

    public function index(): View
    {
        $members = TeamMember::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.personnel.index', compact('members'));
    }

    public function create(): View
    {
        return view('admin.personnel.create');
    }

    public function store(StoreTeamMemberRequest $request): RedirectResponse
    {
        $data = $this->extractData($request);

        if ($request->hasFile('photo')) {
            $data['photo'] = $this->compressor->compressAndStore($request->file('photo'), 'teams');
        }

        TeamMember::query()->create($data);

        return redirect()
            ->route('admin.personnel.index')
            ->with('success', 'Le membre de l’équipe a été ajouté.');
    }

    public function edit(TeamMember $personnel): View
    {
        return view('admin.personnel.edit', ['member' => $personnel]);
    }

    public function update(UpdateTeamMemberRequest $request, TeamMember $personnel): RedirectResponse
    {
        $data = $this->extractData($request);

        if ($request->hasFile('photo')) {
            if ($personnel->photo && ! str_starts_with($personnel->photo, 'http') && ! str_starts_with($personnel->photo, 'assets/')) {
                Storage::disk('public')->delete($personnel->photo);
            }
            $data['photo'] = $this->compressor->compressAndStore($request->file('photo'), 'teams');
        }

        $personnel->update($data);

        return redirect()
            ->route('admin.personnel.index')
            ->with('success', 'La fiche du membre a été mise à jour.');
    }

    public function destroy(TeamMember $personnel): RedirectResponse
    {
        if ($personnel->photo && ! str_starts_with($personnel->photo, 'http') && ! str_starts_with($personnel->photo, 'assets/')) {
            Storage::disk('public')->delete($personnel->photo);
        }

        $personnel->delete();

        return redirect()
            ->route('admin.personnel.index')
            ->with('success', 'Le membre a été retiré de l’équipe.');
    }

    private function extractData(StoreTeamMemberRequest|UpdateTeamMemberRequest $request): array
    {
        $slug = $request->validated('slug');
        if (blank($slug)) {
            $slug = Str::slug($request->validated('name'));
        }

        $diplomas = null;
        if ($request->filled('diplomas_text')) {
            $lines = preg_split('/\r\n|\r|\n/', (string) $request->input('diplomas_text'));
            $diplomas = array_values(array_filter(array_map('trim', $lines ?: []), fn ($line) => $line !== ''));
        }

        return [
            'name' => $request->validated('name'),
            'slug' => $slug,
            'role' => $request->validated('role'),
            'diplomas' => $diplomas,
            'appointment_url' => $request->validated('appointment_url'),
            'sort_order' => $request->integer('sort_order'),
            'is_active' => $request->boolean('is_active'),
        ];
    }
}

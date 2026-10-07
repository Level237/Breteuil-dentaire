<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeamController extends Controller
{
    public function teamList(): View
    {
        $members = TeamMember::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('our-team', compact('members'));
    }

    public function show(string $slug): View
    {
        $member = TeamMember::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('team-detail', compact('member'));
    }

    public function dassie(): RedirectResponse|View
    {
        $member = TeamMember::query()->where('slug', 'docteur-dassie-fabrice')->first();
        if ($member) {
            return view('team-detail', compact('member'));
        }

        return redirect()->route('team');
    }

    public function michael(): RedirectResponse|View
    {
        $member = TeamMember::query()->where('slug', 'docteur-aboulker-mickael')->first();
        if ($member) {
            return view('team-detail', compact('member'));
        }

        return redirect()->route('team');
    }
}

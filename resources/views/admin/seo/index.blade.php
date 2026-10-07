@extends('admin.layouts.app')

@section('title', 'Référencement')
@section('heading', 'Référencement')

@section('content')
    <div class="admin-toolbar">
        <p class="admin-intro">Titre, description et image de partage (réseaux sociaux / Google) des pages publiques du site.</p>
    </div>

    <div class="admin-table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 72px;">Image</th>
                    <th>Page</th>
                    <th>Titre SEO</th>
                    <th>Adresse</th>
                    <th style="width: 140px; text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>
                            @if ($page->image_url)
                                <img class="admin-team-avatar-img" src="{{ $page->image_url }}" alt="{{ $page->meta_title }}">
                            @else
                                <div class="admin-team-avatar-placeholder">SEO</div>
                            @endif
                        </td>
                        <td><strong>{{ $page->label }}</strong></td>
                        <td>
                            {{ $page->meta_title }}
                            @if ($page->meta_description)
                                <div class="admin-table-sub">{{ \Illuminate\Support\Str::limit($page->meta_description, 80) }}</div>
                            @endif
                        </td>
                        <td>
                            @php $path = \App\Models\PageMeta::PAGES[$page->page_key]['path'] ?? '/'; @endphp
                            <a href="{{ url($path) }}" target="_blank" class="admin-link-code">{{ $path }} ↗</a>
                        </td>
                        <td style="text-align: right;">
                            <div class="admin-table-actions">
                                <a class="admin-btn-action" href="{{ route('admin.seo.edit', $page) }}">Modifier</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

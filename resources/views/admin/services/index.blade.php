@extends('admin.layouts.app')

@section('title', 'Services')
@section('heading', 'Services')

@section('content')
    <div class="admin-toolbar">
        <p class="admin-intro">Pages de soins visibles sur le site. Ajoutez un service, changez le texte ou masquez-le sans toucher au code.</p>
        <a class="admin-submit admin-submit-inline" href="{{ route('admin.services.create') }}">Ajouter un service</a>
    </div>

    @if ($services->isEmpty())
        <p class="admin-empty">Aucun service pour le moment.</p>
    @else
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 72px;">Image</th>
                        <th>Titre</th>
                        <th>Catégorie</th>
                        <th>Adresse</th>
                        <th>Statut</th>
                        <th>Ordre</th>
                        <th style="width: 140px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>
                                @if ($service->featured_url || $service->hero_url)
                                    <img class="admin-team-avatar-img" src="{{ $service->featured_url ?? $service->hero_url }}" alt="{{ $service->title }}">
                                @else
                                    <div class="admin-team-avatar-placeholder">{{ strtoupper(substr($service->title, 0, 1)) }}</div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $service->title }}</strong>
                            </td>
                            <td>{{ $service->category_label }}</td>
                            <td>
                                <a href="{{ $service->publicUrl() }}" target="_blank" class="admin-link-code">/{{ $service->slug }} ↗</a>
                            </td>
                            <td>
                                @if ($service->is_published)
                                    <span class="admin-badge-status admin-badge-active">En ligne</span>
                                @else
                                    <span class="admin-badge-status admin-badge-inactive">Masqué</span>
                                @endif
                            </td>
                            <td><span class="admin-mono-sub">{{ $service->sort_order }}</span></td>
                            <td style="text-align: right;">
                                <div class="admin-table-actions">
                                    <a class="admin-btn-action" href="{{ route('admin.services.edit', $service) }}">Modifier</a>
                                    <form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Retirer ce service du site ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="admin-link-btn admin-link-danger">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection

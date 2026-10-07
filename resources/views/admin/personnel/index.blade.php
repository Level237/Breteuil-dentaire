@extends('admin.layouts.app')

@section('title', 'Gestion du personnel')
@section('heading', 'Personnel')

@section('content')
    <div class="admin-toolbar">
        <p class="admin-intro">Praticiens et assistants présentés sur le site public. Vous pouvez ajouter un membre, modifier ses diplômes, son lien de rendez-vous ou le masquer temporairement.</p>
        <a class="admin-submit admin-submit-inline" href="{{ route('admin.personnel.create') }}">Ajouter un membre</a>
    </div>

    @if ($members->isEmpty())
        <p class="admin-empty">Aucun membre enregistré dans l’équipe pour le moment.</p>
    @else
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 72px;">Photo</th>
                        <th>Nom & rôle</th>
                        <th>URL / Fiche</th>
                        <th>Diplômes</th>
                        <th>Statut</th>
                        <th style="width: 80px;">Ordre</th>
                        <th style="width: 140px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>
                                @if ($member->photo_url)
                                    <img class="admin-team-avatar-img" src="{{ $member->photo_url }}" alt="{{ $member->name }}">
                                @else
                                    <div class="admin-team-avatar-placeholder">
                                        {{ strtoupper(substr($member->name, 0, 1)) }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $member->name }}</strong>
                                <div class="admin-table-sub">{{ $member->role }}</div>
                            </td>
                            <td>
                                <a href="{{ route('team.show', $member->slug) }}" target="_blank" class="admin-link-code">
                                    /{{ $member->slug }} ↗
                                </a>
                            </td>
                            <td>
                                @if(!empty($member->diplomas))
                                    <span class="admin-pill-neutral">{{ count($member->diplomas) }} diplômes</span>
                                @else
                                    <span class="admin-text-muted">—</span>
                                @endif
                            </td>
                            <td>
                                @if ($member->is_active)
                                    <span class="admin-badge-status admin-badge-active">Visible</span>
                                @else
                                    <span class="admin-badge-status admin-badge-inactive">Masqué</span>
                                @endif
                            </td>
                            <td>
                                <span class="admin-mono-sub">{{ $member->sort_order }}</span>
                            </td>
                            <td style="text-align: right;">
                                <div class="admin-table-actions">
                                    <a class="admin-btn-action" href="{{ route('admin.personnel.edit', $member) }}">Modifier</a>
                                    <form method="POST" action="{{ route('admin.personnel.destroy', $member) }}" onsubmit="return confirm('Retirer définitivement ce praticien de l’équipe ?');">
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

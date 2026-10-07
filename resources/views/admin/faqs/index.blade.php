@extends('admin.layouts.app')

@section('title', 'FAQ')
@section('heading', 'FAQ')

@section('content')
    <div class="admin-toolbar">
        <p class="admin-intro">Questions affichées sur la page publique FAQ. Vous pouvez les classer par catégorie, changer l’ordre ou les masquer.</p>
        <a class="admin-submit admin-submit-inline" href="{{ route('admin.faqs.create') }}">Ajouter une question</a>
    </div>

    @if ($faqs->isEmpty())
        <p class="admin-empty">Aucune question enregistrée pour le moment.</p>
    @else
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Catégorie</th>
                        <th>Statut</th>
                        <th style="width: 80px;">Ordre</th>
                        <th style="width: 140px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faqs as $faq)
                        <tr>
                            <td>
                                <strong>{{ $faq->question }}</strong>
                                <div class="admin-table-sub">{{ \Illuminate\Support\Str::limit(strip_tags($faq->answer), 90) }}</div>
                            </td>
                            <td>{{ $faq->category }}</td>
                            <td>
                                @if ($faq->is_published)
                                    <span class="admin-badge-status admin-badge-active">En ligne</span>
                                @else
                                    <span class="admin-badge-status admin-badge-inactive">Masqué</span>
                                @endif
                            </td>
                            <td>
                                <span class="admin-mono-sub">{{ $faq->sort_order }}</span>
                            </td>
                            <td style="text-align: right;">
                                <div class="admin-table-actions">
                                    <a class="admin-btn-action" href="{{ route('admin.faqs.edit', $faq) }}">Modifier</a>
                                    <form method="POST" action="{{ route('admin.faqs.destroy', $faq) }}" onsubmit="return confirm('Retirer définitivement cette question ?');">
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

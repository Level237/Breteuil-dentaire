@extends('admin.layouts.app')

@section('title', 'Galeries')
@section('heading', 'Galeries')

@section('content')
    <div class="admin-toolbar">
        <p class="admin-intro">Photos affichées sur la page « Visite du cabinet ». Chaque image a un texte alternatif (alt) pour l’accessibilité.</p>
        <a class="admin-submit admin-submit-inline" href="{{ route('admin.galeries.create') }}">Ajouter une photo</a>
    </div>

    @if ($galleries->isEmpty())
        <p class="admin-empty">Aucune photo pour le moment. Ajoutez la première image de la visite du cabinet.</p>
    @else
        <div class="admin-gallery-grid">
            @foreach ($galleries as $gallery)
                <article class="admin-gallery-card">
                    <img src="{{ $gallery->url }}" alt="{{ $gallery->alt }}">
                    <p class="admin-gallery-alt"><strong>Alt</strong> - {{ $gallery->alt }}</p>
                    <p class="admin-gallery-meta">Ordre {{ $gallery->sort_order }}</p>
                    <div class="admin-gallery-actions">
                        <a href="{{ route('admin.galeries.edit', $gallery) }}">Modifier</a>
                        <form method="POST" action="{{ route('admin.galeries.destroy', $gallery) }}" onsubmit="return confirm('Retirer cette photo de la galerie ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-link-btn admin-link-danger">Supprimer</button>
                        </form>
                    </div>
                </article>
            @endforeach
        </div>
    @endif
@endsection

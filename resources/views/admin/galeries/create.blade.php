@extends('admin.layouts.app')

@section('title', 'Ajouter une photo')
@section('heading', 'Ajouter une photo')

@section('content')
    <form class="admin-form" method="POST" action="{{ route('admin.galeries.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="admin-field">
            <label for="image">Image</label>
            <input id="image" type="file" name="image" accept="image/jpeg,image/png,image/webp" required>
            <p class="admin-help">JPEG, PNG ou WebP, 8 Mo maximum. L’image est compressée à l’enregistrement.</p>
            @error('image')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>
        <div class="admin-field">
            <label for="alt">Texte alternatif (alt)</label>
            <input id="alt" type="text" name="alt" value="{{ old('alt') }}" required maxlength="255" placeholder="Ex. Accueil du cabinet dentaire">
            <p class="admin-help">Décrivez la photo pour les lecteurs d’écran et le référencement.</p>
            @error('alt')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>
        <div class="admin-field">
            <label for="sort_order">Ordre d’affichage</label>
            <input id="sort_order" type="number" name="sort_order" value="{{ old('sort_order', 0) }}" min="0" max="9999">
            @error('sort_order')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>
        <div class="admin-form-actions">
            <button type="submit" class="admin-submit admin-submit-inline">Enregistrer</button>
            <a href="{{ route('admin.galeries.index') }}">Annuler</a>
        </div>
    </form>
@endsection

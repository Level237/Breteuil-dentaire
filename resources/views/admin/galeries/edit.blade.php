@extends('admin.layouts.app')

@section('title', 'Modifier une photo')
@section('heading', 'Modifier une photo')

@section('content')
    <form class="admin-form" method="POST" action="{{ route('admin.galeries.update', $gallery) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="admin-field">
            <p class="admin-help">Aperçu actuel</p>
            <img class="admin-form-preview" src="{{ $gallery->url }}" alt="{{ $gallery->alt }}">
        </div>
        <div class="admin-field">
            <label for="image">Remplacer l’image (optionnel)</label>
            <input id="image" type="file" name="image" accept="image/jpeg,image/png,image/webp">
            <p class="admin-help">Laissez vide pour conserver la photo. Un nouveau fichier est compressé à l’enregistrement.</p>
            @error('image')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>
        <div class="admin-field">
            <label for="alt">Texte alternatif (alt)</label>
            <input id="alt" type="text" name="alt" value="{{ old('alt', $gallery->alt) }}" required maxlength="255">
            @error('alt')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>
        <div class="admin-field">
            <label for="sort_order">Ordre d’affichage</label>
            <input id="sort_order" type="number" name="sort_order" value="{{ old('sort_order', $gallery->sort_order) }}" min="0" max="9999">
            @error('sort_order')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>
        <div class="admin-form-actions">
            <button type="submit" class="admin-submit admin-submit-inline">Mettre à jour</button>
            <a href="{{ route('admin.galeries.index') }}">Annuler</a>
        </div>
    </form>
@endsection

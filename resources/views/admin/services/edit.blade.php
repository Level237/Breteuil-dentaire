@extends('admin.layouts.app')

@section('title', 'Modifier ' . $service->title)
@section('heading', 'Édition du soin')

@section('content')
    <form class="admin-editor-form" method="POST" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Titre pleine largeur style Gutenberg / WordPress --}}
        <div class="admin-title-row">
            <input
                id="title"
                type="text"
                name="title"
                value="{{ old('title', $service->title) }}"
                required
                maxlength="180"
                class="admin-input-hero"
                placeholder="Titre du service..."
            >
            @error('title')<p class="admin-error" style="margin-top: 8px;">{{ $message }}</p>@enderror
        </div>

        @include('admin.services._form', ['service' => $service])
    </form>

    {{-- Modale de recadrage dynamique d'image --}}
    @include('admin.partials._crop_modal')

    {{-- Modale plein écran avec visualisation et ajustement de taille d'images --}}
    @include('admin.partials._fullscreen_editor_modal')
@endsection

@section('scripts')
    @include('admin.services._editor')
@endsection

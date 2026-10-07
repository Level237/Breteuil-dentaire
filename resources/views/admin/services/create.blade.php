@extends('admin.layouts.app')

@section('title', 'Ajouter un service')
@section('heading', 'Nouveau service')

@section('content')
    <form class="admin-editor-form" method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
        @csrf

        {{-- Titre pleine largeur style Gutenberg / WordPress --}}
        <div class="admin-title-row">
            <input
                id="title"
                type="text"
                name="title"
                value="{{ old('title') }}"
                required
                maxlength="180"
                class="admin-input-hero"
                placeholder="Ajouter un titre de service (ex: Implant dentaire, Blanchiment...)"
                autofocus
            >
            @error('title')<p class="admin-error" style="margin-top: 8px;">{{ $message }}</p>@enderror
        </div>

        @include('admin.services._form', ['service' => null])
    </form>

    {{-- Modale de recadrage dynamique d'image --}}
    @include('admin.partials._crop_modal')

    {{-- Modale plein écran avec visualisation et ajustement de taille d'images --}}
    @include('admin.partials._fullscreen_editor_modal')
@endsection

@section('scripts')
    @include('admin.services._editor')
@endsection

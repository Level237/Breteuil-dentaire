@extends('admin.layouts.app')

@section('title', 'Ajouter une photo')
@section('heading', 'Ajouter une photo')

@section('content')
    <form class="admin-form" method="POST" action="{{ route('admin.galeries.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="admin-field">
            <label for="image">Image</label>
            <div class="admin-dropzone" id="galleryDropzone" data-preview-id="galleryPreview" data-input-id="image">
                <div class="admin-dropzone-preview" id="galleryPreview"></div>
                <div class="admin-dropzone-empty" id="galleryEmpty">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                    <span><strong>Cliquez ou glissez</strong> une photo</span>
                    <small>JPEG, PNG, WebP (8 Mo max) - Recadrage direct disponible</small>
                </div>
                <input id="image" type="file" name="image" accept="image/jpeg,image/png,image/webp" required class="admin-dropzone-input">
            </div>
            <p class="admin-help">L’image est automatiquement orientée, centrée et compressée à l’enregistrement.</p>
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

    @include('admin.partials._crop_modal')
@endsection

@section('scripts')
<script>
    (function() {
        const input = document.getElementById('image');
        const preview = document.getElementById('galleryPreview');
        const emptyBox = document.getElementById('galleryEmpty');

        function showPreview(src) {
            preview.innerHTML = `
                <img src="${src}" alt="Aperçu">
                <div class="admin-dropzone-preview-actions">
                    <button type="button" class="admin-dropzone-btn admin-dropzone-btn-crop" data-action="crop">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 2v14a2 2 0 0 0 2 2h14"></path><path d="M18 22V8a2 2 0 0 0-2-2H2"></path></svg>
                        Recadrer
                    </button>
                    <button type="button" class="admin-dropzone-remove-btn" data-action="remove">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        Effacer
                    </button>
                </div>
            `;
            preview.classList.add('has-image');
            emptyBox.classList.add('is-hidden');
        }

        preview.addEventListener('click', (e) => {
            const removeBtn = e.target.closest('[data-action="remove"]');
            if (removeBtn) {
                e.preventDefault();
                input.value = '';
                preview.innerHTML = '';
                preview.classList.remove('has-image');
                emptyBox.classList.remove('is-hidden');
                return;
            }

            const cropBtn = e.target.closest('[data-action="crop"]');
            if (cropBtn && window.BreteuilCropper) {
                e.preventDefault();
                const img = preview.querySelector('img');
                if (img) {
                    window.BreteuilCropper.open(img.src, (croppedBlob, croppedDataUrl) => {
                        const originalFile = input.files && input.files[0];
                        const filename = originalFile ? originalFile.name : 'galerie-photo.jpg';
                        const newFile = new File([croppedBlob], filename, { type: 'image/jpeg' });
                        const dt = new DataTransfer();
                        dt.items.add(newFile);
                        input.files = dt.files;
                        showPreview(croppedDataUrl);
                    });
                }
            }
        });

        input.addEventListener('change', () => {
            const file = input.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = (e) => {
                const dataUrl = e.target.result;
                showPreview(dataUrl);
                if (window.BreteuilCropper) {
                    window.BreteuilCropper.open(dataUrl, (croppedBlob, croppedDataUrl) => {
                        const newFile = new File([croppedBlob], file.name, { type: 'image/jpeg' });
                        const dt = new DataTransfer();
                        dt.items.add(newFile);
                        input.files = dt.files;
                        showPreview(croppedDataUrl);
                    });
                }
            };
            reader.readAsDataURL(file);
        });
    })();
</script>
@endsection

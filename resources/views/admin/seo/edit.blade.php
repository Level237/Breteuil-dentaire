@extends('admin.layouts.app')

@section('title', 'SEO - ' . $page->label)
@section('heading', 'SEO : ' . $page->label)

@section('content')
    <form class="admin-form" method="POST" action="{{ route('admin.seo.update', $page) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="admin-field">
            <label for="meta_title">Titre SEO (meta title)</label>
            <input id="meta_title" type="text" name="meta_title" value="{{ old('meta_title', $page->meta_title) }}" required maxlength="180">
            <p class="admin-help">Affiché dans l’onglet du navigateur, Google et les partages sociaux.</p>
            @error('meta_title')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="admin-field">
            <label for="meta_description">Description SEO</label>
            <textarea id="meta_description" name="meta_description" rows="3" class="admin-textarea" maxlength="255">{{ old('meta_description', $page->meta_description) }}</textarea>
            @error('meta_description')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="admin-field">
            <label for="meta_image">Image de partage (meta image)</label>
            @if ($page->image_url)
                <p class="admin-help">Image actuelle</p>
                <img class="admin-form-preview" src="{{ $page->image_url }}" alt="{{ $page->meta_title }}" style="max-width: 280px; border-radius: 10px; margin-bottom: 12px;">
            @endif
            <div class="admin-dropzone" id="seoDropzone" data-preview-id="seoPreview" data-input-id="meta_image">
                <div class="admin-dropzone-preview" id="seoPreview"></div>
                <div class="admin-dropzone-empty" id="seoEmpty">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                    <span><strong>Cliquez ou glissez</strong> une image Open Graph</span>
                    <small>JPEG, PNG, WebP - Format paysage conseillé</small>
                </div>
                <input id="meta_image" type="file" name="meta_image" accept="image/jpeg,image/png,image/webp" class="admin-dropzone-input">
            </div>
            <p class="admin-help">Utilisée par Facebook, LinkedIn, WhatsApp et Twitter lors du partage de la page.</p>
            @error('meta_image')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>

        @if ($page->meta_image)
            <div class="admin-check">
                <input id="remove_meta_image" type="checkbox" name="remove_meta_image" value="1">
                <label for="remove_meta_image">Retirer l’image de partage (le site utilisera l’image par défaut)</label>
            </div>
        @endif

        <div class="admin-form-actions">
            <button type="submit" class="admin-submit admin-submit-inline">Enregistrer</button>
            <a href="{{ route('admin.seo.index') }}">Annuler</a>
        </div>
    </form>

    @include('admin.partials._crop_modal')
@endsection

@section('scripts')
<script>
    (function() {
        const input = document.getElementById('meta_image');
        const preview = document.getElementById('seoPreview');
        const emptyBox = document.getElementById('seoEmpty');
        if (!input) return;

        function showPreview(src) {
            preview.innerHTML = `
                <img src="${src}" alt="Aperçu">
                <div class="admin-dropzone-preview-actions">
                    <button type="button" class="admin-dropzone-btn admin-dropzone-btn-crop" data-action="crop">Recadrer</button>
                    <button type="button" class="admin-dropzone-remove-btn" data-action="remove">Effacer</button>
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
                        const filename = originalFile ? originalFile.name : 'seo.jpg';
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

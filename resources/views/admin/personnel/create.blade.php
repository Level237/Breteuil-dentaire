@extends('admin.layouts.app')

@section('title', 'Ajouter un membre du personnel')
@section('heading', 'Ajouter un membre')

@section('content')
    <form class="admin-form" method="POST" action="{{ route('admin.personnel.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="admin-field">
            <label for="name">Nom complet du praticien / assistant</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required maxlength="150" placeholder="Ex. Dr Fabrice DASSIE">
            @error('name')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="admin-field">
            <label for="role">Titre ou spécialité</label>
            <input id="role" type="text" name="role" value="{{ old('role', 'Chirurgien-dentiste') }}" required maxlength="150" placeholder="Ex. Chirurgien-dentiste, Assistant(e) dentaire...">
            @error('role')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="admin-field">
            <label for="slug">Identifiant d’URL (slug optionnel)</label>
            <input id="slug" type="text" name="slug" value="{{ old('slug') }}" maxlength="150" placeholder="Ex. docteur-dassie-fabrice">
            <p class="admin-help">Laissez vide pour générer automatiquement l'adresse web depuis le nom.</p>
            @error('slug')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="admin-field">
            <label for="photo">Photo portrait</label>
            <div class="admin-dropzone" id="personnelDropzone" data-preview-id="personnelPreview" data-input-id="photo">
                <div class="admin-dropzone-preview" id="personnelPreview"></div>
                <div class="admin-dropzone-empty" id="personnelEmpty">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span><strong>Cliquez ou glissez</strong> le portrait</span>
                    <small>JPEG, PNG, WebP — Recadrage direct disponible</small>
                </div>
                <input id="photo" type="file" name="photo" accept="image/jpeg,image/png,image/webp" class="admin-dropzone-input">
            </div>
            <p class="admin-help">Format JPEG, PNG ou WebP. L’image est orientée sans rotation parasite et centrée.</p>
            @error('photo')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="admin-field">
            <label for="diplomas_text">Diplômes & certifications (1 par ligne)</label>
            <textarea id="diplomas_text" name="diplomas_text" rows="5" class="admin-textarea" placeholder="Diplôme universitaire d’implantologie Orale&#10;Certificat d’études supérieures de Parodontologie">{{ old('diplomas_text') }}</textarea>
            <p class="admin-help">Chaque saut de ligne correspondra à une puce sur la fiche publique du praticien.</p>
            @error('diplomas_text')
                <p class="admin-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="admin-field">
            <label for="appointment_url">Lien externe Doctolib (optionnel)</label>
            <input id="appointment_url" type="url" name="appointment_url" value="{{ old('appointment_url') }}" placeholder="https://www.doctolib.fr/cabinet-dentaire/...">
            <p class="admin-help">Si vide, le bouton de prise de rendez-vous redirigera vers le formulaire de contact du cabinet.</p>
            @error('appointment_url')
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

        <div class="admin-check">
            <input id="is_active" type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
            <label for="is_active">Afficher ce membre sur le site public (actif)</label>
        </div>

        <div class="admin-form-actions">
            <button type="submit" class="admin-submit admin-submit-inline">Enregistrer le membre</button>
            <a href="{{ route('admin.personnel.index') }}">Annuler</a>
        </div>
    </form>

    @include('admin.partials._crop_modal')
@endsection

@section('scripts')
<script>
    (function() {
        const input = document.getElementById('photo');
        const preview = document.getElementById('personnelPreview');
        const emptyBox = document.getElementById('personnelEmpty');

        function showPreview(src) {
            preview.innerHTML = `
                <img src="${src}" alt="Aperçu portrait">
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
                        const filename = originalFile ? originalFile.name : 'portrait.jpg';
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

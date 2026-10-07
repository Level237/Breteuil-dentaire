<div class="admin-editor-layout">
    {{-- Colonne principale gauche : contenu, chapeau, SEO --}}
    <div class="admin-editor-main">
        <div class="admin-card-section">
            <div class="admin-field">
                <label for="excerpt" class="admin-label-strong">Chapeau d’introduction</label>
                <textarea id="excerpt" name="excerpt" rows="3" class="admin-textarea" maxlength="2000" placeholder="Courte synthèse affichée en haut de la page du soin...">{{ old('excerpt', $service?->excerpt ?? '') }}</textarea>
                <p class="admin-help">Optionnel : met en valeur le premier message du praticien avant le détail des soins.</p>
                @error('excerpt')<p class="admin-error">{{ $message }}</p>@enderror
            </div>

            <div class="admin-field" style="margin-bottom: 0;">
                <div class="admin-field-header-row">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="body" class="admin-label-strong">Contenu complet de la page</label>
                        <span class="admin-badge-hint">Éditeur visuel style article</span>
                    </div>
                    <button type="button" class="admin-btn-fullscreen-trigger" id="openFullscreenModalBtn" title="Ouvrir l'espace grand écran avec visualisation et gestion de taille d'images">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
                        <span>Agrandir en plein écran</span>
                    </button>
                </div>
                <textarea id="body" name="body" rows="18" class="admin-textarea">{{ old('body', $service?->body ?? '') }}</textarea>
                <p class="admin-help">
                    <strong>Téléchargement d’images intégré :</strong> cliquez sur l’icône photo de l’éditeur pour envoyer un fichier ou glissez-déposez une image dans le texte.
                    Alignez vos paragraphes (gauche, centré, droite, justifié) avec les boutons de la barre d'outils.
                </p>
                @error('body')<p class="admin-error">{{ $message }}</p>@enderror
            </div>
        </div>

        {{-- Section SEO & référencement --}}
        <div class="admin-card-section">
            <h4 class="admin-card-section-title">Référencement naturel (SEO Google)</h4>
            <div class="admin-field">
                <label for="meta_title">Titre SEO personnalisé</label>
                <input id="meta_title" type="text" name="meta_title" value="{{ old('meta_title', $service?->meta_title ?? '') }}" maxlength="180" placeholder="Laisser vide pour utiliser le titre du service">
                @error('meta_title')<p class="admin-error">{{ $message }}</p>@enderror
            </div>

            <div class="admin-field" style="margin-bottom: 0;">
                <label for="meta_description">Description pour les moteurs de recherche</label>
                <textarea id="meta_description" name="meta_description" rows="2" class="admin-textarea" maxlength="255" placeholder="Description courte (1 à 2 phrases) pour Google...">{{ old('meta_description', $service?->meta_description ?? '') }}</textarea>
                @error('meta_description')<p class="admin-error">{{ $message }}</p>@enderror
            </div>
        </div>
    </div>

    {{-- Colonne latérale droite (Sidebar WordPress-like) --}}
    <div class="admin-editor-sidebar">
        {{-- Boîte Publication --}}
        <div class="admin-sidebar-box">
            <h4 class="admin-sidebar-box-title">État &amp; Publication</h4>

            <div class="admin-check" style="margin-bottom: 14px;">
                <input id="is_published" type="checkbox" name="is_published" value="1" {{ old('is_published', $service?->is_published ?? true) ? 'checked' : '' }}>
                <label for="is_published"><strong>Visible en ligne</strong></label>
            </div>
            <p class="admin-help" style="margin-top: -6px; margin-bottom: 16px;">Si décoché, la page passe en brouillon et disparaît du menu public.</p>

            <div class="admin-field" style="margin-bottom: 14px;">
                <label for="category">Catégorie du menu</label>
                <select id="category" name="category" class="admin-select" required>
                    @foreach (\App\Models\Service::CATEGORIES as $value => $label)
                        <option value="{{ $value }}" @selected(old('category', $service?->category ?? 'soins') === $value)>{{ $label }}</option>
                    @endforeach
                </select>
                @error('category')<p class="admin-error">{{ $message }}</p>@enderror
            </div>

            <div class="admin-field" style="margin-bottom: 14px;">
                <label for="slug">Adresse web (URL slug)</label>
                <input id="slug" type="text" name="slug" value="{{ old('slug', $service?->slug ?? '') }}" maxlength="180" placeholder="ex: implant-dentaire">
                <p class="admin-help">Générée automatiquement si laissée vide.</p>
                @error('slug')<p class="admin-error">{{ $message }}</p>@enderror
            </div>

            <div class="admin-field" style="margin-bottom: 18px;">
                <label for="sort_order">Ordre d’affichage</label>
                <input id="sort_order" type="number" name="sort_order" value="{{ old('sort_order', $service?->sort_order ?? 0) }}" min="0" max="9999">
                @error('sort_order')<p class="admin-error">{{ $message }}</p>@enderror
            </div>

            <div class="admin-sidebar-actions">
                <button type="submit" class="admin-submit">
                    {{ $service ? 'Enregistrer les modifications' : 'Publier le service' }}
                </button>
                <a href="{{ route('admin.services.index') }}" class="admin-btn-secondary" style="width: 100%; justify-content: center;">Annuler</a>
            </div>
        </div>

        {{-- Boîte Image principale (Mise en avant) avec upload interactif + suppression --}}
        <div class="admin-sidebar-box">
            <h4 class="admin-sidebar-box-title">Image mise en avant</h4>
            <p class="admin-help" style="margin-top: 0; margin-bottom: 12px;">Grande photo affichée au-dessus du texte.</p>

            <div class="admin-dropzone" id="featuredDropzone" data-preview-id="featuredPreview" data-input-id="featured_image" data-remove-id="remove_featured_image">
                <div class="admin-dropzone-preview {{ !empty($service?->featured_url) ? 'has-image' : '' }}" id="featuredPreview">
                    @if (!empty($service?->featured_url))
                        <img src="{{ $service->featured_url }}" alt="Image principale">
                        <div class="admin-dropzone-preview-actions">
                            <button type="button" class="admin-dropzone-btn admin-dropzone-btn-crop" title="Recadrer l'image" data-action="crop">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 2v14a2 2 0 0 0 2 2h14"></path><path d="M18 22V8a2 2 0 0 0-2-2H2"></path></svg>
                                Recadrer
                            </button>
                            <button type="button" class="admin-dropzone-remove-btn" title="Supprimer la photo du disque" data-action="remove">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                Supprimer
                            </button>
                        </div>
                    @endif
                </div>

                <div class="admin-dropzone-empty {{ !empty($service?->featured_url) ? 'is-hidden' : '' }}" id="featuredEmpty">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                    <span><strong>Cliquez ou glissez</strong> une photo</span>
                    <small>JPEG, PNG, WebP (8 Mo max)</small>
                </div>

                <input id="featured_image" type="file" name="featured_image" accept="image/jpeg,image/png,image/webp" class="admin-dropzone-input">
                <input type="hidden" name="remove_featured_image" id="remove_featured_image" value="0">
            </div>
            @error('featured_image')<p class="admin-error">{{ $message }}</p>@enderror
        </div>

        {{-- Boîte Image Bandeau (Hero) avec upload interactif + suppression --}}
        <div class="admin-sidebar-box">
            <h4 class="admin-sidebar-box-title">Image de bandeau (Haut)</h4>
            <p class="admin-help" style="margin-top: 0; margin-bottom: 12px;">Arrière-plan sombre du titre de page.</p>

            <div class="admin-dropzone" id="heroDropzone" data-preview-id="heroPreview" data-input-id="hero_image" data-remove-id="remove_hero_image">
                <div class="admin-dropzone-preview {{ !empty($service?->hero_url) ? 'has-image' : '' }}" id="heroPreview">
                    @if (!empty($service?->hero_url))
                        <img src="{{ $service->hero_url }}" alt="Bandeau haut">
                        <div class="admin-dropzone-preview-actions">
                            <button type="button" class="admin-dropzone-btn admin-dropzone-btn-crop" title="Recadrer l'image" data-action="crop">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 2v14a2 2 0 0 0 2 2h14"></path><path d="M18 22V8a2 2 0 0 0-2-2H2"></path></svg>
                                Recadrer
                            </button>
                            <button type="button" class="admin-dropzone-remove-btn" title="Supprimer la photo du disque" data-action="remove">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                Supprimer
                            </button>
                        </div>
                    @endif
                </div>

                <div class="admin-dropzone-empty {{ !empty($service?->hero_url) ? 'is-hidden' : '' }}" id="heroEmpty">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                    <span><strong>Cliquez ou glissez</strong> le bandeau</span>
                    <small>Format paysage conseillé</small>
                </div>

                <input id="hero_image" type="file" name="hero_image" accept="image/jpeg,image/png,image/webp" class="admin-dropzone-input">
                <input type="hidden" name="remove_hero_image" id="remove_hero_image" value="0">
            </div>
            @error('hero_image')<p class="admin-error">{{ $message }}</p>@enderror
        </div>
    </div>
</div>

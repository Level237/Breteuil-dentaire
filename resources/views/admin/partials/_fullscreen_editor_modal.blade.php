<div class="fullscreen-editor-overlay" id="fullscreenEditorModal" aria-hidden="true" role="dialog" aria-labelledby="fullscreenModalTitle">
    {{-- Barre supérieure d'actions --}}
    <div class="fullscreen-editor-header">
        <div class="fullscreen-editor-header-left">
            <div class="fullscreen-badge-pill">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
                <span>Espace Grand Écran</span>
            </div>
            <h2 id="fullscreenModalTitle" class="fullscreen-modal-heading">Contenu de la page</h2>

            <div class="fullscreen-view-tabs" role="tablist">
                <button type="button" class="fullscreen-tab-btn is-active" id="tabModeEdit" data-view="edit">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    Édition & Mise en page
                </button>
                <button type="button" class="fullscreen-tab-btn" id="tabModePreview" data-view="preview">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    Visualisation en direct
                </button>
            </div>
        </div>

        <div class="fullscreen-editor-header-right">
            <button type="button" class="admin-btn-secondary fullscreen-btn-cancel" id="fullscreenCancelBtn">
                Annuler
            </button>
            <button type="button" class="admin-submit admin-submit-inline fullscreen-btn-apply" id="fullscreenApplyBtn">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Appliquer le contenu
            </button>
            <button type="button" class="admin-submit admin-submit-inline fullscreen-btn-save" id="fullscreenSaveFormBtn" title="Applique les modifications et soumet immédiatement le formulaire">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                Enregistrer la page
            </button>
            <button type="button" class="fullscreen-close-btn" id="fullscreenCloseIcon" aria-label="Fermer le plein écran">&times;</button>
        </div>
    </div>

    {{-- Corps en 2 colonnes : Workspace à gauche, Panneau Inspecteur d'Image à droite --}}
    <div class="fullscreen-editor-body">
        {{-- Colonne principale : Éditeur ou Visualisation --}}
        <div class="fullscreen-editor-workspace">
            {{-- Vue Édition avec TinyMCE plein écran --}}
            <div class="fullscreen-pane fullscreen-pane-edit is-active" id="fullscreenPaneEdit">
                <textarea id="modalEditorBody" class="fullscreen-textarea"></textarea>
            </div>

            {{-- Vue Visualisation fidèle au rendu public --}}
            <div class="fullscreen-pane fullscreen-pane-preview" id="fullscreenPanePreview">
                <div class="fullscreen-preview-shell">
                    <div class="fullscreen-preview-banner">
                        <span class="preview-badge">Aperçu direct</span>
                        <span>Rendu exact tel qu’il apparaîtra pour vos patients sur le site public</span>
                    </div>
                    <div class="fullscreen-preview-canvas service-entry service-entry-wide" id="fullscreenLivePreviewContent">
                        {{-- Le HTML généré est injecté ici dynamiquement --}}
                    </div>
                </div>
            </div>
        </div>

            {{-- Colonne latérale droite : Inspecteur et contrôle de la taille d'images --}}
        <aside class="fullscreen-image-sidebar" id="fullscreenImageSidebar">
            {{-- Bouton d'upload rapide direct d'une nouvelle photo --}}
            <div class="sidebar-upload-box">
                <button type="button" class="sidebar-upload-btn" id="modalQuickUploadBtn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="17 8 12 3 7 8"></polyline>
                        <line x1="12" y1="3" x2="12" y2="15"></line>
                    </svg>
                    <span>Insérer une nouvelle image</span>
                </button>
                <input type="file" id="modalQuickUploadInput" accept="image/jpeg,image/png,image/webp" style="display: none;">
                <p class="sidebar-upload-hint">Upload direct avec recadrage dynamique disponible</p>
            </div>

            <div class="sidebar-section-header">
                <div class="sidebar-title-row">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                    <h3>Taille & Style d'image</h3>
                </div>
                <span class="sidebar-badge" id="selectedImageStatusBadge">Sélectionnez une image</span>
            </div>

            {{-- Bloc de contrôle actif lorsqu'une image est cliquée --}}
            <div class="image-inspector-controls" id="imageInspectorControls" style="display: none;">
                {{-- Aperçu miniature de l'image sélectionnée --}}
                <div class="image-inspector-thumbnail">
                    <img id="inspectorThumbImg" src="" alt="Aperçu sélection">
                    <div class="image-inspector-dimensions">
                        <span id="inspectorNaturalDimensions">—</span>
                    </div>
                </div>

                {{-- 1. Raccourcis de largeur --}}
                <div class="inspector-field">
                    <label class="inspector-label">Largeur prédéfinie</label>
                    <div class="inspector-preset-grid">
                        <button type="button" class="inspector-preset-btn" data-width="25%">25%</button>
                        <button type="button" class="inspector-preset-btn" data-width="50%">50%</button>
                        <button type="button" class="inspector-preset-btn" data-width="75%">75%</button>
                        <button type="button" class="inspector-preset-btn is-active" data-width="100%">100%</button>
                    </div>
                </div>

                {{-- 2. Dimensions personnalisées --}}
                <div class="inspector-field">
                    <label class="inspector-label" for="inspectorCustomWidth">Largeur sur-mesure</label>
                    <div class="inspector-input-unit-group">
                        <input type="text" id="inspectorCustomWidth" class="inspector-input" placeholder="ex: 100% ou 600px">
                        <div class="inspector-unit-toggle">
                            <button type="button" class="inspector-unit-btn is-active" data-unit="%">%</button>
                            <button type="button" class="inspector-unit-btn" data-unit="px">px</button>
                        </div>
                    </div>
                    <p class="inspector-help">La hauteur s'ajuste automatiquement pour ne jamais déformer l'image.</p>
                </div>

                {{-- 3. Alignement & Disposition --}}
                <div class="inspector-field">
                    <label class="inspector-label">Disposition dans la page</label>
                    <div class="inspector-align-grid">
                        <button type="button" class="inspector-align-btn is-active" data-align="center" title="Image centrée au milieu du texte">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="10" x2="6" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="18" y1="18" x2="6" y2="18"></line></svg>
                            Centré
                        </button>
                        <button type="button" class="inspector-align-btn" data-align="left" title="Image à gauche, le texte s'enroule autour">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg>
                            Gauche
                        </button>
                        <button type="button" class="inspector-align-btn" data-align="right" title="Image à droite, le texte s'enroule autour">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="21" y1="10" x2="7" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="7" y2="18"></line></svg>
                            Droite
                        </button>
                    </div>
                </div>

                {{-- 4. Arrondi des coins --}}
                <div class="inspector-field">
                    <label class="inspector-label">Coins arrondis</label>
                    <div class="inspector-radius-grid">
                        <button type="button" class="inspector-radius-btn is-active" data-radius="0px">Droit</button>
                        <button type="button" class="inspector-radius-btn" data-radius="10px">Léger (10px)</button>
                        <button type="button" class="inspector-radius-btn" data-radius="20px">Moderne (20px)</button>
                    </div>
                </div>

                {{-- 5. Texte alternatif & Légende --}}
                <div class="inspector-field">
                    <label class="inspector-label" for="inspectorAltText">Texte descriptif (alt)</label>
                    <input type="text" id="inspectorAltText" class="inspector-input" placeholder="Description de la photo pour Google & malvoyants">
                </div>

                {{-- Actions de suppression --}}
                <div class="inspector-actions-row">
                    <button type="button" class="inspector-btn-danger" id="inspectorDeleteImgBtn">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        Retirer l'image
                    </button>
                </div>
            </div>

            {{-- Message d'aide si aucune image n'est sélectionnée --}}
            <div class="image-inspector-empty" id="imageInspectorEmpty">
                <div class="inspector-empty-icon">
                    <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                </div>
                <h4>Sélectionnez une photo</h4>
                <p>Cliquez directement sur une image dans le texte pour ouvrir ses réglages de taille, d’alignement et de bordures.</p>
            </div>

            {{-- Liste de toutes les images du document pour accès direct en 1 clic --}}
            <div class="inspector-doc-images-section">
                <div class="inspector-doc-header">
                    <h4>Images dans la page (<span id="inspectorDocImagesCount">0</span>)</h4>
                </div>
                <div class="inspector-doc-images-list" id="inspectorDocImagesList">
                    <p class="inspector-doc-empty-hint">Aucune image dans le contenu.</p>
                </div>
            </div>
        </aside>
    </div>
</div>

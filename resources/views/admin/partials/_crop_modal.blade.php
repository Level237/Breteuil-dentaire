<div class="crop-modal-overlay" id="cropModal" aria-hidden="true" role="dialog" aria-labelledby="cropModalTitle">
    <div class="crop-modal-dialog">
        <div class="crop-modal-header">
            <h3 id="cropModalTitle">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M6 2v14a2 2 0 0 0 2 2h14"></path>
                    <path d="M18 22V8a2 2 0 0 0-2-2H2"></path>
                </svg>
                Recadrer l'image dynamiquement
            </h3>
            <button type="button" class="crop-modal-close" id="cropModalClose" aria-label="Fermer la modale">&times;</button>
        </div>

        <div class="crop-modal-body">
            <div class="crop-toolbar">
                <div class="crop-toolbar-group">
                    <label>Proportions :</label>
                    <button type="button" class="crop-ratio-btn is-active" data-ratio="free">Libre</button>
                    <button type="button" class="crop-ratio-btn" data-ratio="16/9">16:9 (Bandeau)</button>
                    <button type="button" class="crop-ratio-btn" data-ratio="4/3">4:3 (Photo standard)</button>
                    <button type="button" class="crop-ratio-btn" data-ratio="1/1">1:1 (Carré)</button>
                </div>

                <div class="crop-toolbar-group">
                    <button type="button" class="crop-action-btn" id="cropRotateLeft" title="Pivoter à gauche de 90°">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2.5 2v6h6M2.66 15.57a10 10 0 1 0 .57-8.38l-2.73 2.81"/></svg>
                        -90°
                    </button>
                    <button type="button" class="crop-action-btn" id="cropRotateRight" title="Pivoter à droite de 90°">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l2.73 2.81"/></svg>
                        +90°
                    </button>
                    <button type="button" class="crop-action-btn" id="cropReset" title="Réinitialiser la sélection">
                        Réinitialiser
                    </button>
                </div>
            </div>

            <div class="crop-canvas-wrapper" id="cropCanvasWrapper">
                <canvas id="cropCanvas"></canvas>
            </div>
        </div>

        <div class="crop-modal-footer">
            <p class="crop-hint">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align: middle; margin-right: 4px;"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                Glissez la souris ou les poignées pour ajuster la zone de coupe. Le résultat sera centré et visible immédiatement.
            </p>
            <div class="crop-modal-footer-btns">
                <button type="button" class="admin-btn-secondary" id="cropModalCancel">Annuler</button>
                <button type="button" class="admin-submit admin-submit-inline" id="cropModalApply">
                    Appliquer le cadrage
                </button>
            </div>
        </div>
    </div>
</div>

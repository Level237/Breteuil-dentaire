/**
 * Breteuil Admin Interactive Image Cropper
 * Canvas HTML5 natif sans dépendance externe lourde.
 * Gère : centrage automatique, rotation ±90°, sélection interactive au ratio ou libre, aperçu direct.
 */
(function (window) {
    'use strict';

    let modalOverlay = null;
    let canvas = null;
    let ctx = null;
    let currentImage = null;
    let rotationAngle = 0; // 0, 90, 180, 270
    let currentRatio = 'free'; // 'free', '16/9', '4/3', '1/1'
    let cropBox = { x: 0, y: 0, w: 0, h: 0 };
    let onApplyCallback = null;

    let isDragging = false;
    let isResizing = false;
    let activeHandle = null;
    let dragStartX = 0;
    let dragStartY = 0;
    let initialCropBox = null;

    const HANDLE_SIZE = 12;

    function init() {
        modalOverlay = document.getElementById('cropModal');
        if (!modalOverlay) return;

        canvas = document.getElementById('cropCanvas');
        if (!canvas) return;
        ctx = canvas.getContext('2d');

        // Boutons fermer / annuler
        const closeBtn = document.getElementById('cropModalClose');
        const cancelBtn = document.getElementById('cropModalCancel');
        const applyBtn = document.getElementById('cropModalApply');

        if (closeBtn) closeBtn.addEventListener('click', close);
        if (cancelBtn) cancelBtn.addEventListener('click', close);
        if (applyBtn) applyBtn.addEventListener('click', applyCrop);

        // Ratios
        document.querySelectorAll('.crop-ratio-btn').forEach((btn) => {
            btn.addEventListener('click', (e) => {
                document.querySelectorAll('.crop-ratio-btn').forEach(b => b.classList.remove('is-active'));
                btn.classList.add('is-active');
                currentRatio = btn.dataset.ratio || 'free';
                resetCropBoxToRatio();
                redraw();
            });
        });

        // Rotations
        const rotateLeft = document.getElementById('cropRotateLeft');
        const rotateRight = document.getElementById('cropRotateRight');
        const resetBtn = document.getElementById('cropReset');

        if (rotateLeft) {
            rotateLeft.addEventListener('click', () => {
                rotationAngle = (rotationAngle - 90 + 360) % 360;
                setupCanvasWithRotation();
            });
        }

        if (rotateRight) {
            rotateRight.addEventListener('click', () => {
                rotationAngle = (rotationAngle + 90) % 360;
                setupCanvasWithRotation();
            });
        }

        if (resetBtn) {
            resetBtn.addEventListener('click', () => {
                rotationAngle = 0;
                setupCanvasWithRotation();
            });
        }

        // Événements souris / tactile sur le canvas
        canvas.addEventListener('mousedown', onPointerDown);
        window.addEventListener('mousemove', onPointerMove);
        window.addEventListener('mouseup', onPointerUp);

        canvas.addEventListener('touchstart', onTouchStart, { passive: false });
        window.addEventListener('touchmove', onTouchMove, { passive: false });
        window.addEventListener('touchend', onPointerUp);
    }

    function open(imageSource, callback) {
        if (!modalOverlay) init();
        if (!modalOverlay) return;

        onApplyCallback = callback;
        rotationAngle = 0;
        currentRatio = 'free';

        // Réinitialiser les boutons de ratio
        document.querySelectorAll('.crop-ratio-btn').forEach((b, i) => {
            if (i === 0) b.classList.add('is-active');
            else b.classList.remove('is-active');
        });

        const img = new Image();
        img.crossOrigin = 'anonymous';
        img.onload = () => {
            currentImage = img;
            setupCanvasWithRotation();
            modalOverlay.classList.add('is-open');
            modalOverlay.setAttribute('aria-hidden', 'false');
        };
        img.src = imageSource;
    }

    function close() {
        if (!modalOverlay) return;
        modalOverlay.classList.remove('is-open');
        modalOverlay.setAttribute('aria-hidden', 'true');
        currentImage = null;
        onApplyCallback = null;
    }

    function setupCanvasWithRotation() {
        if (!currentImage) return;

        const wrapper = document.getElementById('cropCanvasWrapper');
        const maxW = wrapper ? (wrapper.clientWidth - 20) : 760;
        const maxH = wrapper ? (wrapper.clientHeight - 20) : 380;

        const isSideways = rotationAngle === 90 || rotationAngle === 270;
        const sourceW = isSideways ? currentImage.height : currentImage.width;
        const sourceH = isSideways ? currentImage.width : currentImage.height;

        const scale = Math.min(maxW / sourceW, maxH / sourceH, 1);
        canvas.width = Math.round(sourceW * scale);
        canvas.height = Math.round(sourceH * scale);

        resetCropBoxToRatio();
        redraw();
    }

    function resetCropBoxToRatio() {
        const padding = 16;
        let targetW = canvas.width - (padding * 2);
        let targetH = canvas.height - (padding * 2);

        if (currentRatio !== 'free') {
            const [rw, rh] = currentRatio.split('/').map(Number);
            const expectedRatio = rw / rh;
            const currentBoxRatio = targetW / targetH;

            if (currentBoxRatio > expectedRatio) {
                targetW = targetH * expectedRatio;
            } else {
                targetH = targetW / expectedRatio;
            }
        }

        cropBox = {
            x: Math.round((canvas.width - targetW) / 2),
            y: Math.round((canvas.height - targetH) / 2),
            w: Math.round(targetW),
            h: Math.round(targetH)
        };
    }

    function drawRotatedSource(targetCtx, w, h) {
        targetCtx.save();
        targetCtx.translate(w / 2, h / 2);
        targetCtx.rotate((rotationAngle * Math.PI) / 180);

        const isSideways = rotationAngle === 90 || rotationAngle === 270;
        const dw = isSideways ? h : w;
        const dh = isSideways ? w : h;

        targetCtx.drawImage(currentImage, -dw / 2, -dh / 2, dw, dh);
        targetCtx.restore();
    }

    function redraw() {
        if (!ctx || !currentImage) return;

        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // 1. Dessin de l'image de base orientée
        drawRotatedSource(ctx, canvas.width, canvas.height);

        // 2. Masque sombre semi-transparent autour de la zone de coupe
        ctx.fillStyle = 'rgba(10, 20, 28, 0.62)';
        // Top
        ctx.fillRect(0, 0, canvas.width, cropBox.y);
        // Bottom
        ctx.fillRect(0, cropBox.y + cropBox.h, canvas.width, canvas.height - (cropBox.y + cropBox.h));
        // Left
        ctx.fillRect(0, cropBox.y, cropBox.x, cropBox.h);
        // Right
        ctx.fillRect(cropBox.x + cropBox.w, cropBox.y, canvas.width - (cropBox.x + cropBox.w), cropBox.h);

        // 3. Bordure de la zone de crop (turquoise Breteuil)
        ctx.strokeStyle = '#1e84b5';
        ctx.lineWidth = 2;
        ctx.strokeRect(cropBox.x, cropBox.y, cropBox.w, cropBox.h);

        // 4. Grille des tiers (style règle des tiers photo)
        ctx.strokeStyle = 'rgba(255, 255, 255, 0.35)';
        ctx.lineWidth = 1;
        ctx.setLineDash([4, 4]);
        ctx.beginPath();
        // Lignes verticales
        ctx.moveTo(cropBox.x + cropBox.w / 3, cropBox.y);
        ctx.lineTo(cropBox.x + cropBox.w / 3, cropBox.y + cropBox.h);
        ctx.moveTo(cropBox.x + (cropBox.w * 2) / 3, cropBox.y);
        ctx.lineTo(cropBox.x + (cropBox.w * 2) / 3, cropBox.y + cropBox.h);
        // Lignes horizontales
        ctx.moveTo(cropBox.x, cropBox.y + cropBox.h / 3);
        ctx.lineTo(cropBox.x + cropBox.w, cropBox.y + cropBox.h / 3);
        ctx.moveTo(cropBox.x, cropBox.y + (cropBox.h * 2) / 3);
        ctx.lineTo(cropBox.x + cropBox.w, cropBox.y + (cropBox.h * 2) / 3);
        ctx.stroke();
        ctx.setLineDash([]);

        // 5. Poignées aux coins et aux centres
        drawHandles();
    }

    function getHandles() {
        const { x, y, w, h } = cropBox;
        return {
            nw: { x: x, y: y, cursor: 'nwse-resize' },
            ne: { x: x + w, y: y, cursor: 'nesw-resize' },
            se: { x: x + w, y: y + h, cursor: 'nwse-resize' },
            sw: { x: x, y: y + h, cursor: 'nesw-resize' },
            n: { x: x + w / 2, y: y, cursor: 'ns-resize' },
            s: { x: x + w / 2, y: y + h, cursor: 'ns-resize' },
            e: { x: x + w, y: y + h / 2, cursor: 'ew-resize' },
            w: { x: x, y: y + h / 2, cursor: 'ew-resize' },
        };
    }

    function drawHandles() {
        const handles = getHandles();
        ctx.fillStyle = '#ffffff';
        ctx.strokeStyle = '#0e384c';
        ctx.lineWidth = 2;

        Object.values(handles).forEach(h => {
            ctx.beginPath();
            ctx.rect(h.x - HANDLE_SIZE / 2, h.y - HANDLE_SIZE / 2, HANDLE_SIZE, HANDLE_SIZE);
            ctx.fill();
            ctx.stroke();
        });
    }

    function getCanvasCoordinates(e) {
        const rect = canvas.getBoundingClientRect();
        const clientX = e.touches ? e.touches[0].clientX : e.clientX;
        const clientY = e.touches ? e.touches[0].clientY : e.clientY;
        return {
            x: (clientX - rect.left) * (canvas.width / rect.width),
            y: (clientY - rect.top) * (canvas.height / rect.height)
        };
    }

    function detectHit(coords) {
        const handles = getHandles();
        const threshold = HANDLE_SIZE + 4;

        for (const [key, h] of Object.entries(handles)) {
            if (Math.abs(coords.x - h.x) <= threshold && Math.abs(coords.y - h.y) <= threshold) {
                return { type: 'handle', handle: key, cursor: h.cursor };
            }
        }

        if (
            coords.x >= cropBox.x &&
            coords.x <= cropBox.x + cropBox.w &&
            coords.y >= cropBox.y &&
            coords.y <= cropBox.y + cropBox.h
        ) {
            return { type: 'inside', cursor: 'move' };
        }

        return { type: 'outside', cursor: 'crosshair' };
    }

    function onPointerDown(e) {
        if (!currentImage) return;
        const coords = getCanvasCoordinates(e);
        const hit = detectHit(coords);

        dragStartX = coords.x;
        dragStartY = coords.y;
        initialCropBox = { ...cropBox };

        if (hit.type === 'handle') {
            isResizing = true;
            activeHandle = hit.handle;
        } else if (hit.type === 'inside') {
            isDragging = true;
        } else {
            // Clic extérieur : amorcer un nouveau cadre
            isResizing = true;
            activeHandle = 'se';
            cropBox = { x: coords.x, y: coords.y, w: 20, h: 20 };
            initialCropBox = { ...cropBox };
            dragStartX = coords.x;
            dragStartY = coords.y;
        }
    }

    function onTouchStart(e) {
        e.preventDefault();
        onPointerDown(e);
    }

    function onPointerMove(e) {
        if (!currentImage || !canvas) return;
        const coords = getCanvasCoordinates(e);

        if (!isDragging && !isResizing) {
            const hit = detectHit(coords);
            canvas.style.cursor = hit.cursor;
            return;
        }

        const dx = coords.x - dragStartX;
        const dy = coords.y - dragStartY;

        if (isDragging) {
            let nextX = initialCropBox.x + dx;
            let nextY = initialCropBox.y + dy;

            nextX = Math.max(0, Math.min(canvas.width - initialCropBox.w, nextX));
            nextY = Math.max(0, Math.min(canvas.height - initialCropBox.h, nextY));

            cropBox.x = nextX;
            cropBox.y = nextY;
            redraw();
            return;
        }

        if (isResizing) {
            let nextX = initialCropBox.x;
            let nextY = initialCropBox.y;
            let nextW = initialCropBox.w;
            let nextH = initialCropBox.h;

            if (activeHandle.includes('e')) nextW = Math.max(30, initialCropBox.w + dx);
            if (activeHandle.includes('s')) nextH = Math.max(30, initialCropBox.h + dy);
            if (activeHandle.includes('w')) {
                const maxShift = initialCropBox.w - 30;
                const shift = Math.min(maxShift, dx);
                nextX = initialCropBox.x + shift;
                nextW = initialCropBox.w - shift;
            }
            if (activeHandle.includes('n')) {
                const maxShift = initialCropBox.h - 30;
                const shift = Math.min(maxShift, dy);
                nextY = initialCropBox.y + shift;
                nextH = initialCropBox.h - shift;
            }

            // Ratio contraint
            if (currentRatio !== 'free') {
                const [rw, rh] = currentRatio.split('/').map(Number);
                const ratio = rw / rh;
                if (activeHandle === 'e' || activeHandle === 'w' || activeHandle.includes('e')) {
                    nextH = nextW / ratio;
                } else {
                    nextW = nextH * ratio;
                }
            }

            // Bords canvas
            nextX = Math.max(0, nextX);
            nextY = Math.max(0, nextY);
            if (nextX + nextW > canvas.width) nextW = canvas.width - nextX;
            if (nextY + nextH > canvas.height) nextH = canvas.height - nextY;

            cropBox = { x: Math.round(nextX), y: Math.round(nextY), w: Math.round(nextW), h: Math.round(nextH) };
            redraw();
        }
    }

    function onTouchMove(e) {
        e.preventDefault();
        onPointerMove(e);
    }

    function onPointerUp() {
        isDragging = false;
        isResizing = false;
        activeHandle = null;
    }

    function applyCrop() {
        if (!currentImage || !onApplyCallback) return;

        // Créer un canvas intermédiaire à l'échelle réelle de l'image source (qualité maximale)
        const isSideways = rotationAngle === 90 || rotationAngle === 270;
        const realSourceW = isSideways ? currentImage.naturalHeight : currentImage.naturalWidth;
        const realSourceH = isSideways ? currentImage.naturalWidth : currentImage.naturalHeight;

        // Échelle entre le canvas affiché et la taille réelle
        const scaleX = realSourceW / canvas.width;
        const scaleY = realSourceH / canvas.height;

        const realCropX = Math.max(0, Math.round(cropBox.x * scaleX));
        const realCropY = Math.max(0, Math.round(cropBox.y * scaleY));
        const realCropW = Math.min(realSourceW - realCropX, Math.round(cropBox.w * scaleX));
        const realCropH = Math.min(realSourceH - realCropY, Math.round(cropBox.h * scaleY));

        // 1. Dessin de l'image entière orientée en pleine résolution
        const fullOrientedCanvas = document.createElement('canvas');
        fullOrientedCanvas.width = realSourceW;
        fullOrientedCanvas.height = realSourceH;
        const fullCtx = fullOrientedCanvas.getContext('2d');
        drawRotatedSource(fullCtx, realSourceW, realSourceH);

        // 2. Découpe de la sélection rognée et centrée
        const outputCanvas = document.createElement('canvas');
        outputCanvas.width = realCropW;
        outputCanvas.height = realCropH;
        const outCtx = outputCanvas.getContext('2d');

        outCtx.drawImage(
            fullOrientedCanvas,
            realCropX, realCropY, realCropW, realCropH,
            0, 0, realCropW, realCropH
        );

        outputCanvas.toBlob((blob) => {
            const dataUrl = outputCanvas.toDataURL('image/jpeg', 0.92);
            if (onApplyCallback) {
                onApplyCallback(blob, dataUrl);
            }
            close();
        }, 'image/jpeg', 0.92);
    }

    // Export global
    window.BreteuilCropper = {
        open: open,
        close: close
    };

    // Auto-init au chargement du DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})(window);

<script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.4/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    (function () {
        const uploadUrl = @json(route('admin.services.images'));
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const uploadBlob = (blob, filename) => new Promise((resolve, reject) => {
            const formData = new FormData();
            formData.append('file', blob, filename);

            fetch(uploadUrl, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                credentials: 'same-origin',
                body: formData
            }).then(async (response) => {
                const payload = await response.json().catch(() => ({}));
                if (!response.ok || !payload.location) {
                    reject('Le téléchargement de l’image a échoué. Utilisez un JPEG, PNG ou WebP (8 Mo max).');
                    return;
                }
                resolve(payload.location);
            }).catch(() => {
                reject('Impossible d’envoyer l’image. Vérifiez votre connexion.');
            });
        });

        tinymce.init({
            selector: '#body',
            menubar: false,
            branding: false,
            height: 520,
            plugins: 'lists link image autolink autoresize',
            toolbar: 'undo redo | blocks | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | removeformat',
            block_formats: 'Paragraphe=p; Titre 2=h2; Titre 3=h3',
            toolbar_mode: 'wrap',
            convert_urls: false,
            relative_urls: false,
            automatic_uploads: true,
            images_file_types: 'jpg,jpeg,png,webp',
            file_picker_types: 'image',
            image_title: true,
            image_description: true,
            image_uploadtab: true,
            images_upload_handler: (blobInfo) => uploadBlob(blobInfo.blob(), blobInfo.filename()),
            file_picker_callback: (callback, value, meta) => {
                if (meta.filetype !== 'image') {
                    return;
                }

                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/jpeg,image/png,image/webp';
                input.onchange = () => {
                    const file = input.files[0];
                    if (!file) {
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const dataUrl = e.target.result;
                        if (window.BreteuilCropper) {
                            window.BreteuilCropper.open(dataUrl, (croppedBlob) => {
                                uploadBlob(croppedBlob, file.name).then((url) => {
                                    callback(url, { title: file.name, alt: file.name.replace(/\.[^.]+$/, '') });
                                }).catch((message) => {
                                    window.alert(message);
                                });
                            });
                        } else {
                            uploadBlob(file, file.name).then((url) => {
                                callback(url, { title: file.name, alt: file.name.replace(/\.[^.]+$/, '') });
                            }).catch((message) => {
                                window.alert(message);
                            });
                        }
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            },
            license_key: 'gpl',
            promotion: false,
            statusbar: false
        });

        // Gestion interactive des Dropzones (Hero & Featured image)
        function setupDropzone(dropzoneId) {
            const dropzone = document.getElementById(dropzoneId);
            if (!dropzone) return;

            const inputId = dropzone.dataset.inputId;
            const previewId = dropzone.dataset.previewId;
            const removeId = dropzone.dataset.removeId;

            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);
            const emptyBox = dropzone.querySelector('.admin-dropzone-empty');
            const removeInput = document.getElementById(removeId);

            function showPreview(src) {
                preview.innerHTML = `
                    <img src="${src}" alt="Aperçu">
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
                `;
                preview.classList.add('has-image');
                emptyBox.classList.add('is-hidden');
                if (removeInput) removeInput.value = '0';
            }

            function clearImage() {
                input.value = '';
                preview.innerHTML = '';
                preview.classList.remove('has-image');
                emptyBox.classList.remove('is-hidden');
                if (removeInput) removeInput.value = '1';
            }

            // Écouteur pour les boutons supprimer et recadrer
            preview.addEventListener('click', (e) => {
                const removeBtn = e.target.closest('[data-action="remove"]');
                if (removeBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    clearImage();
                    return;
                }

                const cropBtn = e.target.closest('[data-action="crop"]');
                if (cropBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const img = preview.querySelector('img');
                    if (img && window.BreteuilCropper) {
                        window.BreteuilCropper.open(img.src, (croppedBlob, croppedDataUrl) => {
                            // Remplacer le fichier dans l'input file par le blob recadré
                            const originalFile = input.files && input.files[0];
                            const filename = originalFile ? originalFile.name : 'image-recadree.jpg';
                            const newFile = new File([croppedBlob], filename, { type: 'image/jpeg' });

                            const dt = new DataTransfer();
                            dt.items.add(newFile);
                            input.files = dt.files;

                            // Mettre à jour l'aperçu avec la version recadrée
                            showPreview(croppedDataUrl);
                        });
                    }
                }
            });

            // Quand un fichier est choisi
            input.addEventListener('change', () => {
                const file = input.files[0];
                if (!file) return;

                const reader = new FileReader();
                reader.onload = (e) => {
                    const dataUrl = e.target.result;
                    showPreview(dataUrl);

                    // Proposer directement le crop interactif lors du nouvel upload
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

            // Drag and drop visuel
            ['dragenter', 'dragover'].forEach(eventName => {
                dropzone.addEventListener(eventName, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    dropzone.classList.add('is-dragover');
                });
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropzone.addEventListener(eventName, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    dropzone.classList.remove('is-dragover');
                });
            });

            dropzone.addEventListener('drop', (e) => {
                const dt = e.dataTransfer;
                const files = dt.files;
                if (files && files.length > 0) {
                    input.files = files;
                    const event = new Event('change');
                    input.dispatchEvent(event);
                }
            });
        }

        setupDropzone('featuredDropzone');
        setupDropzone('heroDropzone');

        // ======================================================================
        // GESTION DU MODAL PLEIN ÉCRAN & INSPECTEUR DE TAILLE D'IMAGE
        // ======================================================================
        function setupFullscreenWorkspace() {
            const openBtn = document.getElementById('openFullscreenModalBtn');
            const modal = document.getElementById('fullscreenEditorModal');
            if (!openBtn || !modal) return;

            const closeIcon = document.getElementById('fullscreenCloseIcon');
            const cancelBtn = document.getElementById('fullscreenCancelBtn');
            const applyBtn = document.getElementById('fullscreenApplyBtn');
            const saveFormBtn = document.getElementById('fullscreenSaveFormBtn');

            const tabEdit = document.getElementById('tabModeEdit');
            const tabPreview = document.getElementById('tabModePreview');
            const paneEdit = document.getElementById('fullscreenPaneEdit');
            const panePreview = document.getElementById('fullscreenPanePreview');
            const previewCanvas = document.getElementById('fullscreenLivePreviewContent');

            // Inspecteur d'image
            const inspectorControls = document.getElementById('imageInspectorControls');
            const inspectorEmpty = document.getElementById('imageInspectorEmpty');
            const selectedBadge = document.getElementById('selectedImageStatusBadge');
            const inspectorThumbImg = document.getElementById('inspectorThumbImg');
            const inspectorNaturalDimensions = document.getElementById('inspectorNaturalDimensions');
            const customWidthInput = document.getElementById('inspectorCustomWidth');
            const altTextInput = document.getElementById('inspectorAltText');
            const deleteImgBtn = document.getElementById('inspectorDeleteImgBtn');
            const docImagesList = document.getElementById('inspectorDocImagesList');
            const docImagesCount = document.getElementById('inspectorDocImagesCount');

            let selectedImgElement = null;
            let currentUnit = '%';

            function getModalEditor() {
                return tinymce.get('modalEditorBody');
            }

            function getMainEditor() {
                return tinymce.get('body');
            }

            function openModal() {
                const mainEditor = getMainEditor();
                const currentContent = mainEditor ? mainEditor.getContent() : document.getElementById('body').value;

                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';

                // Initialiser l'éditeur TinyMCE dans le modal si ce n'est pas encore fait
                if (!getModalEditor()) {
                    tinymce.init({
                        selector: '#modalEditorBody',
                        menubar: true,
                        branding: false,
                        height: '100%',
                        resize: false,
                        autoresize_bottom_margin: 0,
                        plugins: 'lists link image table code visualblocks visualchars fullscreen preview media searchreplace',
                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table | code preview removeformat',
                        block_formats: 'Paragraphe=p; Titre 2=h2; Titre 3=h3; Titre 4=h4',
                        toolbar_mode: 'wrap',
                        convert_urls: false,
                        relative_urls: false,
                        automatic_uploads: true,
                        images_file_types: 'jpg,jpeg,png,webp',
                        file_picker_types: 'image',
                        image_title: true,
                        image_description: true,
                        image_uploadtab: true,
                        images_upload_handler: (blobInfo) => uploadBlob(blobInfo.blob(), blobInfo.filename()),
                        file_picker_callback: (callback, value, meta) => {
                            if (meta.filetype !== 'image') return;
                            const input = document.createElement('input');
                            input.type = 'file';
                            input.accept = 'image/jpeg,image/png,image/webp';
                            input.onchange = () => {
                                const file = input.files[0];
                                if (!file) return;

                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    const dataUrl = e.target.result;
                                    if (window.BreteuilCropper) {
                                        window.BreteuilCropper.open(dataUrl, (croppedBlob) => {
                                            uploadBlob(croppedBlob, file.name).then((url) => {
                                                callback(url, { title: file.name, alt: file.name.replace(/\.[^.]+$/, '') });
                                            }).catch((message) => {
                                                window.alert(message);
                                            });
                                        });
                                    } else {
                                        uploadBlob(file, file.name).then((url) => {
                                            callback(url, { title: file.name, alt: file.name.replace(/\.[^.]+$/, '') });
                                        }).catch((message) => {
                                            window.alert(message);
                                        });
                                    }
                                };
                                reader.readAsDataURL(file);
                            };
                            input.click();
                        },
                        content_style: `
                            html {
                                height: 100%;
                            }
                            body {
                                min-height: 100%;
                                font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                                font-size: 16px;
                                line-height: 1.75;
                                color: #1a2d37;
                                padding: 36px 48px;
                                max-width: 980px;
                                margin: 0 auto;
                                box-sizing: border-box;
                            }
                            img {
                                max-width: 100%;
                                height: auto;
                                transition: outline 0.15s ease, box-shadow 0.15s ease;
                            }
                            img:hover {
                                outline: 2px dashed #1e84b5;
                                cursor: pointer;
                            }
                        `,
                        license_key: 'gpl',
                        promotion: false,
                        statusbar: false,
                        setup: (editor) => {
                            editor.on('init', () => {
                                editor.setContent(currentContent);
                                refreshDocImages();
                            });

                            editor.on('NodeChange click keyup SetContent Change', () => {
                                detectSelectedImage();
                                refreshDocImages();
                            });
                        }
                    });
                } else {
                    const editor = getModalEditor();
                    editor.setContent(currentContent);
                    detectSelectedImage();
                    refreshDocImages();
                }

                // Réinitialiser la vue sur l'onglet Édition
                switchView('edit');
            }

            function closeModal() {
                const modalEditor = getModalEditor();
                if (modalEditor) {
                    const currentModalContent = modalEditor.getContent();
                    const mainEditor = getMainEditor();
                    if (mainEditor) {
                        mainEditor.setContent(currentModalContent);
                    }
                    const bodyTextarea = document.getElementById('body');
                    if (bodyTextarea) {
                        bodyTextarea.value = currentModalContent;
                    }
                }
                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            function applyContentToMain(shouldSubmit = false) {
                const modalEditor = getModalEditor();
                const content = modalEditor ? modalEditor.getContent() : '';
                const mainEditor = getMainEditor();

                if (mainEditor) {
                    mainEditor.setContent(content);
                }
                const bodyTextarea = document.getElementById('body');
                if (bodyTextarea) {
                    bodyTextarea.value = content;
                }

                closeModal();

                if (shouldSubmit) {
                    const form = document.querySelector('.admin-editor-form');
                    if (form) {
                        form.submit();
                    }
                }
            }

            function switchView(mode) {
                if (mode === 'preview') {
                    tabEdit.classList.remove('is-active');
                    tabPreview.classList.add('is-active');
                    paneEdit.classList.remove('is-active');
                    panePreview.classList.add('is-active');

                    const modalEditor = getModalEditor();
                    const content = modalEditor ? modalEditor.getContent() : '';
                    previewCanvas.innerHTML = content || '<p style="color:#94a3b8;font-style:italic;">Aucun texte saisi pour le moment.</p>';
                    panePreview.scrollTop = 0;
                } else {
                    tabPreview.classList.remove('is-active');
                    tabEdit.classList.add('is-active');
                    panePreview.classList.remove('is-active');
                    paneEdit.classList.add('is-active');
                }
            }

            function detectSelectedImage() {
                const editor = getModalEditor();
                if (!editor) return;

                const node = editor.selection.getNode();
                let img = null;

                if (node && node.nodeName === 'IMG') {
                    img = node;
                } else if (node && node.querySelector && node.querySelector('img')) {
                    img = node.querySelector('img');
                }

                if (img) {
                    selectedImgElement = img;
                    inspectorControls.style.display = 'block';
                    inspectorEmpty.style.display = 'none';
                    selectedBadge.textContent = 'Image active';
                    selectedBadge.classList.add('is-selected');

                    inspectorThumbImg.src = img.src;
                    const nw = img.naturalWidth || img.width || 'auto';
                    const nh = img.naturalHeight || img.height || 'auto';
                    inspectorNaturalDimensions.textContent = `${nw} × ${nh} px`;

                    // Largeur actuelle
                    const rawWidth = img.style.width || img.getAttribute('width') || '';
                    customWidthInput.value = rawWidth;

                    // Mettre à jour les boutons de largeur prédéfinie
                    document.querySelectorAll('.inspector-preset-btn').forEach(btn => {
                        const targetW = btn.dataset.width;
                        if (rawWidth === targetW || (targetW === '100%' && (!rawWidth || rawWidth === '100%'))) {
                            btn.classList.add('is-active');
                        } else {
                            btn.classList.remove('is-active');
                        }
                    });

                    // Détecter l'alignement
                    const isCentered = (img.style.marginLeft === 'auto' && img.style.marginRight === 'auto') || img.style.display === 'block';
                    const isFloatLeft = img.style.float === 'left';
                    const isFloatRight = img.style.float === 'right';

                    document.querySelectorAll('.inspector-align-btn').forEach(btn => {
                        btn.classList.remove('is-active');
                        const align = btn.dataset.align;
                        if (align === 'center' && isCentered && !isFloatLeft && !isFloatRight) btn.classList.add('is-active');
                        if (align === 'left' && isFloatLeft) btn.classList.add('is-active');
                        if (align === 'right' && isFloatRight) btn.classList.add('is-active');
                    });

                    // Détecter les coins arrondis
                    const br = img.style.borderRadius || '0px';
                    document.querySelectorAll('.inspector-radius-btn').forEach(btn => {
                        if (btn.dataset.radius === br) {
                            btn.classList.add('is-active');
                        } else {
                            btn.classList.remove('is-active');
                        }
                    });

                    // Alt text
                    altTextInput.value = img.alt || '';
                } else {
                    selectedImgElement = null;
                    inspectorControls.style.display = 'none';
                    inspectorEmpty.style.display = 'block';
                    selectedBadge.textContent = 'Sélectionnez une image';
                    selectedBadge.classList.remove('is-selected');
                }
            }

            function refreshDocImages() {
                const editor = getModalEditor();
                if (!editor || !docImagesList) return;

                const images = editor.dom.select('img');
                docImagesCount.textContent = images.length;

                if (images.length === 0) {
                    docImagesList.innerHTML = '<p class="inspector-doc-empty-hint">Aucune image dans le contenu.</p>';
                    return;
                }

                docImagesList.innerHTML = '';
                images.forEach((img, index) => {
                    const item = document.createElement('div');
                    item.className = 'inspector-doc-img-item';
                    if (selectedImgElement === img) {
                        item.classList.add('is-selected');
                    }

                    const label = img.alt || img.title || `Photo n°${index + 1}`;
                    const dim = img.style.width || '100%';

                    item.innerHTML = `
                        <img src="${img.src}" alt="${label}">
                        <div class="inspector-doc-img-meta">
                            <strong>${label}</strong><br>
                            <span style="color:#64748b;">Taille: ${dim}</span>
                        </div>
                    `;

                    item.addEventListener('click', () => {
                        editor.selection.select(img);
                        editor.selection.scrollIntoView(img);
                        editor.nodeChanged();
                        detectSelectedImage();
                        refreshDocImages();
                    });

                    docImagesList.appendChild(item);
                });
            }

            // Événements boutons de l'inspecteur
            // 1. Boutons de largeur prédéfinie
            document.querySelectorAll('.inspector-preset-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    if (!selectedImgElement) return;
                    const w = btn.dataset.width;

                    document.querySelectorAll('.inspector-preset-btn').forEach(b => b.classList.remove('is-active'));
                    btn.classList.add('is-active');

                    selectedImgElement.style.width = w;
                    selectedImgElement.style.height = 'auto';
                    selectedImgElement.style.maxWidth = '100%';
                    customWidthInput.value = w;

                    const editor = getModalEditor();
                    if (editor) editor.nodeChanged();
                    refreshDocImages();
                });
            });

            // 2. Input largeur personnalisée
            customWidthInput.addEventListener('input', () => {
                if (!selectedImgElement) return;
                let val = customWidthInput.value.trim();
                if (!val) return;

                // Si l'utilisateur tape un nombre pur, rajouter l'unité courante
                if (/^\d+$/.test(val)) {
                    val = val + currentUnit;
                }

                selectedImgElement.style.width = val;
                selectedImgElement.style.height = 'auto';
                selectedImgElement.style.maxWidth = '100%';

                const editor = getModalEditor();
                if (editor) editor.nodeChanged();
            });

            // Bascule unité % / px
            document.querySelectorAll('.inspector-unit-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.inspector-unit-btn').forEach(b => b.classList.remove('is-active'));
                    btn.classList.add('is-active');
                    currentUnit = btn.dataset.unit;

                    if (selectedImgElement && customWidthInput.value) {
                        const num = parseInt(customWidthInput.value, 10);
                        if (!isNaN(num)) {
                            customWidthInput.value = num + currentUnit;
                            selectedImgElement.style.width = num + currentUnit;
                            selectedImgElement.style.height = 'auto';
                            const editor = getModalEditor();
                            if (editor) editor.nodeChanged();
                        }
                    }
                });
            });

            // 3. Alignement
            document.querySelectorAll('.inspector-align-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    if (!selectedImgElement) return;
                    document.querySelectorAll('.inspector-align-btn').forEach(b => b.classList.remove('is-active'));
                    btn.classList.add('is-active');

                    const align = btn.dataset.align;
                    if (align === 'center') {
                        selectedImgElement.style.display = 'block';
                        selectedImgElement.style.marginLeft = 'auto';
                        selectedImgElement.style.marginRight = 'auto';
                        selectedImgElement.style.float = 'none';
                    } else if (align === 'left') {
                        selectedImgElement.style.display = 'inline';
                        selectedImgElement.style.float = 'left';
                        selectedImgElement.style.margin = '0 24px 16px 0';
                    } else if (align === 'right') {
                        selectedImgElement.style.display = 'inline';
                        selectedImgElement.style.float = 'right';
                        selectedImgElement.style.margin = '0 0 16px 24px';
                    }

                    const editor = getModalEditor();
                    if (editor) editor.nodeChanged();
                });
            });

            // 4. Coins arrondis
            document.querySelectorAll('.inspector-radius-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    if (!selectedImgElement) return;
                    document.querySelectorAll('.inspector-radius-btn').forEach(b => b.classList.remove('is-active'));
                    btn.classList.add('is-active');

                    selectedImgElement.style.borderRadius = btn.dataset.radius;

                    const editor = getModalEditor();
                    if (editor) editor.nodeChanged();
                });
            });

            // 5. Texte alternatif
            altTextInput.addEventListener('input', () => {
                if (!selectedImgElement) return;
                const txt = altTextInput.value.trim();
                selectedImgElement.alt = txt;
                selectedImgElement.title = txt;
                const editor = getModalEditor();
                if (editor) editor.nodeChanged();
                refreshDocImages();
            });

            // 6. Supprimer l'image
            deleteImgBtn.addEventListener('click', () => {
                if (!selectedImgElement) return;
                selectedImgElement.remove();
                selectedImgElement = null;

                const editor = getModalEditor();
                if (editor) {
                    editor.nodeChanged();
                }
                detectSelectedImage();
                refreshDocImages();
            });

            // 7. Bouton d'upload rapide depuis la barre latérale
            const quickUploadBtn = document.getElementById('modalQuickUploadBtn');
            const quickUploadInput = document.getElementById('modalQuickUploadInput');

            if (quickUploadBtn && quickUploadInput) {
                quickUploadBtn.addEventListener('click', () => {
                    quickUploadInput.click();
                });

                quickUploadInput.addEventListener('change', () => {
                    const file = quickUploadInput.files[0];
                    if (!file) return;

                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const dataUrl = e.target.result;
                        const handleInsert = (blobToUpload) => {
                            uploadBlob(blobToUpload, file.name).then((url) => {
                                const editor = getModalEditor();
                                if (!editor) return;

                                const alt = file.name.replace(/\.[^.]+$/, '');
                                const imgHtml = `<p style="text-align: center;"><img src="${url}" alt="${alt}" style="width: 100%; max-width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;"></p>`;
                                editor.insertContent(imgHtml);
                                editor.nodeChanged();
                                refreshDocImages();
                            }).catch((err) => {
                                window.alert(err || 'Erreur lors de l’envoi de l’image.');
                            });
                        };

                        if (window.BreteuilCropper) {
                            window.BreteuilCropper.open(dataUrl, (croppedBlob) => {
                                handleInsert(croppedBlob);
                            });
                        } else {
                            handleInsert(file);
                        }
                    };
                    reader.readAsDataURL(file);
                    quickUploadInput.value = '';
                });
            }

            // Événements modale & onglets
            openBtn.addEventListener('click', openModal);
            closeIcon.addEventListener('click', closeModal);
            cancelBtn.addEventListener('click', closeModal);
            applyBtn.addEventListener('click', () => applyContentToMain(false));
            saveFormBtn.addEventListener('click', () => applyContentToMain(true));

            tabEdit.addEventListener('click', () => switchView('edit'));
            tabPreview.addEventListener('click', () => switchView('preview'));

            // Fermer avec la touche Échap
            window.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modal.classList.contains('is-open')) {
                    closeModal();
                }
            });
        }

        setupFullscreenWorkspace();
    })();
</script>

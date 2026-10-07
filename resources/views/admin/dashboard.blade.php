@extends('admin.layouts.app')

@section('title', 'Tableau de bord')
@section('heading', 'Tableau de bord')

@section('content')
    <div class="admin-dashboard-hero">
        <div class="admin-dashboard-hero-text">
            <h2>Bienvenue, {{ auth()->user()->name }}</h2>
            <p>Espace de gestion opérationnelle du cabinet dentaire de l'Abbaye de Breteuil.</p>
        </div>
        <div class="admin-dashboard-hero-meta">
            <span class="admin-chip">{{ $stats['services_count'] ?? 0 }} services</span>
            <span class="admin-chip">{{ $stats['faqs_count'] ?? 0 }} FAQ</span>
            <span class="admin-chip admin-chip-accent">Galeries, personnel, services &amp; FAQ</span>
        </div>
    </div>

    <!-- Bento Grid métriques -->
    <div class="admin-bento-grid">
        <!-- Carte Galerie -->
        <div class="admin-bento-card admin-bento-span-2">
            <div class="admin-bento-header">
                <div>
                    <span class="admin-bento-tag">Module Actif</span>
                    <h3>Galerie du cabinet</h3>
                </div>
                <div class="admin-bento-stat-num">{{ $stats['galleries_count'] ?? 0 }}</div>
            </div>
            <p class="admin-bento-desc">
                Photos visibles sur la page publique « Visite du cabinet » avec texte alternatif (alt) accessible et compression automatique.
            </p>

            @if(isset($latestGalleries) && $latestGalleries->isNotEmpty())
                <div class="admin-mini-gallery-strip">
                    @foreach($latestGalleries as $item)
                        <div class="admin-mini-gallery-item" title="{{ $item->alt }}">
                            <img src="{{ $item->url }}" alt="{{ $item->alt }}">
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="admin-bento-actions">
                <a href="{{ route('admin.galeries.index') }}" class="admin-btn-primary">
                    <span>Gérer les {{ $stats['galleries_count'] ?? 0 }} photos</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <a href="{{ route('admin.galeries.create') }}" class="admin-btn-ghost">Ajouter une photo</a>
            </div>
        </div>

        <!-- Carte Personnel -->
        <div class="admin-bento-card">
            <div class="admin-bento-header">
                <div>
                    <span class="admin-bento-tag">Module Actif</span>
                    <h3>Personnel</h3>
                </div>
                <div class="admin-bento-stat-num">{{ $stats['personnel_count'] ?? 0 }}</div>
            </div>
            <p class="admin-bento-desc">
                Gestion des praticiens et assistants du cabinet : Dr Dassie, Dr Aboulker, Dr Nana Lowe.
            </p>
            <div class="admin-team-quick">
                <div class="admin-team-pill">Dr Fabrice DASSIE</div>
                <div class="admin-team-pill">Dr Mickael ABOULKER</div>
                <div class="admin-team-pill">Dr Priscile NANA LOWE</div>
            </div>
            <div class="admin-bento-actions">
                <a href="{{ route('admin.personnel.index') }}" class="admin-btn-secondary">
                    <span>Gérer l'équipe ({{ $stats['personnel_count'] ?? 0 }})</span>
                </a>
            </div>
        </div>

        <div class="admin-bento-card">
            <div class="admin-bento-header">
                <div>
                    <span class="admin-bento-tag">Module Actif</span>
                    <h3>FAQ</h3>
                </div>
                <div class="admin-bento-stat-num">{{ $stats['faqs_count'] ?? 0 }}</div>
            </div>
            <p class="admin-bento-desc">
                Questions / réponses affichées sur la page publique FAQ, regroupées par catégorie.
            </p>
            <div class="admin-bento-actions">
                <a href="{{ route('admin.faqs.index') }}" class="admin-btn-secondary">
                    <span>Gérer les FAQ ({{ $stats['faqs_count'] ?? 0 }})</span>
                </a>
            </div>
        </div>

        <!-- Carte Raccourcis & Santé -->
        <div class="admin-bento-card">
            <div class="admin-bento-header">
                <div>
                    <span class="admin-bento-tag">Sécurité & Système</span>
                    <h3>État du cabinet</h3>
                </div>
            </div>
            <ul class="admin-system-list">
                <li>
                    <span class="admin-system-dot ok"></span>
                    <div>
                        <strong>Authentification admin</strong>
                        <p>Session active & protégée</p>
                    </div>
                </li>
                <li>
                    <span class="admin-system-dot ok"></span>
                    <div>
                        <strong>Stockage public</strong>
                        <p>Lien symbolique actif (/storage)</p>
                    </div>
                </li>
                <li>
                    <span class="admin-system-dot {{ function_exists('imagecreatefromstring') ? 'ok' : 'warn' }}"></span>
                    <div>
                        <strong>Compression JPEG</strong>
                        <p>{{ function_exists('imagecreatefromstring') ? 'Extension GD active' : 'GD absent (upload direct actif)' }}</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Carte Infos pratiques -->
        <div class="admin-bento-card admin-bento-span-2">
            <div class="admin-bento-header">
                <div>
                    <span class="admin-bento-tag">Coordonnées publiées</span>
                    <h3>Cabinet Dentaire de l'Abbaye de Breteuil</h3>
                </div>
                <a href="{{ route('visite-cabinet') }}" target="_blank" class="admin-link-accent">Voir le site en direct →</a>
            </div>
            <div class="admin-contact-grid">
                <div>
                    <span class="admin-contact-label">Adresse</span>
                    <p class="admin-contact-val">5 bis rue Tassart, 60120 Breteuil</p>
                </div>
                <div>
                    <span class="admin-contact-label">Téléphone</span>
                    <p class="admin-contact-val">03 74 47 24 24</p>
                </div>
                <div>
                    <span class="admin-contact-label">E-mail</span>
                    <p class="admin-contact-val">breteuildentaire@gmail.com</p>
                </div>
                <div>
                    <span class="admin-contact-label">Horaires</span>
                    <p class="admin-contact-val">Lun–Ven : 09h00–19h00</p>
                </div>
            </div>
        </div>
    </div>
@endsection

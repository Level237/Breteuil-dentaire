<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Administration') — Breteuil Dentaire</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin.css') }}?v={{ filemtime(public_path('assets/css/admin.css')) }}" rel="stylesheet">
</head>
<body class="admin-body">
    <div class="admin-shell">
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="admin-sidebar-header">
                <a class="admin-brand" href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/images/footer-logo.svg') }}" alt="Breteuil Dentaire">
                </a>
                <span class="admin-badge-env">Back-Office</span>
            </div>

            <div class="admin-nav-section-title">Navigation principale</div>
            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="admin-nav-item {{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}">
                    <span class="admin-nav-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="9" rx="1.5"></rect>
                            <rect x="14" y="3" width="7" height="5" rx="1.5"></rect>
                            <rect x="14" y="12" width="7" height="9" rx="1.5"></rect>
                            <rect x="3" y="16" width="7" height="5" rx="1.5"></rect>
                        </svg>
                    </span>
                    <span class="admin-nav-text">Tableau de bord</span>
                </a>

                <a href="{{ route('admin.galeries.index') }}" class="admin-nav-item {{ request()->routeIs('admin.galeries.*') ? 'is-active' : '' }}">
                    <span class="admin-nav-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                    </span>
                    <span class="admin-nav-text">Galeries</span>
                </a>

                <a href="{{ route('admin.personnel.index') }}" class="admin-nav-item {{ request()->routeIs('admin.personnel.*') ? 'is-active' : '' }}">
                    <span class="admin-nav-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </span>
                    <span class="admin-nav-text">Personnel</span>
                </a>
            </nav>

            <div class="admin-nav-section-title">Site public</div>
            <nav class="admin-nav">
                <a href="{{ route('visite-cabinet') }}" target="_blank" class="admin-nav-item">
                    <span class="admin-nav-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </span>
                    <span class="admin-nav-text">Voir le site</span>
                </a>
            </nav>

            <div class="admin-sidebar-footer">
                <div class="admin-user-card">
                    <div class="admin-avatar">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="admin-user-info">
                        <div class="admin-user-name">{{ auth()->user()->name }}</div>
                        <div class="admin-user-role">Administrateur</div>
                    </div>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}" class="admin-logout-form">
                    @csrf
                    <button type="submit" class="admin-logout-btn" title="Se déconnecter">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span>Quitter</span>
                    </button>
                </form>
            </div>
        </aside>

        <div class="admin-main">
            <header class="admin-topbar">
                <div class="admin-topbar-left">
                    <button type="button" class="admin-mobile-toggle" id="adminSidebarToggle" aria-label="Menu">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                    <div>
                        <p class="admin-eyebrow">Cabinet dentaire · Breteuil</p>
                        <h1>@yield('heading')</h1>
                    </div>
                </div>

                <div class="admin-topbar-actions">
                    <div class="admin-status-pill">
                        <span class="admin-status-dot"></span>
                        <span>Cabinet Ouvert</span>
                    </div>
                    <a href="{{ route('admin.galeries.create') }}" class="admin-btn-quick">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        <span>Ajouter photo</span>
                    </a>
                </div>
            </header>

            <main class="admin-content">
                @if (session('success'))
                    <div class="admin-flash admin-flash-success">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="admin-flash admin-flash-error">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                        <span>Le formulaire contient des erreurs. Vérifiez les champs indiqués.</span>
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>

    <div class="admin-sidebar-backdrop" id="adminSidebarBackdrop"></div>

    <script>
        (function() {
            const toggle = document.getElementById('adminSidebarToggle');
            const sidebar = document.getElementById('adminSidebar');
            const backdrop = document.getElementById('adminSidebarBackdrop');

            if (toggle && sidebar && backdrop) {
                toggle.addEventListener('click', () => {
                    sidebar.classList.toggle('is-open');
                    backdrop.classList.toggle('is-open');
                });
                backdrop.addEventListener('click', () => {
                    sidebar.classList.remove('is-open');
                    backdrop.classList.remove('is-open');
                });
            }
        })();
    </script>
</body>
</html>

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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
</head>
<body class="admin-body">
    <div class="admin-shell">
        <aside class="admin-sidebar">
            <a class="admin-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('assets/images/footer-logo.svg') }}" alt="Breteuil Dentaire">
            </a>
            <p class="admin-brand-label">Espace cabinet</p>
            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}">Tableau de bord</a>
                <a href="{{ route('admin.galeries.index') }}" class="{{ request()->routeIs('admin.galeries.*') ? 'is-active' : '' }}">Galeries</a>
                <a href="{{ route('admin.personnel.index') }}" class="{{ request()->routeIs('admin.personnel.*') ? 'is-active' : '' }}">Personnel</a>
            </nav>
        </aside>
        <div class="admin-main">
            <header class="admin-topbar">
                <div>
                    <p class="admin-eyebrow">Administration</p>
                    <h1>@yield('heading')</h1>
                </div>
                <div class="admin-topbar-actions">
                    <span>{{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="admin-link-btn">Déconnexion</button>
                    </form>
                </div>
            </header>
            <main class="admin-content">
                @if (session('success'))
                    <p class="admin-flash admin-flash-success">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    <p class="admin-flash admin-flash-error">Le formulaire contient des erreurs. Vérifiez les champs indiqués.</p>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

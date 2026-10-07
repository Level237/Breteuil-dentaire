@extends('admin.layouts.guest')

@section('title', 'Connexion administrateur')

@section('content')
    <div class="admin-login">
        <section
            class="admin-login-panel"
            style="background-image: url('{{ asset('assets/images/galeries/galerie1.jpg') }}');"
        >
            <p class="admin-eyebrow">Cabinet dentaire</p>
            <h1>Breteuil Dentaire</h1>
            <p class="admin-login-lead">Connexion à l’espace de gestion du cabinet. Accès réservé à l’administrateur.</p>
        </section>
        <section class="admin-login-form-wrap">
            <div class="admin-login-box">
                <img class="admin-login-logo" src="{{ asset('assets/images/logo.svg') }}" alt="Breteuil Dentaire">
                <h2>Se connecter</h2>
                <form method="POST" action="{{ route('admin.login.store') }}" novalidate>
                    @csrf
                    <div class="admin-field">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus autocomplete="username">
                        @error('email')
                            <p class="admin-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="admin-field">
                        <label for="password">Mot de passe</label>
                        <input id="password" type="password" name="password" placeholder="Mot de passe" required autocomplete="current-password">
                        @error('password')
                            <p class="admin-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <label class="admin-check">
                        <input type="checkbox" name="remember">
                        Rester connecté
                    </label>
                    <button type="submit" class="admin-submit">Connexion</button>
                </form>
                <p class="admin-login-back"><a href="{{ route('homepage') }}">Retour au site</a></p>
            </div>
        </section>
    </div>
@endsection

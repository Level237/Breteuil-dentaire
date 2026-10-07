@extends('admin.layouts.app')

@section('title', 'Tableau de bord')
@section('heading', 'Tableau de bord')

@section('content')
    <p class="admin-intro">Gérez les galeries du cabinet et le personnel depuis cet espace.</p>
    <div class="admin-cards">
        <a class="admin-card" href="{{ route('admin.galeries.index') }}">
            <h2>Galeries</h2>
            <p>Ajouter, modifier ou retirer les photos de la visite du cabinet.</p>
            <span>Ouvrir</span>
        </a>
        <a class="admin-card" href="{{ route('admin.personnel.index') }}">
            <h2>Personnel</h2>
            <p>Gérer les fiches de l’équipe affichées sur le site public.</p>
            <span>Ouvrir</span>
        </a>
    </div>
@endsection

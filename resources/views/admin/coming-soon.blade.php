@extends('admin.layouts.app')

@section('title', $title)
@section('heading', $title)

@section('content')
    <p class="admin-intro">Ce module est prévu à l’étape suivante du backlog. Le tableau de bord et la connexion sont en place ; la gestion n’est pas encore construite.</p>
    <p><a class="admin-submit admin-submit-inline" href="{{ route('admin.dashboard') }}">Retour au tableau de bord</a></p>
@endsection

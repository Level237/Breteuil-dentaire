@extends('admin.layouts.app')

@section('title', 'Ajouter une FAQ')
@section('heading', 'Nouvelle question')

@section('content')
    <form class="admin-form" method="POST" action="{{ route('admin.faqs.store') }}">
        @csrf
        @include('admin.faqs._form', ['faq' => null])

        <div class="admin-form-actions">
            <button type="submit" class="admin-submit admin-submit-inline">Enregistrer la question</button>
            <a href="{{ route('admin.faqs.index') }}">Annuler</a>
        </div>
    </form>
@endsection

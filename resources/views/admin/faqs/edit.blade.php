@extends('admin.layouts.app')

@section('title', 'Modifier une FAQ')
@section('heading', 'Modifier la question')

@section('content')
    <form class="admin-form" method="POST" action="{{ route('admin.faqs.update', $faq) }}">
        @csrf
        @method('PUT')
        @include('admin.faqs._form')

        <div class="admin-form-actions">
            <button type="submit" class="admin-submit admin-submit-inline">Mettre à jour</button>
            <a href="{{ route('admin.faqs.index') }}">Annuler</a>
        </div>
    </form>
@endsection

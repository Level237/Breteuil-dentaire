@extends('layouts.main')

@section('title')
Notre Équipe
@endsection

@section("meta_title", "Notre équipe")
@section("meta_description", "Breteuil dentaire — Les chirurgiens-dentistes et l'équipe du cabinet")
@section("meta_image", asset('assets/images/service-entry-img-1.jpg'))

@section("main")
<div class="page-header" style="background-image: url({{ asset('assets/images/dark-team.jpg') }}); background-size: cover; height: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Notre</span> Équipe</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">Accueil</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Notre Équipe</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-team">
    <div class="container">
        <div class="row">
            @forelse ($members as $member)
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="team-member-item wow fadeInUp">
                        <a href="{{ route('team.show', $member->slug) }}">
                            <div class="team-image">
                                <figure class="image-anime">
                                    @if ($member->photo_url)
                                        <img src="{{ $member->photo_url }}" alt="{{ $member->name }}">
                                    @else
                                        <img src="{{ asset('assets/images/teams/Dr-Fabrice-Dassie.png') }}" alt="{{ $member->name }}">
                                    @endif
                                </figure>
                                <div class="team-social-icon"></div>
                            </div>
                        </a>
                        <div class="team-content">
                            <h3><a href="{{ route('team.show', $member->slug) }}">{{ $member->name }}</a></h3>
                            <p>{{ $member->role }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>L’équipe du cabinet sera bientôt affichée ici.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

@extends('layouts.main')

@section('title')
{{ $member->name }}
@endsection
@section("meta_title", $member->name)
@section("meta_description", "Breteuil dentaire - " . $member->name . " (" . $member->role . ")")
@section("meta_image", $member->photo_url ?? asset('assets/images/accueil.jpeg'))

@section("main")
<div class="page-header" style="background: linear-gradient(135deg, #0e384c 0%, #1e84b5 100%); background-size: cover; height: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $member->name }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('team') }}" style="color:#8b8b8b">Notre Équipe</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">{{ $member->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-team-single">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div class="team-member-image">
                    <figure class="image-anime">
                        @if ($member->photo_url)
                            <img src="{{ $member->photo_url }}" alt="{{ $member->name }}">
                        @else
                            <img src="{{ asset('assets/images/teams/Dr-Fabrice-Dassie.png') }}" alt="{{ $member->name }}">
                        @endif
                    </figure>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-member-details">
                    <div class="member-detail-header">
                        <h2 class="text-anime-style-2">{{ $member->name }}</h2>
                        <p class="wow fadeInUp">{{ $member->role }}</p>
                    </div>

                    @if(!empty($member->diplomas))
                        <div class="member-detail-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                @foreach($member->diplomas as $diploma)
                                    <li>{{ $diploma }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="member-social-list">
                        <ul class="wow fadeInUp" data-wow-delay="0.75s">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-member-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-sidebar-cta wow fadeInUp" data-wow-delay="0.25s">
                    <div class="cta-info-content">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-cta.svg') }}" alt="">
                        </div>

                        <div class="cta-content">
                            <h3>Prêt à entamer votre voyage pour une consultation ?</h3>
                            <p>Prenez rendez-vous dès aujourd'hui pour une première consultation et commencez votre voyage vers un sourire plus sain et sans douleur. Contactez-nous dès maintenant !</p>

                            <div class="cta-appointment-btn">
                                @if ($member->appointment_url)
                                    <a href="{{ $member->appointment_url }}" target="_blank" rel="noopener" class="btn-default">Prendre un rendez-vous</a>
                                @else
                                    <a href="{{ route('appointment') }}" class="btn-default">Prendre un rendez-vous</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

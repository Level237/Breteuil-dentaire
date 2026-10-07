@extends('layouts.main')

@section('title')
    Nos Services
@endsection

@section('main')
    <div class="page-header"
        style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Nos </span>services</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">Accueil</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-services">
        <div class="container">
            @forelse ($servicesByCategory as $categoryKey => $services)
                <div class="service-catalog-section">
                    <div class="section-title text-center" style="margin-bottom: 40px;">
                        <h3 class="wow fadeInUp">{{ \App\Models\Service::CATEGORIES[$categoryKey] ?? $categoryKey }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            {{ $services->count() }} {{ $services->count() > 1 ? 'soins proposés' : 'soin proposé' }}
                        </h2>
                    </div>

                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6">
                                <article class="service-item service-catalog-item wow fadeInUp">
                                    <a href="{{ $service->publicUrl() }}" class="service-catalog-thumb">
                                        @if ($service->featured_url || $service->hero_url)
                                            <img src="{{ $service->featured_url ?? $service->hero_url }}" alt="{{ $service->title }}">
                                        @else
                                            <img src="{{ asset('assets/images/service-entry-img-1.jpg') }}" alt="{{ $service->title }}">
                                        @endif
                                    </a>
                                    <div class="service-body">
                                        <h3><a href="{{ $service->publicUrl() }}">{{ $service->title }}</a></h3>
                                        @if ($service->excerpt)
                                            <p>{{ \Illuminate\Support\Str::limit($service->excerpt, 110) }}</p>
                                        @endif
                                    </div>
                                    <div class="read-more-btn">
                                        <a href="{{ $service->publicUrl() }}">Voir plus</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col-12">
                        <p>Les services du cabinet seront bientôt affichés ici.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <div class="contact-now" style="background:#eff8ff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="how-it-work-img">
                        <figure class="reveal image-anime">
                            <img src="{{ asset('assets/images/how-it-work-img.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-now-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contactez nous</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prenez rendez-vous </span>pour un suivi</h2>
                        </div>

                        <div class="contact-now-info">
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>7 place du 8 mai 1945, 60120 Breteuil</p>
                                </div>
                            </div>

                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>03 74 47 24 24</p>
                                </div>
                            </div>

                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>breteuildentaire@gmail.com</p>
                                </div>
                            </div>

                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-clock.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <p>Lundi à Vendredi 09h:00 à 19h</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-appointment-btn wow fadeInUp" data-wow-delay="1s">
                            <a href="https://www.doctolib.fr/cabinet-dentaire/breteuil/cabinet-dentaire-de-l-abbaye-de-breteuil" target="_blank" class="btn-default">Prendre un rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

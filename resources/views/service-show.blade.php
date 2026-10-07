@extends('layouts.main')

@section('title')
{{ $service->title }}
@endsection
@section("meta_title", $service->meta_title ?: $service->title)
@section("meta_description", $service->meta_description ?: ('Breteuil dentaire - ' . $service->title))
@section("meta_image", $service->meta_image_url ?? asset('assets/images/accueil.jpeg'))

@section('main')
@php
    $heroBackground = $service->featured_url ?? $service->hero_url ?? asset('assets/images/protese.jpg');
@endphp
<div class="page-header page-header-service">
    <div class="page-header-blur" style="background-image: url({{ $heroBackground }});" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $service->title }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('service.index') }}" style="color:#8b8b8b">Services</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">{{ $service->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($service->excerpt)
    <div class="mt-6" style="display: flex; align-items: center; justify-content: center; margin-top: 50px;">
        <p class="text-center w-75 wow fadeInUp" style="font-size: 19px; line-height: 1.7; color: var(--primary-color); font-weight: 500;">
            {{ $service->excerpt }}
        </p>
    </div>
@endif

<div class="page-service-single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
                <div class="service-single-content service-single-content-wide">
                    @if ($service->body)
                        <div class="service-entry service-entry-wide wow fadeInUp">
                            {!! $service->body !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prenez rendez-vous </span>pour un
                            suivi</h2>
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

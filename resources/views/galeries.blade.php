@extends('layouts.main')

@section('title')
    Visite du cabinet
@endsection

@section("meta_title", "Visite du cabinet")
@section("meta_description", "Breteuil dentaire - Visite du cabinet")
@section("meta_image", asset('assets/images/accueil.jpeg'))
@section('main')
    <div class="page-header"
        style="background-image: url({{ asset('assets/images/accueil-dark.jpeg') }});background-size:cover;height:100%;background-position:center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Visite</span> Cabinet
                        </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a>
                                </li>
                                <li class="breadcrumb-item active text-white" aria-current="page">gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-gallery-page">
        <div class="container">
            <div class="row gallery-items">
                @forelse ($galleries as $gallery)
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                            <a href="{{ $gallery->url }}">
                                <figure>
                                    <img src="{{ $gallery->url }}" alt="{{ $gallery->alt }}">
                                </figure>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>La visite du cabinet sera bientôt illustrée. Revenez plus tard.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

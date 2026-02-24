@extends('layouts.main')

@section('title')
    Visite du cabinet
@endsection

@section("meta_title", "Visite du cabinet")
@section("meta_description", "Breteuil dentaire - Visite du cabinet")
@section("meta_image", asset('assets/images/accueil.jpeg'))
@section("main")
    <div class="page-header"
        style="background-image: url({{ asset('assets/images/accueil-dark.jpeg') }});background-size:cover;height:100%;background-position:center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
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
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Photo Gallery Section Start -->
    <div class="our-gallery-page">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items">
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie20.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie20.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.2s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie19.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie19.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.4s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie18.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie18.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.6s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie17.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie17.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.8s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie16.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie16.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie15.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie15.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.2s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie14.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie14.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.4s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie13.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie13.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.6s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie12.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie12.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.6s" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie11.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie11.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
            </div>
            <!-- gallery section end -->
        </div>
    </div>
@endsection
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
                        <a href="{{ asset('assets/images/galeries/galerie9.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie9.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie8.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie8.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie7.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie7.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie6.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie6.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie5.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie5.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie4.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie4.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie3.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie3.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries/galerie2.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie2.jpg') }}" alt="">

                            </figure>

                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
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
                        <a href="{{ asset('assets/images/galeries/galerie1.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries/galerie1.jpg') }}" alt="">
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

                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie1.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie1.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie2.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie2.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie3.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie3.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie4.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie4.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie5.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie5.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie6.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie6.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie7.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie7.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie8.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie8.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie9.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie9.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie10.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie10.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie11.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie11.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie12.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie12.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie13.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie13.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie14.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie14.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie15.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie15.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie16.png') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie16.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie17.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie17.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie18.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie18.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie19.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie19.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie20.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie20.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie21.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie21.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie22.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie22.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie23.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie23.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie24.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie24.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie25.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie25.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie26.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie26.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie27.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie27.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie28.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie28.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie29.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie29.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie30.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie30.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie31.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie31.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie32.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie32.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie33.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie33.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie34.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie34.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie35.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie35.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie36.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie36.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie37.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie37.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie38.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie38.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie39.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie39.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie40.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie40.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie41.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie41.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie42.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie42.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie43.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie43.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie44.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie44.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie45.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie45.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie46.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie46.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie47.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie47.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie48.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie48.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie49.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie49.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie50.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie50.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie51.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie51.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie52.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie52.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie53.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie53.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie54.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie54.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie55.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie55.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie56.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie56.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie57.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie57.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie58.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie58.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie59.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie59.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie60.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie60.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie61.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie61.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie62.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie62.jpg') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ asset('assets/images/galeries-news/galerie63.jpg') }}">
                            <figure>
                                <img src="{{ asset('assets/images/galeries-news/galerie63.jpg') }}" alt="">
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
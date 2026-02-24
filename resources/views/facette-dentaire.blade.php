@extends('layouts.main')

@section('title')
    Facette dentaire
@endsection

@section("meta_title", "Facette dentaire")
@section("meta_description", "Breteuil dentaire - Facette dentaire")
@section("meta_image", asset('assets/images/service-entry-img-1.jpg'))
@section('main')
    <div class="page-header"
        style="background-image: url({{ asset('assets/images/Facette-dentaire-Ormoy-dark.jpg') }});background-size:cover;height:100%;background-position:bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Facette</span>
                            Dentaire</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a>
                                </li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Facette dentaire</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="service-featured-image container" style="margin-top: 110px;padding-right:110px;padding-left:110px">
        <figure class="reveal image-anime">
            <img style="height: 30rem;" src="{{ asset('assets/images/Facette-dentaire-Ormoy.jpg') }}" alt="">
        </figure>
    </div>

    <div class="page-service-single">
        <div class="container">
            <div class="service-single-content">
                <!-- Service Featured Image Start -->

                <!-- Service Featured Image End -->

                <!-- Service Entry Content Start -->
                <div class="service-entry">

                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Avant d’envisager un traitement esthétique, il convient de définir avec le patient ses gênes et ses
                        attentes. Il est alors possible de réaliser suite à l’examen clinique et radiologique un montage
                        prévisionnel. Et ce, à partir d’un moulage pour définir le résultat à obtenir.
                        .</p>

                    <p class="wow fadeInUp" style="margin-top: 12px">Une facette dentaire est une fine chips entièrement en
                        céramique qui se colle sur la face externe des dents. Elle permet d’ habiller les dents jugées
                        disgracieuses par leur forme, leur position. Elle aide à corriger leur teinte et leur aspect de
                        surface.</p>

                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Nous confectionnons la facette dentaire au laboratoire. Une fois que le travail à réaliser est
                        définie, soit le praticien réalise une taille à minima des dents, soit il ne le fait pas. Puis nous
                        effectuons une empreinte, réalisons des dents provisoires et adaptons sur les dents.
                        .</p>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Dans un délai de prés d’une semaine, les facettes sont prêtes et peuvent être posées et collées lors
                        de cette seconde séance.
                        .</p>

                    <!-- Service Entry Content End -->
                </div>
            </div>
        </div>
    </div>

    <div class="contact-now" style="background:#eff8ff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- How It Work Image Start -->
                    <div class="how-it-work-img">
                        <figure class="reveal image-anime">
                            <img src="{{ asset('assets/images/how-it-work-img.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- How It Work Image End -->
                </div>

                <div class="col-lg-6">

                    <!-- Footer Contact Content Start -->
                    <div class="contact-now-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contactez nous</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prennez rendez-vous </span>pour une
                                facette dentaire</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Start -->
                        <div class="contact-now-info">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>
                                    <p>7 place du 8 mai 1945, 60120 Breteuil</p>
                                    </p>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>03 74 47 24 24</p>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>info@domain.com</p>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.8s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-clock.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>Lundi à Vendredi 09h:00 à 19h</p>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->
                        </div>

                        <!-- Footer Appointment Button Start  -->
                        <div class="contact-appointment-btn wow fadeInUp" data-wow-delay="1s">
                            <a href="#" class="btn-default">Prendre un rendez-vous</a>
                        </div>
                        <!-- Footer Appointment Button End  -->
                    </div>
                    <!-- Footer Contact Content End -->
                </div>
            </div>
        </div>
    </div>
@endsection
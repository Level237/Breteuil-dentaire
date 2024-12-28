@extends('layouts.main')

@section('title')
Nos Services
@endsection

@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Services </span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<div class="page-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">

                    <div class="service-body">
                        <h3>Urgences dentaires</h3>
                    </div>
                    <div class="read-more-btn">
                        <a href="{{ route('urgence-dentaire') }}">Voir plus</a>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-body">
                        <h3>Protèses dentaires</h3>
                    </div>
                    <div class="read-more-btn">
                        <a href="{{ route('proteses-dentaires') }}">Voir plus</a>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-body">
                        <h3>Implantologie</h3>
                    </div>
                    <div class="read-more-btn">
                        <a href="{{ route('implant-dentaire') }}">Voir plus</a>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-body">
                        <h3>Eclaircissement dentaire</h3>
                    </div>
                    <div class="read-more-btn">
                        <a href="{{ route('eclaircissement') }}">Voir plus</a>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-body">
                        <h3>Esthetique du sourire</h3>
                    </div>
                    <div class="read-more-btn">
                        <a href="{{ route('esthetique.sourire') }}">Voir plus</a>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1s">
                    <div class="service-body">
                        <h3>Facette dentaire</h3>
                    </div>
                    <div class="read-more-btn">
                        <a href="{{ route('facette-dentaire') }}">Voir plus</a>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1.2s">
                    <div class="service-body">
                        <h3>Facette pelliculaire</h3>
                    </div>
                    <div class="read-more-btn">
                        <a href="{{ route('facette-pelliculaire') }}">Voir plus</a>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="1.4s">
                    <div class="service-body">
                        <h3>Dentisterie numérique</h3>
                    </div>
                    <div class="read-more-btn">
                        <a href="{{ route('dentisterie-numerique') }}">Voir plus</a>
                    </div>
                </div>
                <!-- Service Item End -->
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Obtenir une consultation</span></h2>
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
                                <p>5 bis rue Tassart , Abbaye de Breteuil , FRANCE</p>
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
                                <p>03 65 65 75 75</p>
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

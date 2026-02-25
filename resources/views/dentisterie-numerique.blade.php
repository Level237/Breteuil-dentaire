@extends('layouts.main')

@section('title')
    Dentisterie numérique
@endsection
@section("meta_title", "Dentisterie numérique")
@section("meta_description", "Breteuil dentaire - Dentisterie numérique")
@section("meta_image", asset('assets/images/service-entry-img-1.jpg'))
@section('main')
    <div class="page-header"
        style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Dentisterie</span>
                            Numérique</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a>
                                </li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Dentisterie numérique</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>


    <div class="page-service-single">
        <div class="container" style="margin-bottom: 150px">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Service Categories List Start -->

                        <img style="width: 80%" src="{{ asset('assets/images/dentisterie-numerique.png') }}" alt="">

                        <!-- Service Categories List End -->

                        <!-- Sidebar Cta Box Start -->

                        <!-- Sidebar Cta Box End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Service Featured Image Start -->

                        <!-- Service Featured Image End -->

                        <!-- Service Entry Content Start -->
                        <div class="service-entry">

                            <p class="wow fadeInUp" data-wow-delay="0.2s">Les nouvelles technologies et l’intelligence
                                artificielle ont bouleversé la médecine dentaire.
                                Dans notre cabinet, vous pourrez ainsi bénéficier de soins de dernière génération. Grâce à
                                nos systèmes d’empreintes numérique et de conception et « impression 3D », obtenez des soins
                                d’une grande fiabilité et d’une grande précision.

                                .</p>

                            <p class="wow fadeInUp" style="margin-top: 12px">Ainsi, il devient alors possible de vous faire
                                des couronnes ou inlays en une seule séance !</p>


                            <!-- Service Entry Content End -->
                        </div>
                        <!-- Service Single Content End -->

                        <!-- Service Accordian Start -->

                        <!-- Service Accordian End -->
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
                                <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prennez rendez-vous </span>pour
                                    une dentisterie numérique</h2>
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
                                        <p>breteuildentaire@gmail.com</p>
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
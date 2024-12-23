@extends('layouts.main')

@section('title')
@endsection

@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/urgences.jpg') }});background-size:cover;height:100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Urgences</span> Dentaires</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">techonology</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Techonology Start -->
<div class="page-techonology">
    <div class="container">
        <!-- Techonology Item Start -->
        <div class="row techonology-item align-items-center">
            <div class="col-lg-6">
                <!-- Techonology Image Box Start -->
                <div class="techonology-image-box">
                    <!-- Techonology Image Start -->
                    <div class="techonology-image-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/techonology-img-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Techonology Image End -->

                    <!-- Techonology Image Start -->
                    <div class="techonology-image-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/techonology-img-2.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Techonology Image End -->
                </div>
                <!-- Techonology Image Box End -->
            </div>

            <div class="col-lg-6">
                <!-- Techonology Content Start -->
                <div class="techonology-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Pourquoi nous en cas d'</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Urgences </span>dentaires</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Parce que c’est bien connu, les douleurs bucco-dentaires sont parmi les plus insupportables, nous nous organisons quotidiennement, pour prendre en charge les urgences douloureuses et fonctionnelles.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- Techonology Content End -->
            </div>
        </div>
        <!-- Techonology Item End -->


        <!-- Techonology Item End -->
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Obtenir une consultation</span>professionnelle gratuite</h2>
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

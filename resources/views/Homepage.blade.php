@extends('layouts.main')

@section('title')
    Cabinet dentaire de la MSP de l'abbaye de Breteuil
@endsection
@section("meta_title", "Breteuil dentaire")
@section("meta_description", "Breteuil dentaire - Cabinet dentaire de la MSP de l'abbaye de Breteuil")
@section("meta_image", asset('assets/images/logo.svg'))
@section('main')
    <div class="hero bg-image parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Bienvenue au Cabinet dentaire de Breteuil</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">L'experience et l'innovation à votre
                                service</h1>

                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="{{ route('appointment') }}" class="btn-default">Prendre un rendez-vous</a>
                        </div>
                        <!-- Hero Content Body End -->

                        <!-- Google Rating Start -->
                        <div class="google-rating wow fadeInUp" data-wow-delay="0.75s">
                            <ul>
                                <li>Google Rating <span>5.0</span></li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>based on 492 reviews</li>
                            </ul>
                        </div>
                        <!-- Google Rating End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Call To Action Start -->
    <div class="cta-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Cta Box Item Start -->
                    <div class="cta-box-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/icon-cta-phone.svg" alt="">
                        </div>
                        <div class="cta-box-content">
                            <h3>Un besoin? une urgence dentaire?</h3>
                            <p>Contactez nous au : (+01) 987 828 745</p>
                        </div>
                    </div>
                </div>
                <!-- Cta Box Item End -->

                <!-- Cta Box Item Start -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cta-box-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/icon-cta-time.svg" alt="">
                        </div>
                        <div class="cta-box-content">
                            <h3>Heures d'ouverture</h3>
                            <p>Lundi à Vendredi 09h:00 à 19:00</p>
                        </div>
                    </div>
                </div>
                <!-- Cta Box Item End -->

                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Cta Box Btn Start -->
                    <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.5s">
                        <a href="{{ route('contact.view') }}" class="btn-default btn-highlighted">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/about-us-img-1.jpg') }}" alt="">
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/about-us-img-2.jpg') }}" alt="">
                            </figure>
                        </div>

                        <!-- About Experience Circle Start -->
                        <div class="about-experience">
                            <figure>
                                <img src="{{ asset('assets/images/about-experience-circle.png') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Experience Circle End -->
                    </div>
                    <!-- About Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Tout savoir sur nous</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Votre voyage </span> vers des dents
                                en bonne santé commence ici</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">L'objectif de notre clinique est d'offrir une
                                dentisterie amicale et attentionnée ainsi que des traitements dentaires généraux,
                                cosmétiques et spécialisés du plus haut niveau.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>une équipe expérimentée</li>
                                <li>une technologie de pointe</li>
                                <li>des services complets</li>
                                <li>service d'urgence dentaire</li>
                            </ul>
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('team') }}" class="btn-default">Notre Equipe</a>
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Serviceds Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Nos Services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Toutes les spécialités </span>dentaires
                            pour répondre à vos besoins</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Nous nous engageons en faveur du développement
                            durable et des initiatives respectueuses de l'environnement.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('assets/images/icon-services-1.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Implantologie dentaire</h3>
                            <p>Les implants dentaires sont une solution à long terme qui permet de remplacer en toute
                                sécurité une ou plusieurs dents</p>
                        </div>

                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('assets/images/icon-services-2.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Dentisterie esthétique</h3>
                            <p>Éclaircissement dentaire, Comblement des rides, Composites, Inlay-onlay, Facette céramique,
                                Couronne céramique…</p>
                        </div>

                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{ asset('assets/images/icon-services-3.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Prothèses dentaires</h3>
                            <p>
                                Quelque soit le type de prothèse dentaire, il est nécessaire d’effectuer une empreinte
                                dentaire et une prise de teinte….</p>
                        </div>

                    </div>
                    <!-- Service Item End -->
                </div>



                <div class="col-lg-12">
                    <!-- Service Box Footer Start -->
                    <div class="services-box-footer wow fadeInUp" data-wow-delay="1s">
                        <p>Nous croyons en l'utilisation des technologies et des techniques les plus récentes pour garantir
                            les meilleurs résultats à nos patients.</p>
                        <a href="{{ route('service.index') }}" class="btn-default">Voir tout nos services</a>
                    </div>
                    <!-- Service Box Footer End -->
                </div>
            </div>
        </div>

        <!-- Intro Clinic Video Section Start -->
        <div class="intro-clinic-video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Visit Clinic Start -->
                        <div class="visit-clinic parallaxie">
                            <!-- Visit Clinic Content Start -->
                            <div class="visit-clinic-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Visite du cabinet</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Nous accordons une grande
                                        importance à votre confort</h2>
                                </div>
                                <!-- Section Title End -->

                                <!-- Visit Clinic Btn Start -->
                                <div class="visit-clinic-btn wow fadeInUp" data-wow-delay="0.25s" data-cursor-text="Voir">
                                    <a href="{{ route('visite-cabinet') }}" class="btn-default">Visite du Cabinet</a>
                                </div>
                            </div>
                        </div>
                        <!-- Visit Clinic End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Clinic Video Section End -->

        <!-- Our Counter Section Start -->
        <div class="our-counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">8</span>+</h2>
                                <h3>Services professionnels</h3>
                            </div>
                            <!-- Counter Title End -->

                            <!-- Counter Content Start -->

                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">01</span>K</h2>
                                <h3>Consultations</h3>
                            </div>
                            <!-- Counter Title End -->

                            <!-- Counter Content Start -->

                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">1</span>K</h2>
                                <h3>Clients Satisfaits</h3>
                            </div>
                            <!-- Counter Title End -->

                            <!-- Counter Content Start -->

                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <!-- Counter Title Start -->
                            <div class="counter-title">
                                <h2><span class="counter">18</span>+</h2>
                                <h3>Docteurs experimentés</h3>
                            </div>
                            <!-- Counter Title End -->

                            <!-- Counter Content Start -->

                            <!-- Counter Content End -->
                        </div>
                        <!-- Counter Item End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Counter Section End -->

        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="images/icon-star.svg" alt="">
        </div>
        <!-- Icon Start Image End -->
    </div>
    <!-- Our Serviceds Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Pourquoi nous choisir</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Breteuil</span> Dentaire</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Nos activités portent essentiellement sur l’urgence
                            dentaire, les prothèses dentaires, l’implantologie, l’esthétique et la dentisterie numérique.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 order-1">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-1">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-why-us-1.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>médecin expérimenté</h3>

                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-why-us-2.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>soins personnalisés</h3>

                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-why-us-2.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Consultation personnalisée</h3>

                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box Start -->
                </div>

                <div class="col-lg-4 order-lg-1 order-md-2 order-1">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image wow fadeInUp">
                        <figure>
                            <img src="{{ asset('assets/images/why-choose-us-img.png') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>

                <div class="col-lg-4 col-md-6 order-lg-2 order-md-1 order-2">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-2">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-why-us-4.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Services d'urgence</h3>

                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-why-us-5.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Avis positifs de patients</h3>

                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-why-us-6.svg') }}" alt="">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Dernières technologies</h3>

                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box Start -->
                </div>
            </div>
        </div>
        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="images/icon-star.svg" alt="">
        </div>
        <!-- Icon Start Image End -->
    </div>
    <!-- Why Choose Us Section End -->

    <!-- How It Work Start -->

    <!-- How It Work End -->

    <!-- Our Team Start -->

    <!-- Our Team End -->


    <!-- Our Testiminial End -->



    <!-- Footer Contact Us Start -->
    <div class="contact-now">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- How It Work Image Start -->
                    <div class="how-it-work-img">
                        <div class="google-map-iframe">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2584.2691877379098!2d2.2931448770088827!3d49.63038094606986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7a2ff0a672add%3A0xa1797fb09ac9e2bc!2s7%20Pl.%20du%208%20Mai%201945%2C%2060120%20Breteuil%2C%20France!5e0!3m2!1sfr!2scm!4v1771934980449!5m2!1sfr!2scm"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!-- How It Work Image End -->
                </div>

                <div class="col-lg-6">

                    <!-- Footer Contact Content Start -->
                    <div class="contact-now-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contactez nous</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prennez</span> un rendez vous</h2>
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
                                    <p>7 place du 8 mai 1945, 60120 Breteuil</p>
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
                            <a href="{{ route('appointment') }}" class="btn-default">Prendre un rendez-vous</a>
                        </div>
                        <!-- Footer Appointment Button End  -->
                    </div>
                    <!-- Footer Contact Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Contact Us End -->
@endsection
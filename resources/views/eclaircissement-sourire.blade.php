@extends('layouts.main')

@section('title')
Esthétique du sourire
@endsection

@section("meta_title","Esthétique du sourire")
@section("meta_description","Breteuil dentaire - Esthétique du sourire")
@section("meta_image",asset('assets/images/service-entry-img-1.jpg'))
@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/teeth-5120231_640-dark.jpg') }});background-size:cover;height:100%;background-position:bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Eclaircissement</span> Dentaire</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Eclaircissement dentaire</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>

<div class="service-featured-image container" style="margin-top: 110px;">
    <figure class="reveal image-anime">
        <img style="height: 30rem;"  src="{{ asset('assets/images/teeth-5120231_640.jpg') }}" alt="">
    </figure>
    <p class="wow fadeInUp" style="margin-top:35px" data-wow-delay="0.2s">La couleur des dents peut évoluer suite à une maladie. Mais aussi à des prises de médicaments au vieillissement ou tout simplement selon votre patrimoine génétique.
        La forme de la dentition, l’implantation dentaire peut avoir subi des agressions, ou n’être pas idéale médicalement parlant.

        Selon votre souhait, nous pouvons vous proposer des solutions dans 95% des cas, sans chirurgie lourde, pour retrouver confort et esthétique selon vos souhaits.</p>
</div>

<div class="page-service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- Service Sidebar Start -->
                <div class="service-sidebar">
                    <!-- Service Categories List Start -->

                    <img style="width: 80%" src="{{ asset('assets/images/Couronne-dentaire.jpg') }}" alt="">
                    <img style="width: 80%" src="{{ asset('assets/images/Bridge-dentaire.jpg') }}" alt="">
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
                        <h3 class="wow fadeInUp">Couronnes et Bridges en Zircone ou Alumine</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Votre sourire est notre préoccupation. Nos docteurs et son équipe proposent un ensemble d’opérations vous permettant de retrouver un sourire éblouissant. Mais aussi une bouche éclatante de santé.

                            .</p>

                        <p class="wow fadeInUp" style="margin-top: 12px">Les principaux avantages d’une couronne céramique sur zircone sont :</p>

                        <!-- Service Entry Image Start -->

                       <ul>
                                                    <li class="text-primary">
                                                        Sa biocompatibilité</li>
                                                    <p class="wow fadeInUp " >aucune apparition de liserés gris dans le temps car il n’y pas de métal, innocuité avec la cavité buccale en opposition avec les couronnes céramo-métalique.</p>
                                                    <li class="text-primary">

                                                        Sa résistance</li>
                                                    <p class="wow fadeInUp ">elle est toute aussi résistante voire plus qu’une céramo-métallique sur Or, chrome-cobalt ou tout autre alliage.</p>

                                                    <li class="text-primary">


                                                        Son esthétique</li>
                                                    <p class="wow fadeInUp ">du fait que la zircone est blanche, elle est plus adaptée pour servir de support à une couronne dentaire en céramique.</p>
                                                </ul>

                        <div class="wow fadeInUp row" data-wow-delay="1s">
                            <p class="wow fadeInUp ">La zircone favorise la ‘fibrointégration’ avec la gencive. Celle-ci aime particulièrement bien la zircone en comparaison au métal (pas de liserés gris).</p>
                            <p class="wow fadeInUp ">Les bridges en zircone possèdent les mêmes propriétés techniques que celles des couronnes céramiques en zircone, esthétique, résistance et biocompatibilité.</p>
                            <p class="wow fadeInUp ">Nous fabriquons nos Couronnes et Bridges dentaire tout céramique (chape Zircone ou Alumine) à partir du Système Nobel Procera, conception en 3D sur ordinateur.</p>

                        </ul>
                    </div>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Obtenir une consultation</span>pour une esthétique du sourire</h2>
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

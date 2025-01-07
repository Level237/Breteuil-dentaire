@extends('layouts.main')

@section('title')
Implant dentaire
@endsection
@section("meta_title","Implant dentaire")
@section("meta_description","Breteuil dentaire - Implant dentaire")
@section("meta_image",asset('assets/images/service-entry-img-1.jpg'))
@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Implant</span> Dentaire</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Implant dentaire</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>

<div class="mt-6" style="display: flex;align-items:center;justify-content:center;margin-top:50px">
    <p class="text-center w-50 wow fadeInUp">L’implantologie dentaire permet de remplacer des dents, mais ce n’est pas seulement un acte esthétique. Cela permet aussi de retrouver un bien-être certain aux patients souffrant de la perte d’une ou plusieurs dents.</p>
</div>
<div class="page-service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- Service Sidebar Start -->
                <div class="service-sidebar">
                    <!-- Service Categories List Start -->

                    <img style="width: 80%" src="{{ asset('assets/images/Implant-dentaire-Ormoy.png') }}" alt="">

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
                    <div class="service-featured-image">
                        <figure class="reveal image-anime">
                            <img src="{{ asset('assets/images/service-single-img.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Service Featured Image End -->

                    <!-- Service Entry Content Start -->
                    <div class="service-entry">
                        <h3 class="wow fadeInUp">C’est quoi un implant dentaire ?</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Un implant dentaire est comme une petite vis, c’est une racine artificielle, il est en titane et biocompatible. Il sert à remplacer la racine d’une dent abîmée ou manquante. Il permet de servir de point d’ancrage à une future prothèse dentaire ou couronne céramique. Que ce soit pour une ou plusieurs dents manquantes nous vous proposerons la solution la mieux adaptée à votre cas. Obtenez un résultat optimal à la fois esthétique et fiable dans le temps.</p>

                        <p class="wow fadeInUp" style="margin-top: 12px">Grâce à l’implant dentaire, votre nouvelle dent aura l’apparence et l’efficacité d’une dent naturelle saine.</p>

                        <!-- Service Entry Image Start -->
                        <div class="service-entry-image">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <!-- Service Entry Image Start -->
                                    <div class="service-entry-img-1">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/service-entry-img-1.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Service Entry Image End -->
                                </div>

                                <div class="col-md-6 col-12">
                                    <!-- Service Entry Image Start -->
                                    <div class="service-entry-img-2">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/images/service-entry-img-2.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Service Entry Image End -->
                                </div>
                            </div>
                        </div>
                        <h3 class="wow fadeInUp">Pourquoi des implants dentaires ?</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Parce que à long terme, c’est une solution qui permet de remplacer en toute sécurité une ou plusieurs dents sans affecter les autres dents, ce qui en fait la meilleure solution pour remplacer les dents manquantes :</p>
                        <div class="wow fadeInUp row" data-wow-delay="1s">
                            <li style="margin-bottom: 12px">
                                Les implants dentaires offrent de meilleurs résultats cosmétiques et fonctionnels.</li>
                            <li style="margin-bottom: 12px">
                                Les implants dentaires empêchent une fonte osseuse importante et l’affaissement du visage à l’origine de son vieillissement prématuré.</li>
                            <li style="margin-bottom: 12px">
                                La pose d’implant dentaire évite le délabrement des dents naturelles voisines de l’édentation, contrairement aux techniques traditionnelles.</li>
                            <li style="margin-bottom: 12px">Ils offrent une base stable pour les nouvelles dents, et permettent de parler et de manger avec confort en toute sécurité</li>
                            <li style="margin-bottom: 12px">ILes implants dentaires constituent une solution extrêmement prévisible, avec des études sur le moyen et le long terme montrant des taux très élevés de réussite.</li>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prennez rendez-vous </span>pour un implant</h2>
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

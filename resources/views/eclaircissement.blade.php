@extends('layouts.main')

@section('title')
Eclaircissement dentaire
@endsection

@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/tooth-2414909_1920-1024x350-dark.jpg') }});background-size:cover;height:100%;background-position:bottom">
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

<div class="service-featured-image container" style="margin-top: 110px;padding-right:110px;padding-left:110px">
    <figure class="reveal image-anime">
        <img style="height: 30rem;"  src="{{ asset('assets/images/tooth-2414909_1920-1024x350.jpg') }}" alt="">
    </figure>
</div>

<div class="page-faqs">
    <div class="container">
        <div class="row">


            <div class="col-lg-12">
                <!-- FAQs section start -->
                <div class="faqs-section" id="general_information">

                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    C’est quoi un blanchiment dentaire ?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Le blanchiment dentaire est un procédé qui permet d’éclaircir l’émail d’une dent en utilisant une solution blanchissante (peroxyde de carbamide ou peroxyde d’hydrogène). Cette solution mise en contact prolongé avec une dent ‘casse’ les pigments qui se sont formés avec les années.

                                        Blanchir les dents permet de gagner jusqu’à 2 teintes en 1 heure par un traitement au fauteuil dentaire avec une lampe. Il est possible de répéter le geste en fonction de l’éclaircissement souhaité et de la teinte de départ. Le traitement est indolore et sans danger. Les résultats sont immédiats et spectaculaires</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Le traitement est-il efficace et durable?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>LOui. C’est une méthode éprouvée. Tout ce qui fait la beauté naturelle d’une dent est préservé. Selon les habitudes de vie de chacun, l’effet dure de deux à cinq ans. Ensuite, un court traitement d’entretien peut-être proposé pour un résultat durable.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Existe-t-il des effets secondaires ou de possibles douleurs?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Le patient peut ressentir quelques sensibilités, au niveau des dents, mais qui sont sans conséquence sur leur vitalité. Ces sensibilités s’estomperont rapidement après l’arrêt du traitement et si la gêne est importante nous pourrons vous proposer un traitement antalgique. Par précaution, nous déconseillons les traitements d’éclaircissement des dents aux femmes enceintes et allaitantes.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Quelles différences y a-t-il entre le traitement au fauteuil et ambulatoire (chez soi)?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>La technique au fauteuil consiste à passer une heure au fauteuil, nous confectionnerons des gouttières pour que le patient puisse finaliser le traitement 3 jours chez lui (une heure par jour); alors que la technique ambulatoire consiste à porter les gouttières de blanchiment avec le produit pendant une durée d’environ 14 jours toute la nuit ou 2h/jour (selon le produit utilisé).</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
                <!-- FAQs section End -->
                <!-- FAQs section End -->
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Obtenir une consultation</span>pour un éclaircissement dentaire</h2>
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

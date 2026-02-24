@extends('layouts.main')

@section('title')
    Remplacer toutes ces dents - Cabinet dentaire
@endsection

@section("meta_title", "Remplacer toutes ces dents")
@section("meta_description", "Breteuil dentaire - Remplacer toute ces dents")
@section("meta_image", asset('assets/images/service-entry-img-1.jpg'))
@section('main')
    <div class="page-header"
        style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Remplacer</span>
                            toutes ces Dents</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a>
                                </li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Remplacer toutes ces dents
                                </li>
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
                                <img src="{{ asset('assets/images/Appareil-resine-complet.jpg') }}" alt="">
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
                            <h3 class="wow fadeInUp">Etapes de l'examen</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>1- Examen </span>pré-implantaire</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Nos docteurs et notre équipe établiront avec vous
                                un bilan clinique général et bucco-dentaire.

                                Si cela est nécessaire, une radiographie ou éventuellement un scanner dentaire 3D seront à
                                prévoir. Un plan de traitement prothétique et chirurgical vous sera remis après cet examen.
                            </p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Techonology Content End -->
                </div>

            </div>
            <div class="row techonology-item align-items-center">
                <div class="col-lg-6">
                    <!-- Techonology Image Box Start -->
                    <div class="techonology-image-box">
                        <!-- Techonology Image Start -->
                        <div class="techonology-image-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/Mise-en-place-des-implants-dentaires.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Techonology Image End -->

                        <!-- Techonology Image Start -->
                        <div class="techonology-image-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/techonology-img-4.jpg') }}" alt="">
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
                            <h3 class="wow fadeInUp">Etape de l'examen</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>2- Mise en place des </span> implants
                                dentaires</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">La mise en place se fait sous anesthésie locale,
                                un appareil provisoire est vissé sur les implants dentaire.
                                Le temps de la cicatrisation osseuse peut varier en fonction de chacun. En moyenne, la pose
                                d’un bridge complet définitif sur implant intervient dans les 3 à 6 mois qui suivent.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Techonology Content End -->
                </div>
            </div>
            <!-- Techonology Item End -->
            <div class="row techonology-item align-items-center">
                <div class="col-lg-6">
                    <!-- Techonology Image Box Start -->
                    <div class="techonology-image-box">
                        <!-- Techonology Image Start -->
                        <div class="techonology-image-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/Pose-d-un-bridge-complet-sur-implants-dentaires-All-on-6.jpg') }}"
                                    alt="">
                            </figure>
                        </div>
                        <!-- Techonology Image End -->

                        <!-- Techonology Image Start -->
                        <div class="techonology-image-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/techonology-img-6.jpg') }}" alt="">
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
                            <h3 class="wow fadeInUp">Etape de l'examen</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>


                                    3- Pose d’un bridge complet sur </span> implants dentaires All-on-4 ou All-on-6 </h2>
                            <p style="margin-bottom: 12px" class="wow fadeInUp" data-wow-delay="0.25s">Après un contrôle de
                                la cicatrisation osseuse de <a href="{{ route('implant-dentaire') }}"> l’implant
                                    dentaire</a> , c’est la dernière étape du traitement.

                                Vous pourrez faire le choix de différents bridges sur <a
                                    href="{{ route('implant-dentaire') }}"> l’implant dentaire</a> :</p>
                            <ul class="wow fadeInUp" data-wow-delay="1s">
                                <li style="margin-bottom: 12px">
                                    Bridge All-on-4 ou All-on-6 sur armature Zircone usinée (tout céramique)</li>

                                <li style="margin-bottom: 12px">
                                    Bridge All-on-4 ou All-on-6 sur armature Titane usinée</li>


                            </ul>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Techonology Content End -->
                </div>
                <div class="service-entry" style="margin-top:100px">
                    <h3 class="wow fadeInUp text-center">
                        Le système All-on-6</h3>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Le système All-on-6 se développe durant les années 1990
                        afin d’offrir une option de traitement simple pour le patient. Ce système est particulièrement utile
                        dans le traitement du maxillaire supérieur en permettant d’y insérer de plus longs implants et en
                        éliminant le besoin de greffe osseuse et fut développé par le Dr Paulo Malo en Europe. L’objectif
                        est de mettre en place une prothèse fixe sur implant en une seule journée.</p>

                    <p class="wow fadeInUp" style="margin-top: 12px">Avec l’approche All-on-6 le patient n’est jamais sans
                        dents.</p>
                    <p class="wow fadeInUp" style="margin-top: 12px">Le patient devra revenir pour des contrôles durant les
                        semaines qui suivront l’intervention.</p>
                    <p class="wow fadeInUp" style="margin-top: 12px">Lprès une cicatrisation de 4 à 6 mois, une fois les
                        implants bien fusionnés à l’os, des empreintes seront prises et une prothèse finale sera
                        confectionnée. Finalement, Cette prothèse est tout aussi belle que la première et elle est plus
                        solide et durable. Cette nouvelle prothèse permettra de retrouver les fonctions esthétiques et
                        masticatoires pour de nombreuses années.</p>


                </div>
            </div>
            <div class="row techonology-item align-items-center">
                <div class="col-lg-6">
                    <!-- Techonology Image Box Start -->
                    <div class="techonology-image-box">
                        <!-- Techonology Image Start -->
                        <div class="techonology-image-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/Retrouver-votre-sourire.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Techonology Image End -->

                        <!-- Techonology Image Start -->
                        <div class="techonology-image-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/techonology-img-8.jpg') }}" alt="">
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
                            <h3 class="wow fadeInUp">Etape de l'examen</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>4-Tout un plaisir </span> retrouvé
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Vous pouvez désormais profiter pleinement de vos
                                nouvelles dents. Toutes les fonctions essentielles sont de nouveau présentes : l’esthétique
                                du sourire, la fonction masticatoire et le maintien des traits du visage.
                                Mordre à pleines dents reprend tout son sens !</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Techonology Content End -->
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
                                remplacer une dent</h2>
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
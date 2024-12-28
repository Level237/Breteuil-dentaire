@extends('layouts.main')

@section('title')
Faq
@endsection
@section("meta_title","Faq")
@section("meta_description","Breteuil dentaire - Faq")
@section("meta_image",asset('assets/images/service-entry-img-1.jpg'))
@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Faq </span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Faq</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>


<div class="page-faqs">
    <div class="container">
        <div class="row">


            <div class="col-lg-12">
                <!-- FAQs section start -->
                <div class="faqs-section" id="general_information">
                    <div class="faqs-section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Implant dentaire</h2>
                    </div>
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Qu’est-ce qu’un implant dentaire ?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Un implant dentaire est une racine artificielle en titane, biocompatible, et sert à remplacer la racine d’une dent abîmée ou manquante.
                                        Il sert de support à une prothèse dentaire fixe (couronne, bridge) ou de point d’ancrage à une prothèse dentaire amovible.
                                        Une ou plusieurs dents manquantes? Nous vous proposons la solution la mieux adaptée à votre situation, pour un résultat optimal.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Est-ce que cela fait mal ?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>La mise en place d’un implant dentaire se fait sous anesthésie locale, la même que celle des soins. On ne sent aucune douleur pendant l’intervention.
                                        Au réveil, pas de douleur non plus, si ce n’est la gencive sensible.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Combien de temps dure un implant dentaire ?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Un implant dentaire est un dispositif médical, à ce titre on ne peut dire qu’il est « à vie », cependant les implants dentaires font partie des traitements les plus pérennes. Une hygiène dentaire adaptée et une prophylaxie sont à prendre en compte pour la pérennité du traitement implantaire et prothétique.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Quel est le coût des implants dentaires ?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Chaque patient demande une étude personnalisée pour établir avec précision un prix et un plan de traitement. Ce type d’implant dentaire n’est pas remboursé par la sécurité sociale, ceci étant certaines complémentaires de santé peuvent prendre en charge une partie de l’acte.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Y-a-t-il un âge limite ?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Après la fin de la croissance de la face environs entre 20 et 23 ans, il n’y a pas de limite d’âge pour avoir des implants dentaires.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    On m’a dit que je n’ai pas assez d’os ?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Seul un scanner dentaire 3D permet avec précision de déterminer s’il y a assez d’os ou non. Dans l’éventualité où il n’y aurait pas assez d’os, il existe des solutions alternatives. Par exemple combler le volume osseux manquant avec un substitut, soit utiliser des implants courts. Même en cas de faible hauteur d’os résiduelle, on utilise la chirurgie guidée pratiquée au sein du cabinet. Elle permet de traiter des cas jusqu’alors considérés comme impossible à réaliser.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Est-ce que cela est sûr ?
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Des protocoles rigoureux, avérés et maîtrisés nous garantissent un travail adapté à la situation, avec environ 95 % de réussite. Dans les 5% restant, nous déposons l’implant mobile et après un mois de cicatrisation nous reposons gracieusement un implant dentaire, cela ne fait que retarder un peu la fin du traitement.</p>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Obtenir une consultation</span>pour un suivi</h2>
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

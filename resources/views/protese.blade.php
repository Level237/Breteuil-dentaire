@extends('layouts.main')

@section('title')
@endsection

@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Protèses</span> Dentaires</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Protèses dentaire</li>
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
                        <h3 class="wow fadeInUp">C'est quoi une empreinte?</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Empreinte </span>dentaires</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">L’empreinte est la phase préalable à la réalisation de la prothèse dentaire qui sera fabriquée sur-mesure par le prothésiste selon les prescriptions de votre chirurgien-dentiste. La prise d’empreinte est numérique ou réalisée à l’aide d’une pâte. Dans certains cas, plusieurs empreintes sont nécessaires.Avant la pose de la prothèse définitive vous bénéficierez d’une prothèse transitoire amovible ou fixe afin de protéger la dent et de garder le sourire.</p>
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
                            <img src="{{ asset('assets/images/techonology-img-3.jpg') }}" alt="">
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
                        <h3 class="wow fadeInUp">Typologie de protèses</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Les prothèses dentaires </span> fixées aux dents</h2>
                        <ul class="wow fadeInUp" data-wow-delay="1s">
                            <li style="margin-bottom: 12px">Une dent abîmée peut être reconstruite avec des prothèses dentaires fixes. Il en existe plusieurs types utilisés selon les besoins.</li>
                            <li style="margin-bottom: 12px">La couronne dentaire prothétique permet de remplacer l’ensemble de la partie visible de la dent. Elle recouvre alors toute la dent et la consolide.</li>
                            <li style="margin-bottom: 12px">L’inlay permet de remplacer une petite partie interne de la dent. On pourra également utiliser l’onlay qui est une couronne dentaire partielle, posée sur la partie externe de la dent.</li>
                            <li style="margin-bottom: 12px">Lorsqu’il manque une ou plusieurs dents, elles peuvent être remplacées par un bridge (ou pont dentaire) fixé aux dents voisines par un onlay ou une couronne</li>

                        </ul>
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
                            <img src="{{ asset('assets/images/techonology-img-5.jpg') }}" alt="">
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
                        <h3 class="wow fadeInUp">Typologie de protèse</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Les prothèses dentaires</span> amovible</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">La prothèse amovible reprend la couleur des dents voisines et la forme de la ou des dents manquantes</p>
                        <ul class="wow fadeInUp" data-wow-delay="1s">
                            <li style="margin-bottom: 12px">Les prothèses dentaires amovibles sont des prothèses que l’on peut retirer comme on le souhaite. Notamment pour leur entretien quotidien.</li>
                            <li style="margin-bottom: 12px">Elles peuvent être partielles ou totales en fonction des besoins du patient et du nombre de dents à remplacer.</li>
                            <li style="margin-bottom: 12px">Ainsi, une prothèse dentaire amovible partielle ne remplace qu’une ou plusieurs dents. Elle prend appui sur la gencive et sur les dents restantes à l’aide de crochets.</li>
                            <li style="margin-bottom: 12px">La prothèse dentaire amovible complète va remplacer la totalité des dents de la mâchoire ; elle s’appuie simplement sur la gencive.</li>

                        </ul>
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
                            <img src="{{ asset('assets/images/techonology-img-7.jpg') }}" alt="">
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
                        <h3 class="wow fadeInUp">Typologie de protèse</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Les prothèses </span> combinées</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">On parle d’une prothèse combinée si la prothèse est constituée d’une partie fixe et d’une partie amovible. La partie amovible sur plaque métallique, remplaçant la ou les dents manquantes, est reliée aux dents restantes à l’aide d’un élément d’ancrage – attachement, crochet, couronne télescopique….Ces prothèses sont généralement utilisées chez les patients pour qui l’implantation ne peut être réalisée ou qui ne peuvent prendre en charge les frais d’interventions des implants.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- Techonology Content End -->
            </div>
        </div>
        <<div class="row techonology-item align-items-center">
            <div class="col-lg-6">
                <!-- Techonology Image Box Start -->
                <div class="techonology-image-box">
                    <!-- Techonology Image Start -->
                    <div class="techonology-image-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/techonology-img-9.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Techonology Image End -->

                    <!-- Techonology Image Start -->
                    <div class="techonology-image-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/techonology-img-10.jpg') }}" alt="">
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
                    <div class="section-title" >
                        <h3 class="wow fadeInUp">Typologie de protèses</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="margin-bottom: 12px"><span>Les prothèses dentaires</span> sur implants</h2>
                        <ul class="wow fadeInUp" data-wow-delay="1s">
                            <li style="margin-bottom: 12px">Il existe deux types de prothèses sur implants qui peuvent être proposées au patient : les prothèses dentaires dites fixes qui sont des couronnes dentaires ou des bridges directement vissés ou scellés sur les implants dentaires.</li>

                            <li style="margin-bottom: 12px">Et les prothèses dentaires dites amovibles sur implants : ce sont des prothèses dentaires amovibles partielles ou complètes, stabilisées par des implants dentaires au moyen de systèmes d’attaches qui ressemblent souvent à de petits boutons-pression.</li>
                            <li style="margin-bottom: 12px">Deux types de prothèses sur implants peuvent être proposées : fixes ou amovibles.
                                Les prothèses implantaires doivent faire l’objet d’une surveillance régulière au même titre que les prothèses sur dents naturelles.</li>

                        </ul>
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

@extends('layouts.main')

@section('title')
    Chirugie Pré-implantaire
@endsection

@section("meta_title", "Chirugie Pre-implantaire")
@section("meta_description", "Breteuil dentaire - Chirugie Pre-implantaire")
@section("meta_image", asset('assets/images/protese.jpg'))
@section('main')
    <div class="page-header"
        style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Chirurgie </span> pré
                            implantaire</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a>
                                </li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Chirugie pré implantaire
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
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
                            <h3 class="wow fadeInUp">L’analyse pré-implantaire</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">La mise en place <a
                                    href="{{ route('implant-dentaire') }}">d’implants dentaires</a> nécessite une
                                préparation approfondie, effectuée en amont de l’intervention à l’aide d’examens tels que
                                radio, scanner etc.</p>

                            <p class="wow fadeInUp" style="margin-top: 12px">La pose <a
                                    href="{{ route('implant-dentaire') }}">d’implants dentaires</a> peut être exposée au
                                problème d’insuffisance de capital osseux chez certains patients..</p>
                            <p class="wow fadeInUp" style="margin-top: 12px">Afin de garantir un ancrage efficace et une
                                pérennité pour la future prothèse, les <a href="{{ route('implant-dentaire') }}">d’implants
                                    dentaires</a> doivent être mis en place dans un volume osseux suffisant.</p>
                            <p class="wow fadeInUp" style="margin-top: 12px">Le volume osseux augmente chirurgicalement par
                                une greffe osseuse ou comblement osseux s’il est trop faible. L’os greffé peut être soit
                                issu du patient : c’est l’autogreffe, généralement prélevée au niveau de la mâchoire
                                inférieure ; soit issu d’un biomatériau : c’est une greffe sans prélèvement.</p>

                            <p class="wow fadeInUp" style="margin-top: 12px">Un bilan osseux préalable est impératif pour
                                définir la technique, le volume d’os à reconstruire et la pose simultanée ou non des
                                implants dentaires.</p>
                            <p class="wow fadeInUp" style="margin-top: 12px">La greffe osseuse ne se réalisera qu’en dernier
                                recours, si les <a href="{{ route('implant-dentaire') }}">d’implants dentaires</a> les plus
                                courts ne peuvent être utilisés. En effet, les dernières avancées scientifiques et
                                technologiques permettent d’éviter ou de réduire l’utilisation de greffe osseuse. Et ce,
                                dans la majorité des cas.</p>


                            <div class="row no-gutters">

                                <div class="col-lg-12">
                                    <!-- team member details start -->

                                    <h3 class="wow fadeInUp text-center">Greffe osseuse pré-implantaire</h3>
                                    <p class="wow fadeInUp">On distingue de façon générale deux types de greffes osseuses :
                                    </p>



                                    <div class="member-detail-body wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li class="text-primary">Les Autogreffes </li>
                                            <p class="wow fadeInUp ">l’os est prélevé chez la personne qui reçoit la greffe,
                                                le plus souvent dans la mâchoire inférieure, soit au niveau du menton soit
                                                sur les parties latérales. Nous allons pouvoir récupérer un petit bloc
                                                osseux qui sera stabilisé à l’aide d’une minivis. Ce type de greffe se nomme
                                                greffe d’apposition ou greffe en Onlay. Pour que le greffon s’intègre, une
                                                période de 6 à 8 mois de cicatrisation est habituellement nécessaire.
                                                Ensuite, les implants dentaires peuvent être mis en place et les vis de
                                                fixation généralement retirées au même moment. Ce type de greffe osseuse
                                                permet de traiter des manques osseux étendus en hauteur et en épaisseur sous
                                                une simple anesthésie locale. Pour les patients présentant une perte osseuse
                                                très importante et nécessitant donc des greffes de plus grande étendue, l’os
                                                peut être prélevé au niveau du crâne ou de la hanche. Ces greffes sont du
                                                ressort de la chirurgie maxillo-faciale. Elles se pratiquent sous anesthésie
                                                générale en milieu hospitalier.</p>
                                            <li class="text-primary">
                                                Les greffes «sans prélèvement »: </li>
                                            <p class="wow fadeInUp ">dans cette situation, le défaut osseux est comblé par
                                                différents biomatériaux d’origine synthétique, humaine ou animale. Dans tous
                                                les cas, ces matériaux subissent une série de traitements sanitaires leur
                                                garantissant une très haute sécurité d’utilisation. Le greffon est placé
                                                dans la zone où le manque d’os pose problème. Immobilisé, il va
                                                progressivement guider une nouvelle formation osseuse. Ce type de comblement
                                                osseux pourra être associé à la pose simultanée ou différée des implants
                                                dentaires. Une durée de cicatrisation de 4 à 9 mois est nécessaire pour une
                                                consolidation optimale du greffon. Cet apport osseux permet de compenser les
                                                défauts de petite étendue et le manque de volume osseux au niveau des sinus:
                                                c’est la greffe de sinus ou sinus lift.</p>


                                        </ul>
                                        <h3 class="wow fadeInUp text-center text-center" style="margin-top: 18px">Chirurgie
                                            pré-implantaire – Sinus-Lift – Comblement osseux</h3>
                                        <p class="wow fadeInUp" style="margin-top: 12px">On rencontre souvent dans les
                                            secteurs postérieurs, au maxillaire supérieur, au niveau des zones édentées, une
                                            augmentation du volume sinusien. Et ce, au dépend de la crête osseuse</p>
                                        <p class="wow fadeInUp" style="margin-top: 12px">Il existe alors deux cas de figure
                                            :</p>

                                    </div>

                                    <li style="margin-bottom: 15px">Soit la hauteur de la crête est au minimum de 6 mm et on
                                        peut positionner des implants dentaires courts avec un réel taux de succès. </li>

                                    <li class="">

                                        Soit la hauteur de la crête est inférieure à 6 mm : il est alors nécessaire
                                        d’augmenter le volume de la crête osseuse aux dépens du sinus, pour positionner des
                                        implants dentaires ayant une longueur plus commune (13mm). </li>


                                    <p class="wow fadeInUp" style="margin-top: 12px">La chirurgie, au niveau des sinus ainsi
                                        que la pose d’implants dentaires, se passe dans la même séance. C’est fait pour
                                        éviter au patient d’avoir à subir deux fois la pré-médication. Mais aussi les
                                        conséquences post-opératoires ainsi que deux interventions chirurgicales.</p>



                                </div>
                            </div>
                        </div>
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
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prennez rendez vous </span>pour une
                                chirugie</h2>
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
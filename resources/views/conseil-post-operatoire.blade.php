@extends('layouts.main')

@section('title')
Conseil post opératoire
@endsection

@section("meta_title","Conseil post opératoire")
@section("meta_description","Breteuil dentaire - Conseil post opératoire")
@section("meta_image",asset('assets/images/protese.jpg'))
@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Conseils </span> Post-operatoires</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Chirugie pré implantaire</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>

<div class="mt-6" style="display: flex;align-items:center;justify-content:center;margin-top:50px">
    <p class="text-center w-50 wow fadeInUp">Vous venez de recevoir la mise en place d’un ou plusieurs <a href="{{ route('implant-dentaire') }}">implants dentaires.</a>  Les suites opératoires sont simples voire inexistantes, si la prémédication a été correctement suivie.</p>
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
                        <h3 class="wow fadeInUp">Ce qu’il faut faire :</h3>
                        <li style="margin-bottom: 15px">
                            Prendre impérativement tous les médicaments prescrits, même s’il n’y a pas de douleur : Une douleur installée est difficile à combattre.</li>

                        <li class="">


                            Prendre les antalgiques prescrits à intervalle régulier de 2 ou 4 heures après l’intervention.</li>
                            <li style="margin-bottom: 15px">

                                    Mettre une poche de glace, sur la joue en permanence le jour de l’intervention et le plus longtemps possible.</li>
                                    <li style="margin-bottom: 15px">

                                        Après la dépose des sutures brosser doucement le site d’intervention et les vis avec une brosse</li>



                                <div class="row no-gutters">

                                    <div class="col-lg-12">
                                        <!-- team member details start -->

                                                <h3 class="wow fadeInUp text-center">Ce qu'il ne faut pas faire</h3>
                                                <li style="margin-bottom: 15px">


                                                    Boire ou manger chaud les premiers jours.</li>

                                                    <li style="margin-bottom: 15px">


                                                        Se tenir la joue avec la main (source de chaleur).</li>
                                                        <li style="margin-bottom: 15px">


                                                            Manger une alimentation trop solide.</li>
                                                            <li style="margin-bottom: 15px">

                                                                            Boire de l’alcool ou fumer.</li>
                                                                            <li style="margin-bottom: 15px">


                                                        Ne pas toucher ou manger sur le/les implant(s) dentaire(s)les 6 premières semaines.</li>






                                </div>
                                <div class="row no-gutters">

                                    <div class="col-lg-12">
                                        <!-- team member details start -->

                                                <h3 class="wow fadeInUp text-center">N’hésitez pas à prendre contact avec le cabinet dentaire si :</h3>
                                                <li style="margin-bottom: 15px">



                                                    Si l’implant dentaire est douloureux</li>

                                                    <li style="margin-bottom: 15px">



                                                            Si l’implant dentaire est mobile</li>
                                                        <li style="margin-bottom: 15px">


                                                            Manger une alimentation trop solide.</li>
                                                            <li style="margin-bottom: 15px">

                                                                Si le site reste gonflé plus de 2 jours</li>
                                                                <p class="wow fadeInUp" style="margin-top: 12px">Merci de suivre ces quelques conseils qui sont d’ordre général et ne peuvent prévaloir sur ce que votre chirurgien dentiste à pu vous prescrire / conseiller. Ces conseils vous aideront à mieux supporter les suites postopératoires, et à améliorer le succès du traitement implantaire</p>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Obtenir une consultation</span>pour une chirugie</h2>
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

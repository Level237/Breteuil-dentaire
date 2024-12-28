@extends('layouts.main')

@section('title')
Dr Fabrice Dassie
@endsection

@section("main")
<div class="page-header" style="background-image: url({{ asset('assets/images/Dr-Fabrice-Dassie-dark.png') }});background-size:cover;height:100%">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Dr.Fabrice Dassie</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="team-single.html" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('team') }}" style="color:#8b8b8b">Notre Equipe</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="{{ route('team.dassie') }}">Dr.Johan Joe</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Team Details Section Start -->
<div class="page-team-single">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <!-- team member image start -->
                <div class="team-member-image">
                    <figure class="image-anime">
                        <img src="{{ asset('assets/images/Dr-Fabrice-Dassie.png') }}" alt="Fabrice Dassie">
                    </figure>
                </div>
                <!-- team member image end -->
            </div>
            <div class="col-lg-7">
                <!-- team member details start -->
                <div class="team-member-details">
                    <div class="member-detail-header">
                        <h2 class="text-anime-style-2">Dr.Fabrice Dassie</h2>
                        <p class="wow fadeInUp">Docteur en chirurgie-dentaire</p>
                    </div>


                    <div class="member-detail-body wow fadeInUp" data-wow-delay="0.5s">
                        <ul>
                            <li>Diplôme universitaire d’implantologie Orale et Esthétique - université d’Evry</li>
                            <li>Certificat d’études supérieures de Parodontologie - Paris V</li>
                            <li>Certificat d’études supérieures de Prothèses fixes - Paris V</li>

                        </ul>
                    </div>

                    <div class="member-social-list">
                        <ul class="wow fadeInUp" data-wow-delay="0.75s">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- team member details end -->
            </div>
        </div>
    </div>
</div>
<!--Team Details Section End -->

<!-- About Member Details Start -->
<div class="about-member-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- About Member Info Start -->

                <!-- About Member Info End -->

                <!-- Member Winning Awards Start -->

                <!-- Member Winning Awards End -->
            </div>

            <div class="col-lg-12">
                <!-- Team Member Skills Bar Start -->

                <!-- Team Member Skills Bar End -->

                <!-- Team Sidebar Cta Box Start -->
                <div class="team-sidebar-cta wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Cta Content Start -->
                    <div class="cta-info-content">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-cta.svg') }}" alt="">
                        </div>

                        <div class="cta-content">
                            <h3>Prêt à entamer votre voyage pour une consultation ?</h3>
                            <p>Prenez rendez-vous dès aujourd'hui pour une première consultation et commencez votre voyage vers un sourire plus sain et sans douleur Contactez nous maintenant !</p>

                            <!-- Cta Appointment Button Start -->
                            <div class="cta-appointment-btn">
                                <a href="" class="btn-default">Prendre un rendez vous</a>
                            </div>
                            <!-- Cta Appointment Button End -->
                        </div>
                    </div>
                    <!-- Cta Content End -->
                </div>
                <!-- Team Sidebar Cta Box End -->
            </div>
        </div>
    </div>
</div>
@endsection

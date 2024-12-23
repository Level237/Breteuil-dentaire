@extends('layouts.main')

@section('title')

@endsection

@section("main")
<div class="page-header " style="background-image: url({{ asset('assets/images/dark-team.jpg') }});background-size:cover;height:100%"  >



    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Notre</span> Equipe</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" style="color:#8b8b8b"><a href="{{ route('homepage') }}">Accueil</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">notre Equipe</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Team Start -->
<div class="page-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 d-none d-sm-block col-md-6">

            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Team Member Item Start -->
                <div class="team-member-item wow fadeInUp">
                    <!-- Team Image Start -->
                    <div class="team-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/Dr-Fabrice-Dassie.png') }}" alt="">
                        </figure>

                        <!-- Team Social Icon Start -->
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icon End -->
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Content Start -->
                    <div class="team-content">
                        <h3>Dr Fabrice DASSIE</h3>
                        <p>Chirurgien dentaire</p>
                    </div>
                    <!-- Team Content End -->
                </div>
                <!-- Team Member Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Team Member Item Start -->
                <div class="team-member-item wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Team Image Start -->
                    <div class="team-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/Dr-Mickael.png') }}" alt="">
                        </figure>

                        <!-- Team Social Icon Start -->
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icon End -->
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Content Start -->
                    <div class="team-content">
                        <h3>Dr Mickael ABOULKER</h3>
                        <p>Chirurgien dentaire</p>
                    </div>
                    <!-- Team Content End -->
                </div>
                <!-- Team Member Item End -->
            </div>
            <div class="col-lg-2 d-none d-sm-block col-md-6">

            </div>
        </div>
    </div>
</div>
@endsection

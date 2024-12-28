@extends('layouts.main')

@section('title')
Contact
@endsection

@section('main')
<div class="page-header" style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Contact </span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
@if(Session::get("success"))
<div class="alert alert-primary" role="alert">
    {{ Session::get("success") }}
  </div>
  @endif
<div class="contact-us-form">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12">
                <div class="contact-form">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">contact</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prenez contact</span>  avec nous</h2>
                    </div>
                    <!-- Section Title End -->

                    <form  action="{{ route('send.contact') }}" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="name" class="form-control" id="fullname" placeholder="Entrez votre nom" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre email" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Numéro de téléphone" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Object" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Votre message" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn-default">Envoyez</button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">contact info</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Nous </span> Contactez </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Pour des soins dentaires d'urgence ou pour prendre rendez-vous, contactez notre cabinet à l'adresse suivante : visitez notre clinique.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact US Info Start -->
                    <div class="contact-us-info">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Contact US Item Start -->
                                <div class="contact-us-item wow fadeInUp">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                                    </div>
                                    <!-- Icon Box End -->

                                    <!-- Contact Us Content Start -->
                                    <div class="contact-info-content">
                                        <h3>visitez nous</h3>
                                        <p>5 bis rue Tassart , Abbaye de Breteuil , FRANCE</p>
                                    </div>
                                    <!-- Contact Us Content End -->
                                </div>
                                <!-- Contact Us Item End -->
                            </div>

                            <div class="col-md-6">
                                <!-- Contact US Item Start -->
                                <div class="contact-us-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Us Content Start -->
                                <div class="contact-info-content">
                                    <h3>Contact</h3>
                                    <p>03 65 65 75 75</p>
                                </div>
                                <!-- Contact Us Content End -->
                                </div>
                            <!-- Contact Us Item End -->
                            </div>

                            <div class="col-md-6">
                                <!-- Contact US Item Start -->
                                <div class="contact-us-item wow fadeInUp" data-wow-delay="0.5s">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-clock.svg') }}" alt="">
                                    </div>
                                    <!-- Icon Box End -->

                                    <!-- Contact Us Content Start -->
                                    <div class="contact-info-content">
                                        <h3>Horaires de Travail</h3>
                                        <p>Lundi à Vendredi 09h:00 à 19h</p>

                                    </div>
                                    <!-- Contact Us Content End -->
                                </div>
                                <!-- Contact Us Item End -->
                            </div>

                            <div class="col-md-6">
                                <!-- Contact US Item Start -->
                                <div class="contact-us-item wow fadeInUp" data-wow-delay="0.75s">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                                    </div>
                                    <!-- Icon Box End -->

                                    <!-- Contact Us Content Start -->
                                    <div class="contact-info-content">
                                        <h3>email</h3>
                                        <p>info@domainname.com</p>

                                    </div>
                                    <!-- Contact Us Content End -->
                                </div>
                                <!-- Contact Us Item End -->
                            </div>
                        </div>
                    </div>
                    <!-- Contact US Info End -->
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Google Map Start -->
                <div class="google-map">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2584.2532807672974!2d2.2936805757851797!3d49.63068077144725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7a2ff056390f3%3A0x12a1c5ad36db7e1c!2s5%20bis%20Rue%20Tassart%2C%2060120%20Breteuil%2C%20France!5e0!3m2!1sfr!2scm!4v1735156150881!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
                <!-- Google Map End -->
            </div>
        </div>
    </div>
 </div>
<!-- Page Contact End -->

<!-- Contact Form Start -->

@endsection

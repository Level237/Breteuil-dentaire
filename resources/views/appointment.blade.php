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
                    <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Prennez </span>rendez vous</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Prennez rendez vous</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top:12px">
    <div class="alert alert-primary" role="alert">

      </div>
</div>
<div class="page-book-appointment">
    <div class="container">
        <div class="book-appointment-form">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">booking</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prennez</span> Rendez vous</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="appointment-form wow fadeInUp">
                        <!-- Form Start -->
                        <form id="appointmentForm" action="#" method="POST" data-toggle="validator">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Entrez votre nom" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre email" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Numéro de Téléphone" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="services" class="form-control form-select" id="services" required="">
                                        <option value="" disabled="" selected="">selectionnez un service</option>
                                        <option value="Urgence dentaire">Urgence dentaire</option>
                                        <option value="Protèse dentaire">Protèse dentaire</option>
                                        <option value="Implant dentaire">Implant dentaire</option>
                                        <option value="Remplacer une dent">Remplacer une dent</option>
                                        <option value="Remplacer plusieurs dents">Remplacer plusieurs dents</option>
                                        <option value="Remplacer toutes ces dents">Remplacer toutes ces dents</option>
                                        <option value="Chirugie pré-implantaire">Chirugie pré-implantaire</option>
                                        <option value="Esthétique du sourire">Esthétique du sourire</option>
                                        <option value="Facette dentaire">Facette dentaire</option>
                                        <option value="Facette Pelliculaire">Facette Pelliculaire</option>
                                        <option value="Dentisterie numérique">Dentisterie numérique</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <input type="date" name="date" class="form-control" id="date" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">Prendre rendez vous</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

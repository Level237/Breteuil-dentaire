@extends('layouts.main')

@section('title')
    Faq
@endsection
@section('main')
    <div class="page-header"
        style="background-image: url({{ asset('assets/images/protese.jpg') }});background-size:cover;height:100%;background-position:bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span class="text-white">Faq </span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('homepage') }}" style="color:#8b8b8b">home</a>
                                </li>
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
                    @forelse ($faqGroups as $category => $items)
                        @php $accordionId = 'faq-accordion-'.\Illuminate\Support\Str::slug($category); @endphp
                        <div class="faqs-section" id="{{ $accordionId }}">
                            <div class="faqs-section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">{{ $category }}</h2>
                            </div>
                            <div class="faq-accordion" id="{{ $accordionId }}-list">
                                @foreach ($items as $index => $faq)
                                    @php
                                        $itemId = 'faq-'.$faq->id;
                                        $isFirst = $loop->parent->first && $index === 0;
                                    @endphp
                                    <div class="accordion-item wow fadeInUp" @if ($index > 0) data-wow-delay="{{ min($index * 0.2, 1) }}s" @endif>
                                        <h2 class="accordion-header" id="heading-{{ $itemId }}">
                                            <button class="accordion-button {{ $isFirst ? '' : 'collapsed' }}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-{{ $itemId }}"
                                                aria-expanded="{{ $isFirst ? 'true' : 'false' }}"
                                                aria-controls="collapse-{{ $itemId }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse-{{ $itemId }}"
                                            class="accordion-collapse collapse {{ $isFirst ? 'show' : '' }}"
                                            aria-labelledby="heading-{{ $itemId }}"
                                            data-bs-parent="#{{ $accordionId }}-list">
                                            <div class="accordion-body">
                                                <p>{{ $faq->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <div class="faqs-section">
                            <p>Aucune question n’est publiée pour le moment.</p>
                        </div>
                    @endforelse
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
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Prenez rendez-vous </span>pour un
                                suivi</h2>
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
                                    <p>breteuildentaire@gmail.com</p>
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
                            <a href="https://www.doctolib.fr/cabinet-dentaire/breteuil/cabinet-dentaire-de-l-abbaye-de-breteuil" target="_blank" class="btn-default">Prendre un rendez-vous</a>
                        </div>
                        <!-- Footer Appointment Button End  -->
                    </div>
                    <!-- Footer Contact Content End -->
                </div>
            </div>
        </div>
    </div>
@endsection
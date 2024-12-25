<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div  class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="index-3.html">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div   class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item submenu" ><a class="nav-link" style="font-size: 14px" href="index-3.html">Le Cabinet</a>
                                <ul class="sub-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team') }}">Notre Equipe</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team.dassie') }}">Dr Fabrice DASSIE</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team.michael') }}">Dr Mickael ABOULKER</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('visite-cabinet') }}">Visite du Cabinet</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a style="font-size: 14px" class="nav-link" href="{{ route('urgence-dentaire') }}">Urgences dentaires</a></li>
                            <li class="nav-item"><a style="font-size: 14px" class="nav-link" href="{{ route('proteses-dentaires') }}">Prothèses dentaires</a></li>
                            <li class="nav-item submenu"><a style="font-size: 14px" class="nav-link" href="#">Implantologie</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('implant-dentaire') }}">Implant dentaire</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('remplacer-dent') }}">Remplacer une dent</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('remplacer-plusieurs-dents') }}">Remplacer plusieurs dents</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('remplacer-toutes-dents') }}">Remplacer toute les dents</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('chirurgie-pre-implantaire') }}">Chirugie pré-implantaire</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('conseils') }}">Conseils Post-Opératoire</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu"><a style="font-size: 14px" class="nav-link" href="#">Esthétique</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('eclaircissement') }}">Eclaircissement dentaire</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('esthetique.sourire') }}">Eclaircissement du sourire</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('facette-dentaire') }}">Facette dentaire</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('facette-pelliculaire') }}">Facette pelliculaire</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a style="font-size: 14px" class="nav-link" href="service.html">Dentisterie numérique</a></li>

                            <li class="nav-item highlighted-menu"><a class="nav-link" href="appointment.html">book appointment</a></li>
                        </ul>
                    </div>
                    <!-- Let’s Start Button Start -->

                    <!-- Let’s Start Button End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>

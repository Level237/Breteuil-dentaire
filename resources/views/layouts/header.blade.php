<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div  class="container">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
                </a>

                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item submenu"><a class="nav-link" style="font-size: 14px" href="#">Le Cabinet</a>
                                <ul class="sub-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team') }}">Notre Equipe</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team.dassie') }}">Dr Fabrice DASSIE</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team.michael') }}">Dr Mickael ABOULKER</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('visite-cabinet') }}">Visite du Cabinet</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a style="font-size: 14px" class="nav-link" href="{{ route('service.index') }}">Services</a></li>

                            @php
                                $menuServices = $navServices ?? collect();
                            @endphp

                            @foreach (\App\Models\Service::CATEGORIES as $categoryKey => $categoryLabel)
                                @php
                                    $items = $menuServices->get($categoryKey, collect());
                                @endphp
                                @if ($items->isNotEmpty())
                                    <li class="nav-item submenu">
                                        <a class="nav-link" style="font-size: 14px" href="{{ route('service.index') }}">{{ $categoryLabel }}</a>
                                        <ul class="sub-menu">
                                            @foreach ($items as $item)
                                                <li class="nav-item"><a class="nav-link" href="{{ $item->publicUrl() }}">{{ $item->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach

                            <li class="nav-item"><a style="font-size: 14px" class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
                            <li class="nav-item highlighted-menu"><a class="nav-link" href="{{ route('appointment') }}">Prendre un rendez-vous</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>

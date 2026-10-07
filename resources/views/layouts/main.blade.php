<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    @php
        $yieldMetaTitle = trim($__env->yieldContent('meta_title'));
        $yieldPageTitle = trim(preg_replace('/\s+/', ' ', strip_tags($__env->yieldContent('title'))));
        $seoTitle = $yieldMetaTitle !== '' ? $yieldMetaTitle : ($pageMeta?->meta_title ?? $yieldPageTitle);
        $seoTitle = $seoTitle !== '' ? $seoTitle : \App\Support\Seo::SITE_NAME;

        $yieldDescription = trim($__env->yieldContent('meta_description'));
        $seoDescription = $yieldDescription !== '' ? $yieldDescription : ($pageMeta?->meta_description ?? \App\Support\Seo::DEFAULT_DESCRIPTION);

        $yieldImage = trim($__env->yieldContent('meta_image'));
        $seoImage = \App\Support\Seo::absoluteImage($yieldImage !== '' ? $yieldImage : ($pageMeta?->image_url));
        $canonicalUrl = url()->current();
    @endphp
    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ \App\Support\Seo::SITE_NAME }}">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoTitle }}">
    <meta name="twitter:description" content="{{ $seoDescription }}">
    <meta name="twitter:image" content="{{ $seoImage }}">
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

	<!-- Bootstrap Css -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
	<!-- Font Awesome Icon Css-->
	<link href="{{ asset('assets/css/all.css') }}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css') }}">
	<!-- Main Custom Css -->
	<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{ asset('assets/images/loader.svg') }}" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
	@include('layouts.header')
	<!-- Header End -->

    <!-- Hero Section Start -->
	@yield('main')

    <!-- Footer Start -->
   @include("layouts.footer")
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('assets/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('assets/js/function.js') }}"></script>
	<script src="../../assets/js/theme-panel.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'LIQULOFI PRIVATE LIMITED | Capital Beyond Limits - High-Ticket Funding Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'Liqulofi Private Limited is India\'s trusted financial partner providing smart, flexible and customized funding solutions from 1 CR to 1000 CR across Pan India.')">
    <meta name="keywords" content="Liqulofi, Fintech, High Ticket Funding, Mortgage Loans, Builder Project Finance, Residential Funding, Commercial Project Funding, Industrial Property Funding, Hotel Resort Funding, Hospital Funding, Working Capital, Gujarat, Madhya Pradesh, Pan India">
    <meta name="author" content="LIQULOFI PRIVATE LIMITED">
    
    <!-- Open Graph / Social Sharing -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="LIQULOFI PRIVATE LIMITED - CAPITAL BEYOND LIMITS">
    <meta property="og:description" content="Customized funding solutions from 1 CR to 1000 CR for Real Estate, Commercial, Industrial, Hospitality, Healthcare & Business Growth.">
    <meta property="og:image" content="assets/images/liqulofi_crest_official.png">
    <meta property="og:url" content="https://www.liqulofi.com">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/liqulofi_crest_official.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Immediate Theme Initialization (Prevents FOUC & Page Flash) -->
    <script>
        (function() {
            try {
                var savedTheme = localStorage.getItem('liqulofi_theme') || 'light';
                document.documentElement.setAttribute('data-theme', savedTheme);
                document.documentElement.style.backgroundColor = savedTheme === 'dark' ? '#050B14' : '#F3ECE1';
            } catch (e) {}
        })();
    </script>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    @yield('extra_css')
</head>
<body class="luxury-fintech-theme">
    <!-- Live Interactive Golden Constellation & Particle Background Canvas -->
    <canvas id="live-ambient-canvas" class="live-ambient-canvas" aria-hidden="true"></canvas>

    <!-- Ambient Gold Glow Background Canvas -->
    <div class="ambient-glow glow-top-left"></div>
    <div class="ambient-glow glow-center-right"></div>
    <div class="ambient-glow glow-bottom-left"></div>

    <!-- Cinematic Royal Preloader (Home Screen Only) -->
    @if(!empty($is_home) || (isset($page) && $page === 'home') || (!isset($page) && empty($_GET['page'])))
        @include('components.preloader')
    @endif

    <!-- Header & Navigation -->
    @include('components.header')

    <!-- Main Content Body -->
    <main class="main-content-wrapper" id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Consultation Modal Form -->
    @include('components.contact-modal')

    <!-- Mobile Sticky Quick Action Dock (Screens <= 768px) -->
    @include('components.mobile-action-bar')

    <!-- Floating Theme Toggle (Bottom Left) -->
    <button type="button" class="floating-theme-toggle" id="floating-theme-toggle" aria-label="Toggle Dark / Light Theme" title="Toggle Theme (Dark / Light)">
        <span class="float-theme-sun"><i class="fa-solid fa-sun"></i></span>
        <span class="float-theme-moon"><i class="fa-solid fa-moon"></i></span>
    </button>

    <!-- GSAP & ScrollTrigger Kinetic Engine -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Main Application Scripts -->
    <script src="assets/js/main.js"></script>
    @yield('extra_js')
</body>
</html>

@php
    $companyData = $company ?? [];
    $servicesList = $services ?? [];
    $currentPage = $_GET['page'] ?? 'home';
@endphp

<!-- Main Sticky Header Navbar -->
<header class="site-header" id="main-header">
    <div class="header-fluid header-container">
        <!-- Logo & Brand Identity -->
        <a href="index.php" class="brand-link">
            @include('components.crest', ['size' => 'header'])
            <div class="brand-text-block">
                <span class="brand-name">LIQULOFI</span>
                <span class="brand-sub">PRIVATE LIMITED</span>
                <span class="brand-tagline">CAPITAL BEYOND LIMITS</span>
            </div>
        </a>

        <!-- Desktop Navigation Menu -->
        <nav class="desktop-nav" id="desktop-nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="index.php" class="nav-link {{ $currentPage === 'home' ? 'active' : '' }}">Home</a>
                </li>
                
                <!-- Services Mega Dropdown -->
                <li class="nav-item has-dropdown">
                    <a href="index.php?page=services" class="nav-link {{ $currentPage === 'services' || $currentPage === 'service' ? 'active' : '' }}">
                        Funding Solutions
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <div class="nav-dropdown glass-dropdown">
                        <div class="dropdown-grid">
                            <div class="dropdown-col">
                                <span class="dropdown-cat-title">RETAIL & SECURED</span>
                                <a href="index.php?page=service&id=prime-home-loans" class="dropdown-link">
                                    <div class="link-icon">🏠</div>
                                    <div class="link-text">
                                        <span class="title">Prime Home Loans</span>
                                        <span class="sub">5 CR ONLY • Up to 20 Yrs</span>
                                    </div>
                                </a>
                                <a href="index.php?page=service&id=mortgage-loans" class="dropdown-link">
                                    <div class="link-icon">🏢</div>
                                    <div class="link-text">
                                        <span class="title">Mortgage Loans</span>
                                        <span class="sub">1 CR to 500 CR • VP Report</span>
                                    </div>
                                </a>
                                <a href="index.php?page=service&id=residential-property-funding" class="dropdown-link">
                                    <div class="link-icon">🏘️</div>
                                    <div class="link-text">
                                        <span class="title">Residential Property</span>
                                        <span class="sub">1 CR to 1000 CR • Purchase/Build</span>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-col">
                                <span class="dropdown-cat-title">COMMERCIAL & INSTITUTIONAL</span>
                                <a href="index.php?page=service&id=builder-project-finance" class="dropdown-link">
                                    <div class="link-icon">🏗️</div>
                                    <div class="link-text">
                                        <span class="title">Builder Project Finance</span>
                                        <span class="sub">1 CR to 500 CR • Landmarks</span>
                                    </div>
                                </a>
                                <a href="index.php?page=service&id=commercial-project-funding" class="dropdown-link">
                                    <div class="link-icon">🏙️</div>
                                    <div class="link-text">
                                        <span class="title">Commercial Project Funding</span>
                                        <span class="sub">1 CR to 1000 CR • IT / Malls</span>
                                    </div>
                                </a>
                                <a href="index.php?page=service&id=industrial-property-funding" class="dropdown-link">
                                    <div class="link-icon">🏭</div>
                                    <div class="link-text">
                                        <span class="title">Industrial Property</span>
                                        <span class="sub">1 CR to 1000 CR • Plants & LRD</span>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-col">
                                <span class="dropdown-cat-title">HOSPITALITY, HEALTH & SPECIAL</span>
                                <a href="index.php?page=service&id=hotel-resort-property-funding" class="dropdown-link">
                                    <div class="link-icon">🏨</div>
                                    <div class="link-text">
                                        <span class="title">Hotel & Resort Funding</span>
                                        <span class="sub">1 CR to 1000 CR • Iconic Stays</span>
                                    </div>
                                </a>
                                <a href="index.php?page=service&id=hospital-property-funding" class="dropdown-link">
                                    <div class="link-icon">🏥</div>
                                    <div class="link-text">
                                        <span class="title">Hospital Property Funding</span>
                                        <span class="sub">1 CR to 1000 CR • Healthcare</span>
                                    </div>
                                </a>
                                <a href="index.php?page=service&id=working-capital-solutions" class="dropdown-link">
                                    <div class="link-icon">💼</div>
                                    <div class="link-text">
                                        <span class="title">Working Capital Solutions</span>
                                        <span class="sub">1 CR to 1000 CR • CC/OD/CGTMSE</span>
                                    </div>
                                </a>
                                <a href="index.php?page=service&id=smart-funding-solutions" class="dropdown-link">
                                    <div class="link-icon">❄️</div>
                                    <div class="link-text">
                                        <span class="title">Smart Agri & Logistics</span>
                                        <span class="sub">Cold Storage, Warehouse, Dairy</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="index.php?page=services" class="view-all-services-link">
                                <span>Explore All 10 Funding Portfolios</span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="index.php?page=calculator" class="nav-link {{ $currentPage === 'calculator' ? 'active' : '' }}">EMI Calculator</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=partners" class="nav-link {{ $currentPage === 'partners' ? 'active' : '' }}">Bank Tie-Ups</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=about" class="nav-link {{ $currentPage === 'about' || $currentPage === 'contact' ? 'active' : '' }}">About &amp; Contact</a>
                </li>

            </ul>
        </nav>

        <!-- Right Header Actions -->
        <div class="header-action-group">
            <!-- Theme Toggle Button (Light/Dark Mode) -->
            <button type="button" class="theme-toggle-btn" id="theme-toggle-btn" aria-label="Toggle Dark / Light Theme" title="Toggle Theme (Dark / Light)">
                <span class="theme-toggle-track">
                    <span class="theme-icon theme-sun" aria-hidden="true">
                        <i class="fa-solid fa-sun"></i>
                    </span>
                    <span class="theme-icon theme-moon" aria-hidden="true">
                        <i class="fa-solid fa-moon"></i>
                    </span>
                    <span class="theme-toggle-thumb"></span>
                </span>
            </button>

            <a href="assets/docs/Liqulofi_Private_Limited_Brochure.pdf" download="Liqulofi_Private_Limited_Brochure.pdf" class="btn-gold header-download-btn" title="Download Official Brochure">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
                <span>Download Brochure</span>
            </a>

            <!-- Mobile Hamburger Toggle -->
            <button type="button" class="mobile-menu-toggle" id="mobile-toggle" aria-label="Toggle menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Drawer Backdrop Overlay -->
<div class="mobile-drawer-backdrop" id="mobile-drawer-backdrop"></div>

<!-- Mobile Drawer Navigation (Fixed to Viewport) -->
<div class="mobile-drawer" id="mobile-drawer" aria-label="Mobile Navigation">
    <div class="drawer-header">
        <div class="drawer-brand">
            <span class="brand-name">LIQULOFI</span>
            <span class="brand-tagline">CAPITAL BEYOND LIMITS</span>
        </div>
        <button type="button" class="drawer-close" id="drawer-close" aria-label="Close navigation">&times;</button>
    </div>
    <div class="drawer-body">
        <!-- Mobile Drawer Theme Switch -->
        <div class="drawer-theme-switch-card">
            <div class="drawer-theme-left">
                <span class="drawer-theme-icon"><i class="fa-solid fa-circle-half-stroke"></i></span>
                <span class="drawer-theme-label">Theme Mode</span>
            </div>
            <button type="button" class="drawer-theme-btn" id="drawer-theme-toggle">
                <span class="theme-status-text">Light Mode</span>
                <i class="fa-solid fa-repeat"></i>
            </button>
        </div>

        <ul class="mobile-nav-list">
            <li><a href="index.php" class="mobile-nav-link">Home</a></li>
            <li><a href="index.php?page=services" class="mobile-nav-link">All Funding Solutions</a></li>
            <li><a href="index.php?page=calculator" class="mobile-nav-link">EMI &amp; Structuring Calculator</a></li>
            <li><a href="index.php?page=partners" class="mobile-nav-link">Bank &amp; NBFC Tie-Ups</a></li>
            <li><a href="index.php?page=about" class="mobile-nav-link">About &amp; Contact</a></li>
        </ul>

        <div class="drawer-directors-box">
            <span class="d-box-title">DIRECTORS DIRECT HELPLINE</span>
            <div class="drawer-directors-list">
                @foreach($companyData['directors'] ?? [] as $dir)
                    <div class="drawer-dir-row">
                        <span class="dir-name">{{ $dir['name'] }}</span>
                        <a href="tel:{{ $dir['raw_phone'] }}" class="dir-phone">{{ $dir['phone'] }}</a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="drawer-actions">
            <a href="assets/docs/Liqulofi_Private_Limited_Brochure.pdf" download="Liqulofi_Private_Limited_Brochure.pdf" class="btn-gold btn-block">Download Brochure (PDF)</a>
        </div>
    </div>
</div>

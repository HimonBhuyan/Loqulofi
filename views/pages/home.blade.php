@extends('layouts.app')

@section('title', 'LIQULOFI PRIVATE LIMITED | Capital Beyond Limits - High-Ticket Funding 1 CR to 1000 CR')

@section('content')

@if(!empty($success_msg))
    <div class="container mt-4">
        <div class="alert-box alert-success">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            <span>{{ $success_msg }}</span>
        </div>
    </div>
@endif

<!-- =========================================================================
     PAGE 1: HERO SECTION - PROFILE & IDENTITY (Brochure Page 1)
     ========================================================================= -->
<section class="hero-section" id="hero">
    <div class="hero-ornament-bg"></div>
    <div class="hero-sparkle-field" aria-hidden="true">
        <span class="hero-sparkle sparkle-1">✦</span>
        <span class="hero-sparkle sparkle-2">✦</span>
        <span class="hero-sparkle sparkle-3">✦</span>
        <span class="hero-sparkle sparkle-4">✦</span>
        <span class="hero-sparkle sparkle-5">✦</span>
        <span class="hero-sparkle sparkle-6">✦</span>
    </div>
    <div class="container hero-container">
        <div class="hero-content text-center">
            
            <!-- Royal Crest Emblem -->
            <div class="hero-crest-wrapper kinetic-crest">
                <div class="hero-crest-halo"></div>
                @include('components.crest', ['size' => 'hero'])
            </div>

            <!-- Hero Brand Typography & Masked Kinetic Animation -->
            <div class="hero-brand-block">
                <div class="hero-title-mask">
                    <h1 class="hero-brand-title">LIQULOFI</h1>
                </div>
                <div class="hero-brand-sub">
                    <span class="ornament-dash">❖</span>
                    <span class="sub-text">PRIVATE LIMITED</span>
                    <span class="ornament-dash">❖</span>
                </div>
                <div class="hero-tagline-mask">
                    <h2 class="hero-tagline">CAPITAL BEYOND LIMITS</h2>
                </div>
            </div>

            <!-- Hero Highlights Badges Bar -->
            <div class="hero-badges-row">
                <div class="hero-badge-card spotlight-card">
                    <div class="badge-icon-box">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="badge-body">
                        <span class="badge-title">OFFICE LOCATION</span>
                        <span class="badge-desc">{{ $company['offices'] ?? 'Gujarat | Madhya Pradesh' }}</span>
                    </div>
                </div>

                <div class="hero-badge-card highlight-gold spotlight-card">
                    <div class="badge-icon-box gold-icon">
                        <span class="rupee-sym">₹</span>
                    </div>
                    <div class="badge-body">
                        <span class="badge-title">TICKET SIZE</span>
                        <span class="badge-desc font-bold"><span class="counter-val" data-target="1">1</span> CR to <span class="counter-val" data-target="1000">1000</span> CR</span>
                    </div>
                </div>

                <div class="hero-badge-card spotlight-card">
                    <div class="badge-icon-box">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    </div>
                    <div class="badge-body">
                        <span class="badge-title">WORKING</span>
                        <span class="badge-desc">{{ $company['coverage'] ?? 'PAN INDIA' }}</span>
                    </div>
                </div>

                <div class="hero-badge-card spotlight-card">
                    <div class="badge-icon-box">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="badge-body">
                        <span class="badge-title">EMAIL ID</span>
                        <span class="badge-desc">{{ $company['email'] ?? 'finance@liqulofipvtltd.com' }}</span>
                    </div>
                </div>

            </div>

            <!-- Hero Action Buttons -->
            <div class="hero-cta-buttons">
                <a href="index.php?page=services" class="btn-gold btn-xl magnetic-btn">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    <span>Explore Solutions</span>
                </a>
                <a href="assets/docs/Liqulofi_Private_Limited_Brochure.pdf" download="Liqulofi_Private_Limited_Brochure.pdf" class="btn-outline-gold btn-xl magnetic-btn">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    <span>Download Brochure</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     INFINITE FINTECH TICKER RIBBON (Slice-Style Kinetic Marquee)
     ========================================================================= -->
<div class="infinite-ticker-band" aria-hidden="true">
    <div class="ticker-track">
        <div class="ticker-content">
            <span class="ticker-item"><span class="ticker-gem">✦</span> HIGH-TICKET FUNDING ₹1 CR TO ₹1000 CR</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> PAN INDIA CAPITAL DISBURSAL</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> 15+ LEADING BANK & NBFC TIE-UPS</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> PRIME HOME LOANS (5 CR ONLY)</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> BUILDER & REAL ESTATE PROJECT FINANCE</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> COMMERCIAL & INDUSTRIAL INFRASTRUCTURE</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> HOTEL & HOSPITAL PROPERTY FUNDING</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> WORKING CAPITAL & STRUCTURED DEBT</span>
        </div>
        <div class="ticker-content" aria-hidden="true">
            <span class="ticker-item"><span class="ticker-gem">✦</span> HIGH-TICKET FUNDING ₹1 CR TO ₹1000 CR</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> PAN INDIA CAPITAL DISBURSAL</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> 15+ LEADING BANK & NBFC TIE-UPS</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> PRIME HOME LOANS (5 CR ONLY)</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> BUILDER & REAL ESTATE PROJECT FINANCE</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> COMMERCIAL & INDUSTRIAL INFRASTRUCTURE</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> HOTEL & HOSPITAL PROPERTY FUNDING</span>
            <span class="ticker-item"><span class="ticker-gem">✦</span> WORKING CAPITAL & STRUCTURED DEBT</span>
        </div>
    </div>
</div>

<!-- =========================================================================
     PAGE 2: ABOUT US & OUR APPROACH (Brochure Page 2)
     ========================================================================= -->
<section class="section-padding about-section" id="about">
    <div class="container">
        <div class="gold-box-frame spotlight-card">
            <div class="section-header-ornate text-center">
                <div class="gold-pill-tag">COMPANY PROFILE</div>
                <h2 class="section-heading kinetic-heading" data-kinetic="words">ABOUT US</h2>
                <div class="gold-divider-center">
                    <span class="line"></span>
                    <span class="diamond">♦</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="about-lead-block text-center">
                <p class="about-primary-text">{{ $about['lead'] }}</p>
                <p class="about-secondary-text">{{ $about['sublead'] }}</p>
            </div>

            <!-- 4 Core Pillars Grid -->
            <div class="pillars-grid-4">
                @foreach($about['pillars'] as $p)
                    <div class="pillar-card">
                        <div class="pillar-icon-box">
                            @if($p['title'] === 'TRUST')
                                <i class="fa-solid fa-handshake"></i>
                            @elseif($p['title'] === 'EXPERTISE')
                                <i class="fa-solid fa-award"></i>
                            @elseif($p['title'] === 'INTEGRITY')
                                <i class="fa-solid fa-shield-halved"></i>
                            @elseif($p['title'] === 'COMMITMENT')
                                <i class="fa-solid fa-bullseye"></i>
                            @else
                                <i class="fa-solid fa-{{ $p['icon'] ?? 'star' }}"></i>
                            @endif
                        </div>
                        <h3 class="pillar-title">{{ $p['title'] }}</h3>
                        <p class="pillar-desc">{{ $p['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Our Approach Banner -->
            <div class="our-approach-card">
                <div class="approach-icon">
                    <svg viewBox="0 0 24 24" width="40" height="40" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                    </svg>
                </div>
                <div class="approach-content">
                    <h3 class="approach-title">OUR APPROACH</h3>
                    <p class="approach-text">{{ $about['approach'] }}</p>
                </div>
            </div>

            <!-- Signature Brochure Quote -->
            <div class="brochure-quote-banner">
                <span class="quote-symbol">“</span>
                <span class="quote-body-italic">{{ $about['quote'] }}</span>
                <span class="quote-symbol">”</span>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PAGE 3 & 4: VISION & MISSION (Brochure Pages 3 & 4)
     ========================================================================= -->
<section class="section-padding vision-mission-section" id="vision-mission">
    <div class="container">
        <div class="two-col-showcase">
            <!-- OUR VISION (Page 3) -->
            <div class="gold-box-frame showcase-col">
                <div class="section-header-ornate">
                    <div class="gold-pill-tag">STRATEGIC HORIZON</div>
                    <h2 class="section-heading">OUR VISION</h2>
                    <div class="gold-divider-left">
                        <span class="line"></span>
                        <span class="diamond">♦</span>
                    </div>
                </div>

                <p class="vision-lead-text">{{ $vision['lead'] }}</p>

                <div class="vision-quote-callout">
                    <span class="callout-label">OUR VISION IS TO</span>
                    <blockquote class="callout-quote">“{{ $vision['quote'] }}”</blockquote>
                </div>

                <div class="vision-pillars-list">
                    @foreach($vision['pillars'] as $vp)
                        <div class="vision-item">
                            <div class="v-icon">
                                <span class="dot-gold"></span>
                            </div>
                            <div class="v-text">
                                <h4 class="v-title">{{ $vp['title'] }}</h4>
                                <p class="v-desc">{{ $vp['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="vision-footer-italic">
                    <em>“{{ $vision['footer_note'] }}”</em>
                </div>
            </div>

            <!-- OUR MISSION (Page 4) -->
            <div class="gold-box-frame showcase-col">
                <div class="section-header-ornate">
                    <div class="gold-pill-tag">PURPOSE & DRIVE</div>
                    <h2 class="section-heading">OUR MISSION</h2>
                    <div class="gold-divider-left">
                        <span class="line"></span>
                        <span class="diamond">♦</span>
                    </div>
                </div>

                <p class="mission-lead-text">{{ $mission['lead'] }}</p>

                <div class="mission-slogan-box">
                    <span class="slogan-pre">WE EXIST TO</span>
                    <h3 class="slogan-main">FUEL AMBITIONS BUILD FUTURES</h3>
                </div>

                <div class="mission-pillars-list">
                    @foreach($mission['pillars'] as $mp)
                        <div class="mission-item">
                            <div class="m-icon">
                                <span class="dot-gold"></span>
                            </div>
                            <div class="m-text">
                                <h4 class="m-title">{{ $mp['title'] }}</h4>
                                <p class="m-desc">{{ $mp['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- 3 Values: Focus, Commitment, Results -->
                <div class="mission-values-row">
                    @foreach($mission['values'] as $val)
                        <div class="val-pill">
                            <span class="val-name">{{ $val['label'] }}</span>
                            <span class="val-text">{{ $val['text'] }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="vision-footer-italic mt-3">
                    <em>“{{ $mission['quote'] }}”</em>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PAGE 5: WHY CHOOSE US? (Brochure Page 5)
     ========================================================================= -->
<section class="section-padding why-choose-section" id="why-choose-us">
    <div class="container">
        <div class="gold-box-frame">
            <div class="section-header-ornate text-center">
                <div class="gold-pill-tag">THE LIQULOFI ADVANTAGE</div>
                <h2 class="section-heading">WHY CHOOSE US?</h2>
                <div class="gold-divider-center">
                    <span class="line"></span>
                    <span class="diamond">♦</span>
                    <span class="line"></span>
                </div>
                <p class="why-sublead">{{ $why_choose['subtitle'] }}</p>
                <div class="why-banner-tagline">
                    <span class="dash">—</span>
                    <span class="text">{{ $why_choose['tagline'] }}</span>
                    <span class="dash">—</span>
                </div>
            </div>

            <!-- 10 Feature Advantage Grid -->
            <div class="why-cards-grid">
                @foreach($why_choose['items'] as $item)
                    <div class="why-card">
                        <div class="why-card-icon-box">
                            @if($item['title'] === 'HIGH-TICKET FOCUS')
                                <i class="fa-solid fa-sack-dollar"></i>
                            @elseif($item['title'] === 'SPEED & EFFICIENCY')
                                <i class="fa-solid fa-bolt-lightning"></i>
                            @elseif($item['title'] === 'CUSTOMIZED SOLUTIONS')
                                <i class="fa-solid fa-sliders"></i>
                            @elseif($item['title'] === 'TRANSPARENCY & INTEGRITY')
                                <i class="fa-solid fa-scale-balanced"></i>
                            @elseif($item['title'] === 'STRONG LENDER NETWORK')
                                <i class="fa-solid fa-building-columns"></i>
                            @elseif($item['title'] === 'EXPERTISE YOU CAN TRUST')
                                <i class="fa-solid fa-user-tie"></i>
                            @elseif($item['title'] === 'PAN INDIA PRESENCE')
                                <i class="fa-solid fa-map-location-dot"></i>
                            @elseif($item['title'] === 'COMPLETE CONFIDENTIALITY')
                                <i class="fa-solid fa-lock"></i>
                            @elseif($item['title'] === 'FLEXIBLE & INNOVATIVE SOLUTIONS')
                                <i class="fa-solid fa-lightbulb"></i>
                            @elseif($item['title'] === 'LONG TERM PARTNERSHIP')
                                <i class="fa-solid fa-handshake-angle"></i>
                            @else
                                <i class="fa-solid fa-star"></i>
                            @endif
                        </div>
                        <div class="why-card-body">
                            <h4 class="why-item-title">{{ $item['title'] }}</h4>
                            <p class="why-item-desc">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="why-footer-highlight text-center">
                <div class="institution-icon">🏛️</div>
                <p class="footer-highlight-text">{{ $why_choose['footer_note'] }}</p>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     PAGES 6 TO 15: COMPLETE FUNDING PORTFOLIOS SHOWCASE
     ========================================================================= -->
<section class="section-padding services-master-section" id="services">
    <div class="container">
        <div class="section-header-ornate text-center">
            <div class="gold-pill-tag">PORTFOLIO DIRECTORY</div>
            <h2 class="section-heading">TAILORED FUNDING SOLUTIONS</h2>
            <div class="gold-divider-center">
                <span class="line"></span>
                <span class="diamond">♦</span>
                <span class="line"></span>
            </div>
            <p class="section-subtitle">Structured Finance, Institutional Capital & Real Estate Debt from ₹1 CR to ₹1000 CR</p>
        </div>

        <!-- Filter Category Tabs -->
        <div class="service-filter-tabs">
            <button class="filter-tab-btn active" data-filter="all">All Portfolios (10)</button>
            <button class="filter-tab-btn" data-filter="Retail & High Net-Worth">Retail & Prime</button>
            <button class="filter-tab-btn" data-filter="Secured Finance">Mortgage & Secured</button>
            <button class="filter-tab-btn" data-filter="Real Estate & Infrastructure">Builders & Real Estate</button>
            <button class="filter-tab-btn" data-filter="Commercial & Retail">Commercial & Tech Parks</button>
            <button class="filter-tab-btn" data-filter="Industrial & Manufacturing">Industrial & LRD</button>
            <button class="filter-tab-btn" data-filter="Hospitality & Leisure">Hotel & Resorts</button>
            <button class="filter-tab-btn" data-filter="Healthcare & Medical">Hospital & Healthcare</button>
            <button class="filter-tab-btn" data-filter="Corporate Finance">Working Capital</button>
            <button class="filter-tab-btn" data-filter="Agri & Logistics">Smart Agri & Logistics</button>
        </div>

        <!-- 10 Services Detailed Cards Grid -->
        <div class="services-cards-grid">
            @foreach($services as $srv)
                <div class="service-full-card spotlight-card" data-category="{{ $srv['category'] }}">
                    <!-- Luxury Golden Doodle Art Visual Header -->
                    <div class="service-card-media">
                        <img src="assets/images/services/{{ $srv['id'] }}-doodle.jpg" alt="{{ $srv['title'] }} - Luxury Doodle Art" class="srv-media-img" loading="lazy">
                        <div class="srv-media-gradient"></div>
                        <div class="srv-media-header-bar">
                            <span class="page-marker">BROCHURE PAGE {{ $srv['page_num'] }}</span>
                            <div class="srv-ticket-box">
                                <span class="ticket-lbl">TICKET SIZE</span>
                                <span class="ticket-val">{{ $srv['ticket_size'] }}</span>
                            </div>
                        </div>
                        <div class="srv-media-category-badge">
                            <span>{{ $srv['category'] }}</span>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="service-card-main">
                        <h3 class="service-main-title">{{ $srv['title'] }}</h3>
                        <p class="service-main-subtitle"><em>{{ $srv['subtitle'] }}</em></p>
                        
                        <p class="service-short-desc">{{ $srv['short_desc'] }}</p>

                        @if(isset($srv['slogan']))
                            <div class="service-slogan-strip">
                                <span>“{{ $srv['slogan'] }}”</span>
                            </div>
                        @endif

                        <!-- Service Specific Features -->
                        @if(isset($srv['features_grid']))
                            <div class="features-mini-grid">
                                @foreach($srv['features_grid'] as $feat)
                                    <div class="feat-pill">
                                        <span class="feat-name">{{ $feat['title'] }}</span>
                                        <span class="feat-sub">{{ $feat['desc'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if(isset($srv['purposes']))
                            <div class="purposes-section">
                                <span class="purposes-label">FINANCING PURPOSE:</span>
                                <div class="purposes-pills-row">
                                    @foreach($srv['purposes'] as $purp)
                                        <div class="purpose-item">
                                            <span class="p-title">{{ $purp['title'] }}</span>
                                            <span class="p-desc">{{ $purp['desc'] }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @if(isset($srv['special_feature']))
                            <div class="special-vp-card">
                                <div class="vp-badge">{{ $srv['special_feature']['badge'] }}</div>
                                <div class="vp-content">
                                    <h4 class="vp-title">{{ $srv['special_feature']['title'] }}</h4>
                                    <p class="vp-desc">{{ $srv['special_feature']['desc'] }}</p>
                                </div>
                            </div>
                        @endif

                        @if(isset($srv['sub_sectors']))
                            <div class="sub-sectors-grid">
                                @foreach($srv['sub_sectors'] as $sub)
                                    <div class="sub-sector-box">
                                        @if(isset($sub['banner_img']))
                                            <div class="sub-sector-thumb-wrap">
                                                <img src="{{ $sub['banner_img'] }}" alt="{{ $sub['title'] }}" class="sub-sector-thumb" loading="lazy">
                                            </div>
                                        @endif
                                        <div class="sub-sector-box-content">
                                            <h4 class="sub-title"><i class="fa-solid {{ $sub['icon'] ?? 'fa-building' }}"></i> {{ $sub['title'] }}</h4>
                                            <span class="sub-tagline">{{ $sub['tagline'] }}</span>
                                            <div class="sub-finance-tags">
                                                @foreach($sub['we_finance'] as $wf)
                                                    <span class="wf-tag">{{ $wf }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if(isset($srv['services']))
                            <div class="wc-services-grid">
                                @foreach($srv['services'] as $wcs)
                                    <div class="wc-item">
                                        <span class="wc-title">{{ $wcs['title'] }}</span>
                                        <span class="wc-desc">{{ $wcs['desc'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if(isset($srv['funding_for']))
                            <div class="funding-for-list">
                                <span class="ff-label">FUNDING FOR:</span>
                                <div class="ff-tags">
                                    @foreach($srv['funding_for'] as $ff)
                                        <span class="ff-tag">✓ {{ $ff }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Card Footer Actions -->
                    <div class="service-card-footer">
                        <a href="index.php?page=service&id={{ $srv['id'] }}" class="btn-card-learn">
                            <span>Detailed Specifications & Eligibility</span>
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- =========================================================================
     UNIQUE 5-STEP PROCESS COMPONENT (Brochure Pages 10-15)
     ========================================================================= -->
<section class="section-padding process-section" id="process">
    <div class="container">
        @include('components.process-flow', ['steps' => $process_steps])
    </div>
</section>


<!-- =========================================================================
     PAGE 16: CONNECTING ALL BANKS - BANK TIE-UPS (Brochure Page 16)
     ========================================================================= -->
<section class="section-padding banks-section" id="banks">
    <div class="container">
        @include('components.bank-grid', ['banks' => $banks])
    </div>
</section>

<!-- =========================================================================
     FAST INQUIRY / DIRECTORS CONNECT STRIP
     ========================================================================= -->
<section class="section-padding cta-banner-section">
    <div class="container">
        <div class="gold-box-frame cta-inner-box text-center">
            <h2 class="cta-heading">READY TO SCALE WITH HIGH-TICKET FUNDING?</h2>
            <p class="cta-sub">
                Connect directly with our Directors for strategic debt structuring, project finance, or corporate liquidity up to ₹1,000 Crore.
            </p>
            <div class="cta-buttons-center">
                <a href="tel:+916232046473" class="btn-gold btn-xl">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    Call Executive Desk
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

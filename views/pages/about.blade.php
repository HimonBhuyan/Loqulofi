@extends('layouts.app')

@section('title', 'About Us & Leadership Contact | LIQULOFI PRIVATE LIMITED - Capital Beyond Limits')

@section('content')

<!-- Luxury Gold Breadcrumb Navigation -->
@include('components.breadcrumbs', [
    'items' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'About & Corporate Contact']
    ]
])

<!-- Page Hero Header -->
<section class="page-hero-header">
    <div class="container text-center">
        <div class="gold-pill-tag">CORPORATE PHILOSOPHY</div>
        <h1 class="page-hero-title">ABOUT LIQULOFI</h1>
        <div class="gold-divider-center">
            <span class="line"></span>
            <span class="diamond">♦</span>
            <span class="line"></span>
        </div>
        <p class="page-hero-desc">Empowering Ambitions with High-Ticket Financial Solutions Across India</p>
    </div>
</section>

<!-- Company Overview & Story (Page 2) -->
<section class="section-padding">
    <div class="container">
        <div class="gold-box-frame">
            <div class="section-header-ornate text-center">
                <h2 class="section-heading">WHO WE ARE</h2>
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

            <!-- 4 Pillars Grid -->
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

            <div class="brochure-quote-banner">
                <span class="quote-symbol">“</span>
                <span class="quote-body-italic">{{ $about['quote'] }}</span>
                <span class="quote-symbol">”</span>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Side by Side (Pages 3 & 4) -->
<section class="section-padding bg-navy-alt">
    <div class="container">
        <div class="two-col-showcase">
            <!-- OUR VISION -->
            <div class="gold-box-frame showcase-col">
                <div class="section-header-ornate">
                    <div class="gold-pill-tag">PAGE 3</div>
                    <h2 class="section-heading">OUR VISION</h2>
                </div>

                <p class="vision-lead-text">{{ $vision['lead'] }}</p>

                <div class="vision-quote-callout">
                    <span class="callout-label">OUR VISION IS TO</span>
                    <blockquote class="callout-quote">“{{ $vision['quote'] }}”</blockquote>
                </div>

                <div class="vision-pillars-list">
                    @foreach($vision['pillars'] as $vp)
                        <div class="vision-item">
                            <div class="v-icon"><span class="dot-gold"></span></div>
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

            <!-- OUR MISSION -->
            <div class="gold-box-frame showcase-col">
                <div class="section-header-ornate">
                    <div class="gold-pill-tag">PAGE 4</div>
                    <h2 class="section-heading">OUR MISSION</h2>
                </div>

                <p class="mission-lead-text">{{ $mission['lead'] }}</p>

                <div class="mission-slogan-box">
                    <span class="slogan-pre">WE EXIST TO</span>
                    <h3 class="slogan-main">FUEL AMBITIONS BUILD FUTURES</h3>
                </div>

                <div class="mission-pillars-list">
                    @foreach($mission['pillars'] as $mp)
                        <div class="mission-item">
                            <div class="m-icon"><span class="dot-gold"></span></div>
                            <div class="m-text">
                                <h4 class="m-title">{{ $mp['title'] }}</h4>
                                <p class="m-desc">{{ $mp['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

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

<!-- Why Choose Us Section (Page 5) -->
<section class="section-padding">
    <div class="container">
        <div class="gold-box-frame">
            <div class="section-header-ornate text-center">
                <div class="gold-pill-tag">PAGE 5</div>
                <h2 class="section-heading">WHY CHOOSE US?</h2>
                <p class="why-sublead">{{ $why_choose['subtitle'] }}</p>
            </div>

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
        </div>
    </div>
</section>

<!-- Directors Helpline & Corporate Contact Section (Combined About & Contact) -->
<section class="section-padding bg-navy-alt" id="directors-contact">
    <div class="container">
        <!-- Direct Executive Cards -->
        <div class="gold-box-frame mb-5">
            <div class="section-header-ornate text-center">
                <div class="gold-pill-tag">BOARD OF DIRECTORS</div>
                <h2 class="section-heading">DIRECTORS HELPLINE</h2>
                <div class="gold-divider-center">
                    <span class="line"></span>
                    <span class="diamond">♦</span>
                    <span class="line"></span>
                </div>
                <p class="section-subtitle">Reach out directly to our leadership team for immediate evaluation and high-level financial structuring.</p>
            </div>

            <div class="directors-grid">
                @foreach($company['directors'] ?? [] as $director)
                    @include('components.director-card', ['director' => $director])
                @endforeach
            </div>
        </div>

        <!-- Corporate Profile & Nationwide Presence -->
        <div class="gold-box-frame">
            <div class="section-header-ornate text-center">
                <div class="gold-pill-tag">HEADQUARTERS & HUBS</div>
                <h2 class="section-heading">CORPORATE PROFILE</h2>
                <div class="gold-divider-center">
                    <span class="line"></span>
                    <span class="diamond">♦</span>
                    <span class="line"></span>
                </div>
                <p class="section-subtitle">Institutional debt syndication, project finance & liquidity solutions across India.</p>
            </div>

            <div class="corporate-details-grid-4">
                <div class="corp-detail-card">
                    <div class="corp-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="corp-info">
                        <span class="corp-lbl">MADHYA PRADESH OFFICE</span>
                        <span class="corp-val">{{ $company['mp_address'] ?? '203 Dhan Trident, AB Road, Vijay Nagar, Indore, Madhya Pradesh' }}</span>
                        <span class="corp-sub">Regional Operating Headquarters</span>
                    </div>
                </div>

                <div class="corp-detail-card">
                    <div class="corp-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="corp-info">
                        <span class="corp-lbl">GUJARAT OFFICE</span>
                        <span class="corp-val">{{ $company['gujarat_address'] ?? '15 Nataraj Empire, Anchana Chowk, Nikol, Ahmedabad, Gujarat' }}</span>
                        <span class="corp-sub">Western Region Operating Hub</span>
                    </div>
                </div>

                <div class="corp-detail-card">
                    <div class="corp-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="corp-info">
                        <span class="corp-lbl">OFFICIAL EMAIL &amp; QUICK CONNECT</span>
                        <a href="mailto:{{ $company['email'] }}" class="corp-val link-gold">{{ $company['email'] }}</a>
                        <span class="corp-sub"><i class="fa-brands fa-whatsapp"></i> Quick Connect: <strong style="color: #22C55E;">+91 88892 80848</strong></span>
                    </div>
                </div>

                <div class="corp-detail-card">
                    <div class="corp-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                    </div>
                    <div class="corp-info">
                        <span class="corp-lbl">OFFICIAL WEB PORTAL</span>
                        <a href="https://{{ $company['website'] }}" target="_blank" class="corp-val link-gold">{{ $company['website'] }}</a>
                        <span class="corp-sub">CAPITAL BEYOND LIMITS</span>
                    </div>
                </div>

                <div class="corp-detail-card">
                    <div class="corp-icon">
                        <span class="rupee-sym">₹</span>
                    </div>
                    <div class="corp-info">
                        <span class="corp-lbl">STANDARD TICKET RANGE</span>
                        <span class="corp-val highlight-gold">{{ $company['ticket_size_range'] }}</span>
                        <span class="corp-sub">Secured Loans, Project Finance, Corporate Lines</span>
                    </div>
                </div>
            </div>

            <!-- Brochure Download Box Strip -->
            <div class="contact-brochure-card mt-4">
                <div class="cb-icon">📄</div>
                <div class="cb-text">
                    <h4 class="cb-title">DOWNLOAD COMPLETE OFFICIAL BROCHURE</h4>
                    <p class="cb-desc">Get the complete 16-page catalog PDF detailing all funding portfolios, sub-sectors, and institutional banking tie-ups.</p>
                </div>
                <a href="assets/docs/Liqulofi_Private_Limited.pdf?v={{ time() }}" download="Liqulofi_Private_Limited.pdf" class="btn-gold btn-lg">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    Download Official Brochure (PDF)
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

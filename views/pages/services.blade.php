@extends('layouts.app')

@section('title', 'Funding Portfolios | LIQULOFI PRIVATE LIMITED - ₹1 CR to ₹1000 CR')

@section('content')

<!-- Luxury Gold Breadcrumb Navigation -->
@include('components.breadcrumbs', [
    'items' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Funding Portfolios']
    ]
])

<!-- Page Hero Header -->
<section class="page-hero-header">
    <div class="container text-center">
        <div class="gold-pill-tag">OFFICIAL CATALOG</div>
        <h1 class="page-hero-title">FUNDING PORTFOLIOS</h1>
        <div class="gold-divider-center">
            <span class="line"></span>
            <span class="diamond">♦</span>
            <span class="line"></span>
        </div>
        <p class="page-hero-desc">Bespoke Financial Structures from ₹1 CR to ₹1,000 CR across Pan India</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <!-- Filter Tabs with Mobile Scroll Wrapper -->
        <div class="filter-tabs-scroll-wrap">
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

                    <div class="service-card-main">
                        <h3 class="service-main-title">{{ $srv['title'] }}</h3>
                        <p class="service-main-subtitle"><em>{{ $srv['subtitle'] }}</em></p>
                        <p class="service-short-desc">{{ $srv['short_desc'] }}</p>

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
                                    <a href="index.php?page=service&id={{ $sub['id'] }}" class="sub-sector-box sub-sector-clickable-card" title="Explore {{ $sub['title'] }} Dedicated Page">
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
                                            <div class="sub-sector-action-link mt-2" style="font-size: 0.78rem; font-weight: 700; color: var(--gold-dark); display: flex; align-items: center; gap: 0.35rem;">
                                                <span>Explore Dedicated Page &rarr;</span>
                                            </div>
                                        </div>
                                    </a>
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
                    </div>

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

        <!-- Official Brochure Download Box Strip -->
        <div class="contact-brochure-card mt-5">
            <div class="cb-icon">📄</div>
            <div class="cb-text">
                <h4 class="cb-title">DOWNLOAD COMPLETE OFFICIAL BROCHURE</h4>
                <p class="cb-desc">Get the complete 16-page catalog PDF detailing all funding portfolios, sub-sectors, and institutional banking tie-ups.</p>
            </div>
            <a href="assets/docs/Liqulofi_Private_Limited_Brochure.pdf" download="Liqulofi_Private_Limited_Brochure.pdf" class="btn-gold btn-lg">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
                Download Official Brochure (PDF)
            </a>
        </div>
    </div>
</section>

<!-- 5 Step Process -->
<section class="section-padding bg-navy-alt">
    <div class="container">
        @include('components.process-flow', ['steps' => $process_steps])
    </div>
</section>

@endsection

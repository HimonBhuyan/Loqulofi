@extends('layouts.app')

@section('title', ($service['title'] ?? 'Funding Solution') . ' | LIQULOFI PRIVATE LIMITED')

@section('content')

<!-- Luxury Gold Breadcrumb Navigation -->
@include('components.breadcrumbs', [
    'items' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Funding Solutions', 'url' => 'index.php?page=services'],
        ['label' => $service['title']]
    ]
])

<!-- Page Hero Header -->
<section class="page-hero-header service-detail-hero">
    <div class="container text-center">
        <div class="srv-badge-col">
            <span class="page-marker">BROCHURE PAGE {{ $service['page_num'] ?? '' }}</span>
            <span class="srv-category-tag">{{ $service['category'] ?? '' }}</span>
        </div>

        <h1 class="page-hero-title">{{ $service['title'] }}</h1>
        <div class="gold-divider-center">
            <span class="line"></span>
            <span class="diamond">♦</span>
            <span class="line"></span>
        </div>
        <p class="service-lead-subtitle"><em>{{ $service['subtitle'] }}</em></p>

        <div class="detail-ticket-hero-badge">
            <div class="ticket-badge-card">
                <div class="ticket-header">TICKET SIZE</div>
                <div class="ticket-size-main">{{ $service['ticket_size'] }}</div>
                <div class="ticket-flourish">
                    <span class="line"></span>
                    <span class="gem">♦</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detail Content Section -->
<section class="section-padding">
    <div class="container">
        <div class="service-detail-layout">
            <!-- Main Specifications Column -->
            <div class="detail-main-col">
                <div class="gold-box-frame">
                    <!-- Luxury Golden Doodle Art Visual Header -->
                    <div class="detail-hero-media mb-4">
                        <img src="assets/images/services/{{ $service['id'] }}-doodle.jpg" alt="{{ $service['title'] }} - Luxury Doodle Art" class="detail-media-img" loading="lazy">
                        <div class="detail-media-overlay"></div>
                    </div>

                    <div class="section-header-ornate">
                        <div class="gold-pill-tag">OFFICIAL BROCHURE COPY</div>
                        <h2 class="section-heading">OVERVIEW & HIGHLIGHTS</h2>
                    </div>

                    <p class="service-detail-desc">{{ $service['short_desc'] }}</p>

                    @if(isset($service['slogan']))
                        <div class="service-slogan-strip mt-3 mb-4">
                            <span class="quote-txt">“{{ $service['slogan'] }}”</span>
                        </div>
                    @endif

                    <!-- Key Points -->
                    @if(isset($service['key_points']))
                        <h3 class="detail-subhead">KEY ADVANTAGES & PARAMETERS</h3>
                        <div class="points-detailed-list">
                            @foreach($service['key_points'] as $kp)
                                <div class="point-item-card">
                                    <div class="pt-icon">✓</div>
                                    <div class="pt-content">
                                        <h4 class="pt-title">{{ $kp['title'] }}</h4>
                                        <p class="pt-desc">{{ $kp['desc'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Features Grid -->
                    @if(isset($service['features_grid']))
                        <h3 class="detail-subhead">FLEXIBLE FACILITY FEATURES</h3>
                        <div class="features-mini-grid">
                            @foreach($service['features_grid'] as $fg)
                                <div class="feat-pill">
                                    <span class="feat-name">{{ $fg['title'] }}</span>
                                    <span class="feat-sub">{{ $fg['desc'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Purposes -->
                    @if(isset($service['purposes']))
                        <h3 class="detail-subhead">PURPOSE — WHATEVER IT TAKES, WE FINANCE</h3>
                        <div class="purposes-pills-row">
                            @foreach($service['purposes'] as $purp)
                                <div class="purpose-item">
                                    <span class="p-title">{{ $purp['title'] }}</span>
                                    <span class="p-desc">{{ $purp['desc'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Empowering Builder Visions -->
                    @if(isset($service['visions']))
                        <h3 class="detail-subhead">FINANCE FOR EVERY VISION</h3>
                        <div class="visions-grid-3">
                            @foreach($service['visions'] as $vis)
                                <div class="vision-card-sm">
                                    <h4 class="v-sm-title">{{ $vis['title'] }}</h4>
                                    <p class="v-sm-desc">{{ $vis['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Special Feature: VP Valuation & Project Report -->
                    @if(isset($service['special_feature']))
                        <div class="special-vp-card mt-4">
                            <div class="vp-badge">{{ $service['special_feature']['badge'] }}</div>
                            <div class="vp-content">
                                <h4 class="vp-title">{{ $service['special_feature']['title'] }}</h4>
                                <p class="vp-desc">{{ $service['special_feature']['desc'] }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Sub Sectors: Cold Storage, Warehouse, Dairy Farm -->
                    @if(isset($service['sub_sectors']))
                        <div class="verticals-showcase-header mt-4">
                            <div class="gold-pill-tag"><i class="fa-solid fa-layer-group"></i> SECTOR-SPECIFIC FINANCING</div>
                            <h3 class="detail-subhead mb-1">SPECIALIZED INDUSTRY VERTICALS</h3>
                            <p class="detail-subhead-caption">Dedicated high-ticket funding solutions with turnkey coverage across land acquisition, infrastructure setup, and machinery.</p>
                        </div>

                        <div class="verticals-expanded-stack">
                            @foreach($service['sub_sectors'] as $sub)
                                <div class="expanded-vertical-card">
                                    @if(isset($sub['banner_img']))
                                        <div class="vertical-card-banner">
                                            <img src="{{ $sub['banner_img'] }}" alt="{{ $sub['title'] }} - Official Brochure Overview" class="vertical-banner-img" loading="lazy">
                                            <div class="vertical-banner-badge">
                                                <i class="fa-solid {{ $sub['icon'] ?? 'fa-building' }}"></i> {{ $sub['title'] }}
                                            </div>
                                        </div>
                                    @endif

                                    <div class="vertical-card-body">
                                        <div class="vertical-header-row">
                                            <div class="v-title-wrap">
                                                <div class="v-icon-badge">
                                                    <i class="fa-solid {{ $sub['icon'] ?? 'fa-building' }}"></i>
                                                </div>
                                                <div>
                                                    <h4 class="v-main-title">{{ $sub['title'] }}</h4>
                                                    <span class="v-sub-tagline"><em>{{ $sub['tagline'] }}</em></span>
                                                </div>
                                            </div>
                                            <div class="v-ticket-badge">
                                                <span class="v-pill-txt"><i class="fa-solid fa-shield-halved"></i> 1 CR TO 1000 CR</span>
                                            </div>
                                        </div>

                                        <div class="vertical-features-row">
                                            @foreach($sub['features'] as $fIndex => $sf)
                                                <div class="v-feat-item">
                                                    <span class="vf-num">0{{ $fIndex + 1 }}</span>
                                                    <span class="vf-text">{{ $sf }}</span>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="vertical-finance-strip">
                                            <span class="vfs-label"><i class="fa-solid fa-coins"></i> We Finance:</span>
                                            <div class="vfs-tags">
                                                @foreach($sub['we_finance'] as $wf)
                                                    <span class="vfs-tag"><i class="fa-solid fa-check"></i> {{ $wf }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Working Capital Services -->
                    @if(isset($service['services']))
                        <h3 class="detail-subhead">WORKING CAPITAL FACILITIES</h3>
                        <div class="wc-services-grid">
                            @foreach($service['services'] as $wcs)
                                <div class="wc-item">
                                    <span class="wc-title">{{ $wcs['title'] }}</span>
                                    <span class="wc-desc">{{ $wcs['desc'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Why Points / Trust Points -->
                    @if(isset($service['why_points']))
                        <h3 class="detail-subhead">WHY CHOOSE LIQULOFI?</h3>
                        <ul class="why-bullet-list">
                            @foreach($service['why_points'] as $wp)
                                <li>
                                    <span class="check-icon">✓</span>
                                    <span>{{ $wp }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>

            <!-- Sticky Sidebar Column -->
            <div class="detail-sidebar-col">
                <div class="sticky-detail-sidebar">
                    <div class="gold-box-frame sidebar-card">
                        <div class="sidebar-header">
                            <span class="s-tag"><i class="fa-solid fa-bolt"></i> EXECUTIVE DESK</span>
                            <h3 class="s-title">STRUCTURE THIS DEAL</h3>
                        </div>

                        <div class="sidebar-specs">
                            <div class="spec-line">
                                <span class="lbl">Funding Solution:</span>
                                <span class="val">{{ $service['title'] }}</span>
                            </div>
                            <div class="spec-line">
                                <span class="lbl">Ticket Sizing:</span>
                                <span class="val highlight-gold">{{ $service['ticket_size'] }}</span>
                            </div>
                            <div class="spec-line">
                                <span class="lbl">Coverage:</span>
                                <span class="val">PAN India</span>
                            </div>
                            <div class="spec-line">
                                <span class="lbl">Evaluation:</span>
                                <span class="val">Direct Director Review</span>
                            </div>
                        </div>

                        <div class="sidebar-actions">
                            <a href="https://wa.me/918780181897?text=Hello%20Liqulofi%20Team,%20I%20want%20to%20structure%20{{ urlencode($service['title']) }}%20({{ urlencode($service['ticket_size']) }})." 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="btn-gold btn-block">
                                <i class="fa-brands fa-whatsapp"></i> WhatsApp Director Desk
                            </a>
                            <a href="assets/docs/Liqulofi_Private_Limited.pdf" download="Liqulofi_Private_Limited_Brochure.pdf" class="btn-outline-gold btn-block mt-2">
                                <i class="fa-solid fa-download"></i> Download Brochure (PDF)
                            </a>
                        </div>

                        <div class="sidebar-directors-mini">
                            <span class="s-dir-title">Direct Director Access:</span>
                            <div class="s-dir-list">
                                @foreach($company['directors'] ?? [] as $dir)
                                    <a href="tel:{{ $dir['raw_phone'] }}" class="s-dir-item">
                                        <span class="d-n">{{ $dir['name'] }}</span>
                                        <span class="d-p">{{ $dir['phone'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Navigation to other services -->
                    <div class="other-services-nav-card mt-4">
                        <h4 class="other-srv-heading">EXPLORE OTHER PORTFOLIOS</h4>
                        <ul class="other-srv-list">
                            @foreach($services as $sItem)
                                @if($sItem['id'] !== $service['id'])
                                    <li>
                                        <a href="index.php?page=service&id={{ $sItem['id'] }}">
                                            <span>{{ $sItem['title'] }}</span>
                                            <span class="badge">{{ $sItem['ticket_size'] }}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explore Adjacent Financing Solutions -->
        <div class="adjacent-solutions-deck mt-5">
            <div class="section-header-ornate text-center">
                <div class="gold-pill-tag">RELATED PORTFOLIOS</div>
                <h3 class="section-heading">EXPLORE ADJACENT DEBT STRUCTURES</h3>
                <div class="gold-divider-center">
                    <span class="line"></span>
                    <span class="diamond">♦</span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="adjacent-cards-grid">
                @php
                    $otherSrvs = array_values(array_filter($services, function($s) use ($service) {
                        return $s['id'] !== $service['id'];
                    }));
                    $selectedAdjacents = array_slice($otherSrvs, 0, 3);
                @endphp
                @foreach($selectedAdjacents as $adj)
                    <div class="adjacent-card">
                        <div class="adj-thumb-wrap">
                            <img src="assets/images/services/{{ $adj['id'] }}-doodle.jpg" alt="{{ $adj['title'] }}" class="adj-thumb-img" loading="lazy">
                            <span class="adj-ticket-tag">{{ $adj['ticket_size'] }}</span>
                        </div>
                        <div class="adj-body">
                            <span class="adj-cat">{{ $adj['category'] }}</span>
                            <h4 class="adj-title">{{ $adj['title'] }}</h4>
                            <p class="adj-desc">{{ $adj['short_desc'] }}</p>
                            <a href="index.php?page=service&id={{ $adj['id'] }}" class="btn-ghost-gold btn-sm">
                                View Solution Specs &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Section -->
<section class="section-padding bg-navy-alt">
    <div class="container">
        @include('components.process-flow', ['steps' => $process_steps])
    </div>
</section>

@endsection


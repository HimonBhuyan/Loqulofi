@extends('layouts.app')

@section('title', 'About Us & Vision | LIQULOFI PRIVATE LIMITED - Capital Beyond Limits')

@section('content')

<!-- Luxury Gold Breadcrumb Navigation -->
@include('components.breadcrumbs', [
    'items' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'About Us']
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

@endsection

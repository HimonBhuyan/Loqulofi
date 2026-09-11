@extends('layouts.app')

@section('title', 'Directors & Corporate Contact | LIQULOFI PRIVATE LIMITED')

@section('content')

<!-- Luxury Gold Breadcrumb Navigation -->
@include('components.breadcrumbs', [
    'items' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Leadership & Corporate Connect']
    ]
])

<!-- Page Hero Header -->
<section class="page-hero-header">
    <div class="container text-center">
        <div class="gold-pill-tag">EXECUTIVE CONNECT</div>
        <h1 class="page-hero-title">CONTACT & LEADERSHIP</h1>
        <div class="gold-divider-center">
            <span class="line"></span>
            <span class="diamond">♦</span>
            <span class="line"></span>
        </div>
        <p class="page-hero-desc">Direct Access to Decision Makers • Offices in Gujarat & Madhya Pradesh • Pan India Presence</p>
    </div>
</section>

<!-- Directors & Form Section -->
<section class="section-padding">
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
                        <span class="corp-lbl">OFFICE ADDRESS</span>
                        <span class="corp-val">{{ $company['address'] ?? 'Office No. 203, Scheme No. 54, Dhan Trident, Vijay Nagar, Indore, Madhya Pradesh' }}</span>
                        <span class="corp-sub">Regional Hubs: Gujarat | Madhya Pradesh (Operating Across All States PAN INDIA)</span>
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
                        <span class="corp-lbl">OFFICIAL EMAIL</span>
                        <a href="mailto:{{ $company['email'] }}" class="corp-val link-gold">{{ $company['email'] }}</a>
                        <span class="corp-sub">Fast response within 24 business hours</span>
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
    </div>
</section>

@endsection

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

        <!-- Two Column Contact Details + Inquiry Form -->
        <div class="contact-two-col-grid">
            <!-- Left Info Column -->
            <div class="contact-info-col gold-box-frame">
                <div class="section-header-ornate">
                    <div class="gold-pill-tag">HEADQUARTERS & HUBS</div>
                    <h3 class="section-heading">CORPORATE PROFILE</h3>
                </div>

                <div class="corporate-details-list">
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

                <!-- Brochure Download Box -->
                <div class="contact-brochure-card">
                    <div class="cb-icon">📄</div>
                    <div class="cb-text">
                        <h4 class="cb-title">DOWNLOAD COMPLETE BROCHURE</h4>
                        <p class="cb-desc">Get the complete 16-page official catalog PDF in high resolution.</p>
                    </div>
                    <a href="assets/docs/Liqulofi_Private_Limited.pdf" download class="btn-gold-sm">Download PDF</a>
                </div>
            </div>

            <!-- Right Inquiry Form Column -->
            <div class="contact-form-col gold-box-frame">
                <div class="section-header-ornate">
                    <div class="gold-pill-tag">FAST EVALUATION</div>
                    <h3 class="section-heading">REQUEST PROPOSAL</h3>
                    <p class="section-subtitle">Submit your funding requirement for direct director review.</p>
                </div>

                <form action="index.php?action=inquire" method="POST" class="page-inquiry-form" id="page-contact-form">
                    <div class="form-row">
                        <div class="form-group col-half">
                            <label for="contact-name">Full Name / Business Name <span class="req">*</span></label>
                            <input type="text" id="contact-name" name="name" class="form-control" placeholder="e.g. Rajiv Mehta / Apex Builders" required>
                        </div>
                        <div class="form-group col-half">
                            <label for="contact-phone">Phone / Mobile <span class="req">*</span></label>
                            <input type="tel" id="contact-phone" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-half">
                            <label for="contact-email">Email Address <span class="req">*</span></label>
                            <input type="email" id="contact-email" name="email" class="form-control" placeholder="rajiv@company.com" required>
                        </div>
                        <div class="form-group col-half">
                            <label for="contact-location">City & State <span class="req">*</span></label>
                            <input type="text" id="contact-location" name="location" class="form-control" placeholder="Ahmedabad, Bhopal, Mumbai, etc." required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-half">
                            <label for="contact-service">Funding Category <span class="req">*</span></label>
                            <div class="select-wrapper">
                                <select id="contact-service" name="service_id" class="form-control" required>
                                    <option value="" disabled selected>Select Funding Category</option>
                                    @foreach($services as $srv)
                                        <option value="{{ $srv['id'] }}">{{ $srv['title'] }} ({{ $srv['ticket_size'] }})</option>
                                    @endforeach
                                    <option value="valuation-project-report">Valuation & Project Report (VP Services)</option>
                                    <option value="other-tailored-funding">Other Structured Debt / Customized</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-half">
                            <label for="contact-ticket">Ticket Size Requirement <span class="req">*</span></label>
                            <div class="select-wrapper">
                                <select id="contact-ticket" name="ticket_size" class="form-control" required>
                                    <option value="" disabled selected>Select Ticket Size</option>
                                    <option value="₹1 Cr - ₹5 Cr">₹1 Cr to ₹5 Cr</option>
                                    <option value="₹5 Cr - ₹25 Cr">₹5 Cr to ₹25 Cr</option>
                                    <option value="₹25 Cr - ₹100 Cr">₹25 Cr to ₹100 Cr</option>
                                    <option value="₹100 Cr - ₹500 Cr">₹100 Cr to ₹500 Cr</option>
                                    <option value="₹500 Cr - ₹1000 Cr">₹500 Cr to ₹1,000 Cr</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact-message">Project Brief / Requirement Details</label>
                        <textarea id="contact-message" name="message" class="form-control" rows="4" placeholder="Mention project type, security/collateral, current lender if takeover, or any specific structuring requirements..."></textarea>
                    </div>

                    <button type="submit" class="btn-gold btn-block btn-lg mt-3">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Submit Requirement For Director Review
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

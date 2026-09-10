@php
    $companyData = $company ?? [];
    $servicesList = $services ?? [];
@endphp

<!-- Directors Global Showcase Banner -->
<section class="directors-showcase-section" id="directors">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <div class="gold-ornament-line">
                <span class="line"></span>
                <span class="diamond">♦</span>
                <span class="title-text">DIRECTORS</span>
                <span class="diamond">♦</span>
                <span class="line"></span>
            </div>
            <p class="section-subtitle">Executive Leadership Team at Liqulofi Private Limited</p>
        </div>

        <div class="directors-grid">
            @foreach($companyData['directors'] ?? [] as $director)
                @include('components.director-card', ['director' => $director])
            @endforeach
        </div>
    </div>
</section>

<!-- Main Royal Footer -->
<footer class="site-footer">
    <!-- Executive Top Liner Bar in Footer -->
    <div class="footer-top-liner-bar">
        <div class="container footer-liner-inner">
            <div class="liner-left-info">
                <span class="liner-badge"><span class="pulse-dot"></span> PAN INDIA REACH</span>
                <span class="liner-divider">|</span>
                <span class="liner-offices">Offices: <strong>{{ $companyData['offices'] ?? 'Gujarat | Madhya Pradesh' }}</strong></span>
                <span class="liner-divider">|</span>
                <span class="liner-ticket-highlight">Ticket Size: <strong>{{ $companyData['ticket_size_range'] ?? '1 CR to 1000 CR' }}</strong></span>
            </div>
            <div class="liner-right-contact">
                <span class="liner-dir-label">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    Directors Contact:
                </span>
                <div class="liner-directors-links">
                    <a href="tel:+918780181897" title="Call Ritu Rami">Ritu: +91 8780181897</a>
                    <span class="dot">•</span>
                    <a href="tel:+916232046473" title="Call Abhishek Bhatnagar">Abhishek: +91 62320 46473</a>
                    <span class="dot">•</span>
                    <a href="tel:+919232978262" title="Call Saket Dubey">Saket: +91 92329 78262</a>
                </div>
                <a href="mailto:{{ $companyData['email'] ?? 'finance@liqulofipvtltd.com' }}" class="liner-email-link">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    {{ $companyData['email'] ?? 'finance@liqulofipvtltd.com' }}
                </a>
            </div>
        </div>
    </div>
    
    <div class="container footer-main-content">
        <div class="footer-grid">
            <!-- Col 1: Brand & Overview -->
            <div class="footer-col footer-col-brand">
                <div class="footer-brand-header">
                    @include('components.crest', ['size' => 'footer'])
                    <div class="brand-text-block">
                        <span class="brand-name">LIQULOFI</span>
                        <span class="brand-sub">PRIVATE LIMITED</span>
                        <span class="brand-tagline">CAPITAL BEYOND LIMITS</span>
                    </div>
                </div>
                <p class="footer-bio">
                    Trusted and dynamic financial solutions provider, empowering individuals, businesses, and institutions with reliable and customized funding solutions from <strong>₹1 CR to ₹1,000 CR</strong> across India.
                </p>
                
                <div class="footer-key-specs">
                    <div class="spec-row">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Offices: <strong>{{ $companyData['offices'] ?? 'Gujarat | Madhya Pradesh' }}</strong></span>
                    </div>
                    <div class="spec-row">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                        <span>Coverage: <strong>{{ $companyData['coverage'] ?? 'Working PAN INDIA' }}</strong></span>
                    </div>
                    <div class="spec-row">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                        <span>Ticket Size: <strong>{{ $companyData['ticket_size_range'] ?? '1 CR to 1000 CR' }}</strong></span>
                    </div>
                </div>
            </div>

            <!-- Col 2: Funding Portfolios -->
            <div class="footer-col">
                <h4 class="footer-heading">FUNDING PORTFOLIOS</h4>
                <ul class="footer-links">
                    <li><a href="index.php?page=service&id=prime-home-loans">Prime Home Loans (5 Cr)</a></li>
                    <li><a href="index.php?page=service&id=mortgage-loans">Mortgage Loans (1-500 Cr)</a></li>
                    <li><a href="index.php?page=service&id=builder-project-finance">Builder Project Finance</a></li>
                    <li><a href="index.php?page=service&id=residential-property-funding">Residential Property Funding</a></li>
                    <li><a href="index.php?page=service&id=commercial-project-funding">Commercial Project Funding</a></li>
                    <li><a href="index.php?page=service&id=industrial-property-funding">Industrial Property Funding</a></li>
                    <li><a href="index.php?page=service&id=hotel-resort-property-funding">Hotel & Resort Funding</a></li>
                    <li><a href="index.php?page=service&id=hospital-property-funding">Hospital Property Funding</a></li>
                </ul>
            </div>

            <!-- Col 3: Specialized & Tools -->
            <div class="footer-col">
                <h4 class="footer-heading">SOLUTIONS & TOOLS</h4>
                <ul class="footer-links">
                    <li><a href="index.php?page=service&id=working-capital-solutions">Working Capital (CC/OD)</a></li>
                    <li><a href="index.php?page=service&id=smart-funding-solutions">Cold Storage Funding</a></li>
                    <li><a href="index.php?page=service&id=smart-funding-solutions">Warehouse Logistics Funding</a></li>
                    <li><a href="index.php?page=service&id=smart-funding-solutions">Dairy Farm Infrastructure</a></li>
                    <li><a href="index.php?page=service&id=mortgage-loans">Valuation & Project Report (VP)</a></li>
                    <li><a href="index.php?page=calculator">Loan & EMI Calculator</a></li>
                    <li><a href="index.php?page=partners">Bank & NBFC Network</a></li>
                    <li><a href="assets/docs/Liqulofi_Private_Limited.pdf" download>Download Official Brochure</a></li>
                </ul>
            </div>

            <!-- Col 4: Corporate Contact & Brochure -->
            <div class="footer-col footer-col-contact">
                <h4 class="footer-heading">CORPORATE CONNECT</h4>
                <div class="footer-contact-details">
                    <div class="contact-item">
                        <span class="c-label">EMAIL ID</span>
                        <a href="mailto:{{ $companyData['email'] ?? 'finance@liqulofipvtltd.com' }}" class="c-val">{{ $companyData['email'] ?? 'finance@liqulofipvtltd.com' }}</a>
                    </div>
                    <div class="contact-item">
                        <span class="c-label">OFFICIAL WEBSITE</span>
                        <a href="https://{{ $companyData['website'] ?? 'www.liqulofi.com' }}" target="_blank" class="c-val">{{ $companyData['website'] ?? 'www.liqulofi.com' }}</a>
                    </div>
                    <div class="contact-item">
                        <span class="c-label">HEADQUARTERS & HUBS</span>
                        <span class="c-val text-white">{{ $companyData['address'] ?? 'Office No. 203, Scheme No. 54, Dhan Trident, Vijay Nagar, Indore, Madhya Pradesh' }}</span>
                        <span class="c-sub" style="font-size: 0.78rem; color: #94A3B8; margin-top: 3px; display: block;">Regional Hubs: Gujarat | Madhya Pradesh (Serving PAN INDIA)</span>
                    </div>
                </div>

                <div class="footer-brochure-download-card">
                    <div class="card-icon">📄</div>
                    <div class="card-info">
                        <span class="title">Official PDF Brochure</span>
                        <span class="sub">16-Page High-Ticket Profile</span>
                    </div>
                    <a href="assets/docs/Liqulofi_Private_Limited.pdf" download class="btn-download-sm" title="Download Brochure">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Ornate Divider Ribbon -->
        <div class="footer-ribbon-divider">
            <div class="ornate-line">
                <span class="line"></span>
                <span class="diamond">♦</span>
                <span class="motto">THANK YOU FOR YOUR TIME AND TRUST</span>
                <span class="diamond">♦</span>
                <span class="line"></span>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="footer-bottom-bar">
            <div class="copyright-text">
                &copy; {{ date('Y') }} <strong>LIQULOFI PRIVATE LIMITED</strong>. All Rights Reserved. Capital Beyond Limits.
            </div>
            <div class="bottom-links">
                <a href="index.php?page=about">About Company</a>
                <span class="dot">•</span>
                <a href="index.php?page=services">Funding Portfolios</a>
                <span class="dot">•</span>
                <a href="index.php?page=partners">Banking Tie-Ups</a>
                <span class="dot">•</span>
                <a href="index.php?page=contact">Contact Leadership</a>
            </div>
        </div>
    </div>
</footer>

<!-- WhatsApp Floating CTA Button -->
<a href="https://wa.me/916232046473?text=Hello%20Liqulofi%20Team,%20I%20am%20interested%20in%20high-ticket%20funding%20solutions." target="_blank" rel="noopener noreferrer" class="whatsapp-float-btn" title="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.456 5.711 1.456h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
    <span class="whatsapp-label">Quick Connect</span>
</a>

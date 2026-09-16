@php
    $companyData = $company ?? [];
    $quickConnectNum = '8889280848';
    $quickConnectDisplay = '+91 88892 80848';
    $quickConnectRaw = '918889280848';
@endphp

<!-- Luxury Quick Connect WhatsApp Widget -->
<div class="whatsapp-concierge-container" id="whatsapp-concierge-widget">
    <!-- Backdrop Overlay (Closes drawer on outside tap) -->
    <div class="whatsapp-concierge-backdrop" id="whatsapp-concierge-backdrop" aria-hidden="true"></div>

    <!-- Expandable Luxury Concierge Drawer Card -->
    <div class="whatsapp-concierge-drawer" id="whatsapp-concierge-drawer" role="dialog" aria-labelledby="concierge-title" aria-hidden="true">
        <!-- Header Ribbon -->
        <div class="wc-drawer-header">
            <div class="wc-header-brand">
                <div class="wc-crest-gem">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <div class="wc-header-titles">
                    <span class="wc-super-tag"><span class="wc-live-pulse-dot"></span> QUICK CONNECT</span>
                    <h3 class="wc-title" id="concierge-title">Quick Connect Desk</h3>
                </div>
            </div>
            <button type="button" class="wc-close-btn" id="wc-drawer-close-btn" aria-label="Close Concierge Drawer">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="wc-drawer-intro">
            <p>Connect instantly with our executive desk for high-ticket funding solutions (<strong>₹1 CR to ₹1000 CR</strong>).</p>
        </div>

        <!-- Single Dedicated Quick Connect Link -->
        <div class="wc-directors-list">
            <a href="https://wa.me/{{ $quickConnectRaw }}?text={{ urlencode('Hello Liqulofi Team, I am reaching out via Quick Connect regarding a funding requirement (₹1 Cr - ₹1000 Cr). Please guide me on next steps.') }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="wc-director-card-link"
               title="Direct WhatsApp Quick Connect ({{ $quickConnectDisplay }})">
                <div class="wc-dir-avatar-ring">
                    <div class="wc-dir-avatar-fallback" style="display:flex; background: linear-gradient(135deg, #10B981, #047857); color: #FFFFFF; font-size: 1.25rem;">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <span class="wc-status-indicator" title="Available Online Now"></span>
                </div>
                
                <div class="wc-dir-content">
                    <div class="wc-dir-name-row">
                        <span class="wc-dir-name">Quick Connect Hotline</span>
                        <span class="wc-dir-designation-badge" style="background: rgba(34, 197, 94, 0.15); color: #15803D; border-color: rgba(34, 197, 94, 0.3);">Instant WhatsApp</span>
                    </div>
                    <span class="wc-dir-role-tag">Dedicated Quick Link Desk</span>
                    <div class="wc-dir-bottom-row">
                        <span class="wc-dir-phone-num"><i class="fa-solid fa-phone"></i> {{ $quickConnectDisplay }}</span>
                        <span class="wc-chat-cta">Chat Now <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                    </div>
                </div>
            </a>
        </div>

        <!-- Direct Action Buttons Row -->
        <div style="display: flex; gap: 0.6rem; padding: 0.75rem 1.25rem 0.25rem;">
            <a href="https://wa.me/{{ $quickConnectRaw }}?text={{ urlencode('Hello Liqulofi Team, I am reaching out via Quick Connect regarding a funding requirement (₹1 Cr - ₹1000 Cr). Please guide me on next steps.') }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn-gold btn-block" 
               style="display: inline-flex; align-items: center; justify-content: center; gap: 0.4rem; padding: 0.65rem 1rem; font-size: 0.88rem; font-weight: 700; border-radius: 8px; flex: 1;">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp Chat
            </a>
            <a href="tel:+91{{ $quickConnectNum }}" 
               class="btn-outline-gold" 
               style="display: inline-flex; align-items: center; justify-content: center; gap: 0.4rem; padding: 0.65rem 1rem; font-size: 0.88rem; font-weight: 700; border-radius: 8px;">
                <i class="fa-solid fa-phone"></i> Call
            </a>
        </div>

        <!-- Drawer Footer Trust & Alternate Route -->
        <div class="wc-drawer-footer">
            <div class="wc-trust-features">
                <span><i class="fa-solid fa-shield-halved"></i> 100% Confidential</span>
                <span class="wc-dot-sep">•</span>
                <span><i class="fa-solid fa-bolt"></i> Fast 7-14 Day Sanctions</span>
            </div>
            <div class="wc-email-fallback">
                <span>Official Email:</span>
                <a href="mailto:{{ $companyData['email'] ?? 'finance@liqulofipvtltd.com' }}">{{ $companyData['email'] ?? 'finance@liqulofipvtltd.com' }}</a>
            </div>
        </div>
    </div>

    <!-- Floating Trigger Button -->
    <button type="button" 
            class="whatsapp-concierge-trigger" 
            id="whatsapp-concierge-trigger" 
            aria-expanded="false" 
            aria-controls="whatsapp-concierge-drawer" 
            aria-label="Toggle Quick Connect Desk">
        <div class="wc-trigger-icon-box">
            <i class="fa-brands fa-whatsapp wc-icon-wa"></i>
            <i class="fa-solid fa-xmark wc-icon-close"></i>
        </div>
        <div class="wc-trigger-text">
            <span class="wc-trigger-main">Quick Connect</span>
            <span class="wc-trigger-sub"><span class="wc-live-dot"></span> {{ $quickConnectDisplay }}</span>
        </div>
    </button>
</div>

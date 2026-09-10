@php
    $companyData = $company ?? [];
    $directorsList = [
        [
            'name' => 'Ritu Rami',
            'designation' => 'Director',
            'phone' => '+91 8780181897',
            'raw_phone' => '918780181897',
            'role_tag' => 'Corporate Debt & Strategic Finance',
            'image' => 'assets/images/directors/ritu-rami.jpg',
            'initials' => 'RR'
        ],
        [
            'name' => 'Abhishek Bhatnagar',
            'designation' => 'Director',
            'phone' => '+91 62320 46473',
            'raw_phone' => '916232046473',
            'role_tag' => 'Real Estate & Project Syndication',
            'image' => 'assets/images/directors/abhishek-bhatnagar.jpg',
            'initials' => 'AB'
        ],
        [
            'name' => 'Saket Dubey',
            'designation' => 'Director',
            'phone' => '+91 92329 78262',
            'raw_phone' => '919232978262',
            'role_tag' => 'Working Capital & Institutional Tie-ups',
            'image' => 'assets/images/directors/saket-dubey.jpg',
            'initials' => 'SD'
        ]
    ];
@endphp

<!-- Luxury Multi-Director WhatsApp Concierge Widget -->
<div class="whatsapp-concierge-container" id="whatsapp-concierge-widget">
    <!-- Backdrop Overlay (Closes drawer on outside tap) -->
    <div class="whatsapp-concierge-backdrop" id="whatsapp-concierge-backdrop" aria-hidden="true"></div>

    <!-- Expandable Luxury Concierge Drawer Card -->
    <div class="whatsapp-concierge-drawer" id="whatsapp-concierge-drawer" role="dialog" aria-labelledby="concierge-title" aria-hidden="true">
        <!-- Header Ribbon -->
        <div class="wc-drawer-header">
            <div class="wc-header-brand">
                <div class="wc-crest-gem">
                    <i class="fa-solid fa-crown"></i>
                </div>
                <div class="wc-header-titles">
                    <span class="wc-super-tag"><span class="wc-live-pulse-dot"></span> DIRECTORS DESK</span>
                    <h3 class="wc-title" id="concierge-title">WhatsApp Concierge</h3>
                </div>
            </div>
            <button type="button" class="wc-close-btn" id="wc-drawer-close-btn" aria-label="Close Concierge Drawer">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="wc-drawer-intro">
            <p>Select a Director below for immediate evaluation of your funding requirement (<strong>₹1 CR to ₹1000 CR</strong>).</p>
        </div>

        <!-- 3 Directors List -->
        <div class="wc-directors-list">
            @foreach($directorsList as $dir)
                <a href="https://wa.me/{{ $dir['raw_phone'] }}?text={{ urlencode('Hello ' . $dir['name'] . ' Ji, I am reaching out via the official Liqulofi portal regarding a high-ticket funding requirement (₹1 Cr - ₹1000 Cr). Please guide me on next steps.') }}" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="wc-director-card-link"
                   title="Direct WhatsApp chat with {{ $dir['name'] }} (Director)">
                    <div class="wc-dir-avatar-ring">
                        <img src="{{ $dir['image'] }}" alt="{{ $dir['name'] }}" class="wc-dir-avatar-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <span class="wc-dir-avatar-fallback" style="display:none;">{{ $dir['initials'] }}</span>
                        <span class="wc-status-indicator" title="Available for Evaluation"></span>
                    </div>
                    
                    <div class="wc-dir-content">
                        <div class="wc-dir-name-row">
                            <span class="wc-dir-name">{{ $dir['name'] }}</span>
                            <span class="wc-dir-designation-badge">{{ $dir['designation'] }}</span>
                        </div>
                        <span class="wc-dir-role-tag">{{ $dir['role_tag'] }}</span>
                        <div class="wc-dir-bottom-row">
                            <span class="wc-dir-phone-num"><i class="fa-brands fa-whatsapp"></i> {{ $dir['phone'] }}</span>
                            <span class="wc-chat-cta">Chat <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                        </div>
                    </div>
                </a>
            @endforeach
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
            aria-label="Toggle Multi-Director WhatsApp Concierge">
        <div class="wc-trigger-icon-box">
            <i class="fa-brands fa-whatsapp wc-icon-wa"></i>
            <i class="fa-solid fa-xmark wc-icon-close"></i>
        </div>
        <div class="wc-trigger-text">
            <span class="wc-trigger-main">Quick Connect</span>
            <span class="wc-trigger-sub"><span class="wc-live-dot"></span> 3 Directors Online</span>
        </div>
        <span class="wc-trigger-badge" title="3 Directors Available">3</span>
    </button>
</div>

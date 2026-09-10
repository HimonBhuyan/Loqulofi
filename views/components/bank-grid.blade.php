@php
    $banksData = $banks ?? [];
@endphp

<div class="bank-network-section">
    <div class="bank-network-header">
        <div class="gold-badge-banner">CONNECTING ALL BANKS</div>
        <h3 class="bank-subheading">ALL BANKS TIE UP</h3>
        <p class="bank-lead-text">{{ $banksData['lead'] ?? 'We truly appreciate your time and the opportunity to connect with you. TOGETHER, WE GROW.' }}</p>
        <div class="bank-quote-box">
            <span class="quote-mark">“</span>
            <span class="quote-text">{{ $banksData['slogan'] ?? 'YOUR TRUST. OUR COMMITMENT. STRONGER RELATIONSHIPS. ENDLESS POSSIBILITIES.' }}</span>
            <span class="quote-mark">”</span>
        </div>
    </div>

    <!-- Category Columns Grid -->
    <div class="bank-categories-grid">
        @if(isset($banksData['categories']))
            @foreach($banksData['categories'] as $cat)
                <div class="bank-category-card">
                    <div class="category-card-header">
                        <div class="category-icon">
                            @if($cat['type'] === 'Government')
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 21h18M3 10h18M5 10v11M9 10v11M13 10v11M17 10v11M19 10v11M4 10l8-6 8 6"></path>
                                </svg>
                            @elseif($cat['type'] === 'Private')
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                                    <line x1="9" y1="22" x2="9" y2="22.01"></line>
                                    <line x1="15" y1="22" x2="15" y2="22.01"></line>
                                    <line x1="9" y1="6" x2="9" y2="6.01"></line>
                                    <line x1="15" y1="6" x2="15" y2="6.01"></line>
                                    <line x1="9" y1="10" x2="9" y2="10.01"></line>
                                    <line x1="15" y1="10" x2="15" y2="10.01"></line>
                                    <line x1="9" y1="14" x2="9" y2="14.01"></line>
                                    <line x1="15" y1="14" x2="15" y2="14.01"></line>
                                    <line x1="9" y1="18" x2="9" y2="18.01"></line>
                                    <line x1="15" y1="18" x2="15" y2="18.01"></line>
                                </svg>
                            @else
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
                                    <line x1="12" y1="6" x2="12" y2="8"></line>
                                    <line x1="12" y1="16" x2="12" y2="18"></line>
                                </svg>
                            @endif
                        </div>
                        <h4 class="category-name">{{ $cat['name'] }}</h4>
                    </div>

                    <div class="bank-items-list">
                        @foreach($cat['banks'] as $bank)
                            <div class="bank-pill-item">
                                <div class="bank-logo-box">
                                    @if(!empty($bank['logo']))
                                        <img src="{{ $bank['logo'] }}" alt="{{ $bank['name'] }} logo" class="bank-logo-img" loading="lazy">
                                    @else
                                        <div class="bank-bullet"></div>
                                    @endif
                                </div>
                                <div class="bank-item-body">
                                    <span class="bank-full-name">{{ $bank['name'] }}</span>
                                    <span class="bank-short-badge">{{ $bank['short'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <!-- 4 Bank Pillars -->
    @if(isset($banksData['pillars']))
        <div class="bank-strengths-grid">
            @foreach($banksData['pillars'] as $pillar)
                <div class="strength-card">
                    <div class="strength-icon-ring">
                        @if($pillar['title'] === 'WIDE NETWORK')
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        @elseif($pillar['title'] === 'BEST SOLUTIONS')
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="4" y1="21" x2="4" y2="14"></line>
                                <line x1="4" y1="10" x2="4" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12" y2="3"></line>
                                <line x1="20" y1="21" x2="20" y2="16"></line>
                                <line x1="20" y1="12" x2="20" y2="3"></line>
                                <line x1="1" y1="14" x2="7" y2="14"></line>
                                <line x1="9" y1="8" x2="15" y2="8"></line>
                                <line x1="17" y1="16" x2="23" y2="16"></line>
                            </svg>
                        @elseif($pillar['title'] === 'QUICK APPROVALS')
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                        @else
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                <polyline points="9 12 11 14 15 10"></polyline>
                            </svg>
                        @endif
                    </div>
                    <h5 class="strength-title">{{ $pillar['title'] }}</h5>
                    <p class="strength-desc">{{ $pillar['desc'] }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>

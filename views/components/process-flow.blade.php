@php
    $steps = $steps ?? [
        ['step' => '01', 'title' => 'UNDERSTAND', 'desc' => 'We analyze your project, business plan & funding requirement.'],
        ['step' => '02', 'title' => 'EVALUATE', 'desc' => 'In-depth assessment of project viability, cash flow & documents.'],
        ['step' => '03', 'title' => 'STRUCTURE', 'desc' => 'Customized funding structure with the best terms & flexibility.'],
        ['step' => '04', 'title' => 'APPROVE', 'desc' => 'Quick approvals with minimal documentation & transparency.'],
        ['step' => '05', 'title' => 'DISBURSE & SUPPORT', 'desc' => 'Timely disbursal & continuous support till project success.']
    ];
    $title = $title ?? 'OUR UNIQUE 5 STEP PROCESS';
@endphp

<div class="process-flow-container">
    <div class="process-header">
        <div class="gold-pill-tag">STREAMLINED EXECUTION</div>
        <h3 class="process-title">{{ $title }}</h3>
        <div class="gold-divider-center">
            <span class="line"></span>
            <span class="diamond">♦</span>
            <span class="line"></span>
        </div>
    </div>

    <div class="process-grid">
        @foreach($steps as $index => $item)
            <div class="process-step-card" data-step="{{ $item['step'] }}">
                <div class="step-badge-wrapper">
                    <div class="step-badge">{{ $item['step'] }}</div>
                    @if($index < count($steps) - 1)
                        <div class="step-connector">
                            <span class="arrow-dot"></span>
                        </div>
                    @endif
                </div>
                <div class="step-icon-box">
                    @if($item['step'] == '01')
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    @elseif($item['step'] == '02')
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M9 11l3 3L22 4"></path>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                    @elseif($item['step'] == '03')
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
                            <line x1="12" y1="6" x2="12" y2="8"></line>
                            <line x1="12" y1="16" x2="12" y2="18"></line>
                        </svg>
                    @elseif($item['step'] == '04')
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                        </svg>
                    @else
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                            <polyline points="17 6 23 6 23 12"></polyline>
                        </svg>
                    @endif
                </div>
                <h4 class="step-card-title">{{ $item['title'] }}</h4>
                <p class="step-card-desc">{{ $item['desc'] }}</p>
            </div>
        @endforeach
    </div>
</div>

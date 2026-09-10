@php
    $sizeText = $size ?? '1 CR to 1000 CR';
    $label = $label ?? 'TICKET SIZE';
    $variant = $variant ?? 'default'; // 'default', 'compact', 'hero'
@endphp

@if($variant === 'compact')
    <div class="ticket-badge-compact">
        <span class="badge-label">{{ $label }}</span>
        <span class="badge-value">{{ $sizeText }}</span>
    </div>
@elseif($variant === 'hero')
    <div class="ticket-badge-hero">
        <div class="ticket-badge-inner">
            <span class="ticket-tag">{{ $label }}</span>
            <span class="ticket-amount">{{ $sizeText }}</span>
            <div class="ticket-ornament">
                <span>—</span> <span class="diamond">♦</span> <span>—</span>
            </div>
        </div>
    </div>
@else
    <div class="ticket-badge-card">
        <div class="ticket-header">{{ $label }}</div>
        <div class="ticket-size-main">{{ $sizeText }}</div>
        <div class="ticket-flourish">
            <span class="line"></span>
            <span class="gem">♦</span>
            <span class="line"></span>
        </div>
    </div>
@endif

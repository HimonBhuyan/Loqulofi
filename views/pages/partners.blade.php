@extends('layouts.app')

@section('title', 'Bank Tie-Ups & Institutional Network | LIQULOFI PRIVATE LIMITED')

@section('content')

<!-- Luxury Gold Breadcrumb Navigation -->
@include('components.breadcrumbs', [
    'items' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Bank Tie-Ups & Institutional Network']
    ]
])

<!-- Page Hero Header -->
<section class="page-hero-header">
    <div class="container text-center">
        <div class="gold-pill-tag">BROCHURE PAGE 16</div>
        <h1 class="page-hero-title">CONNECTING ALL BANKS</h1>
        <div class="gold-divider-center">
            <span class="line"></span>
            <span class="diamond">♦</span>
            <span class="line"></span>
        </div>
        <p class="page-hero-desc">Nationwide Institutional Relationships with Leading PSU Banks, Private Banks & Top NBFCs</p>
    </div>
</section>

<!-- Bank Grid Component -->
<section class="section-padding">
    <div class="container">
        @include('components.bank-grid', ['banks' => $banks])
    </div>
</section>

<!-- CTA Strip -->
<section class="section-padding bg-navy-alt">
    <div class="container text-center">
        <div class="gold-box-frame cta-inner-box">
            <h3 class="cta-heading">LEVERAGE OUR BANKING NETWORK</h3>
            <p class="cta-sub">We structure syndication, consortium lines, term debt, and takeover proposals to get the most competitive interest rates and terms.</p>
            <div class="cta-buttons-center">
                <button type="button" class="btn-gold btn-xl open-modal-btn" data-modal="inquiry-modal">Request Banking Syndication</button>
            </div>
        </div>
    </div>
</section>

@endsection

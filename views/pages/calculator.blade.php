@extends('layouts.app')

@section('title', 'High-Ticket Loan & EMI Structuring Calculator | LIQULOFI PRIVATE LIMITED')

@section('content')

<!-- Luxury Gold Breadcrumb Navigation -->
@include('components.breadcrumbs', [
    'items' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Loan & EMI Structuring Calculator']
    ]
])

<!-- Page Hero Header -->
<section class="page-hero-header">
    <div class="container text-center">
        <div class="gold-pill-tag">FINANCIAL ENGINEERING</div>
        <h1 class="page-hero-title">LOAN & EMI CALCULATOR</h1>
        <div class="gold-divider-center">
            <span class="line"></span>
            <span class="diamond">♦</span>
            <span class="line"></span>
        </div>
        <p class="page-hero-desc">Interactive debt sizing and indicative cash flow modeling for facilities up to ₹1,000 Crore.</p>
    </div>
</section>

<!-- Calculator Section -->
<section class="section-padding">
    <div class="container">
        @include('components.calculator-widget', ['services' => $services])
    </div>
</section>

<!-- Process Section -->
<section class="section-padding bg-navy-alt">
    <div class="container">
        @include('components.process-flow', ['steps' => $process_steps])
    </div>
</section>

@endsection

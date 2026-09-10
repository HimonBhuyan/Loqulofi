@php
    $servicesList = $services ?? [];
@endphp

<div class="calculator-card" id="loan-calculator">
    <div class="calc-header">
        <div class="gold-pill-tag">FINANCIAL STRUCTURING</div>
        <h3 class="calc-title">HIGH-TICKET LOAN & EMI CALCULATOR</h3>
        <p class="calc-subtitle">Simulate debt sizing, indicative monthly interest, and repayment schedules for funding up to ₹1,000 Crore.</p>
    </div>

    <div class="calc-body-grid">
        <!-- Controls Column -->
        <div class="calc-controls">
            <!-- Loan Amount Slider -->
            <div class="calc-group">
                <div class="calc-label-row">
                    <label for="calc-amount">Loan Amount (Ticket Size)</label>
                    <span class="calc-val-display" id="calc-amount-text">₹ 25.00 Crore</span>
                </div>
                <input type="range" id="calc-amount" min="1" max="1000" step="1" value="25" class="custom-gold-slider">
                <div class="slider-scale">
                    <span>₹1 Cr</span>
                    <span>₹250 Cr</span>
                    <span>₹500 Cr</span>
                    <span>₹1,000 Cr</span>
                </div>
            </div>

            <!-- Interest Rate Slider -->
            <div class="calc-group">
                <div class="calc-label-row">
                    <label for="calc-rate">Indicative Interest Rate (% p.a.)</label>
                    <span class="calc-val-display" id="calc-rate-text">8.50 %</span>
                </div>
                <input type="range" id="calc-rate" min="6.5" max="18" step="0.25" value="8.5" class="custom-gold-slider">
                <div class="slider-scale">
                    <span>6.5%</span>
                    <span>10.0%</span>
                    <span>14.0%</span>
                    <span>18.0%</span>
                </div>
            </div>

            <!-- Tenure Slider -->
            <div class="calc-group">
                <div class="calc-label-row">
                    <label for="calc-tenure">Tenure (Years)</label>
                    <span class="calc-val-display" id="calc-tenure-text">10 Years</span>
                </div>
                <input type="range" id="calc-tenure" min="1" max="25" step="1" value="10" class="custom-gold-slider">
                <div class="slider-scale">
                    <span>1 Yr</span>
                    <span>5 Yrs</span>
                    <span>15 Yrs</span>
                    <span>25 Yrs</span>
                </div>
            </div>

            <!-- Funding Product Selector -->
            <div class="calc-group">
                <label for="calc-product-select">Target Funding Solution</label>
                <div class="select-wrapper">
                    <select id="calc-product-select" class="calc-select">
                        @foreach($servicesList as $srv)
                            <option value="{{ $srv['id'] }}" {{ $srv['id'] === 'mortgage-loans' ? 'selected' : '' }}>
                                {{ $srv['title'] }} ({{ $srv['ticket_size'] }})
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Output Summary Column -->
        <div class="calc-summary-box">
            <div class="summary-header">
                <span class="summary-badge">ESTIMATED OUTCOME</span>
                <h4 class="summary-title">INDICATIVE STRUCTURING</h4>
            </div>

            <div class="emi-result-card">
                <span class="emi-label">Estimated Monthly Payment (EMI)</span>
                <div class="emi-amount" id="calc-emi-display">₹ 31,00,000 / mo</div>
                <span class="emi-note">*Calculated on reducing balance basis</span>
            </div>

            <div class="summary-metrics-grid">
                <div class="metric-item">
                    <span class="m-label">Principal Amount</span>
                    <span class="m-val" id="calc-principal-display">₹ 25.00 Cr</span>
                </div>
                <div class="metric-item">
                    <span class="m-label">Total Interest Payable</span>
                    <span class="m-val" id="calc-total-interest">₹ 12.20 Cr</span>
                </div>
                <div class="metric-item total-highlight">
                    <span class="m-label">Total Amount Payable</span>
                    <span class="m-val" id="calc-total-payable">₹ 37.20 Cr</span>
                </div>
            </div>

                <div class="calc-action-buttons-group">
                    <button type="button" class="btn-gold btn-block open-modal-btn" data-modal="inquiry-modal" style="margin-bottom: 0.75rem;">
                        <i class="fa-solid fa-file-signature"></i> Request Term Sheet Structuring
                    </button>
                    <a href="assets/docs/Liqulofi_Private_Limited.pdf" download="Liqulofi_Private_Limited_Brochure.pdf" class="btn-outline-gold btn-block" id="calc-download-btn">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        Download Structuring Guide
                    </a>
                </div>
                <p class="calc-disclaimer">Rates and terms depend on project assessment, asset valuation, and banking underwriting parameters.</p>
            </div>
    </div>
</div>

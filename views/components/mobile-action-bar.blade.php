@php
    $companyData = $company ?? [];
    $primaryDirector = $companyData['directors'][0] ?? ['name' => 'Ritu Rami', 'phone' => '+91 8780181897', 'raw_phone' => '+918780181897'];
@endphp

<!-- Mobile Bottom Sticky Quick Action Bar (Screens <= 768px) -->
<aside class="mobile-action-bar" id="mobile-action-bar" aria-label="Quick Actions">
    <div class="mobile-action-container">
        <!-- Direct Phone Call Action -->
        <a href="tel:{{ $primaryDirector['raw_phone'] }}" class="mob-action-btn mob-call-btn" title="Call Director Hotline ({{ $primaryDirector['name'] }})">
            <span class="mob-btn-icon">
                <i class="fa-solid fa-phone"></i>
            </span>
            <span class="mob-btn-label">Call Us</span>
        </a>

        <!-- WhatsApp Quick Chat Action (Opens Multi-Director Concierge Drawer) -->
        <button type="button" 
                class="mob-action-btn mob-whatsapp-btn trigger-whatsapp-concierge" 
                id="mob-action-wa-btn"
                title="WhatsApp Leadership Concierge (Choose Director)">
            <span class="mob-btn-icon">
                <i class="fa-brands fa-whatsapp"></i>
            </span>
            <span class="mob-btn-label">WhatsApp</span>
        </button>

        <!-- View All Portfolios Action -->
        <a href="index.php?page=services" class="mob-action-btn mob-brochure-btn" title="View Funding Portfolios">
            <span class="mob-btn-icon">
                <i class="fa-solid fa-layer-group"></i>
            </span>
            <span class="mob-btn-label">Portfolios</span>
        </a>

        <!-- Open Consultation Modal -->
        <button type="button" class="mob-action-btn mob-inquire-btn open-inquiry-modal" title="Request Funding Consultation">
            <span class="mob-btn-icon">
                <i class="fa-solid fa-paper-plane"></i>
            </span>
            <span class="mob-btn-label">Inquire</span>
        </button>
    </div>
</aside>

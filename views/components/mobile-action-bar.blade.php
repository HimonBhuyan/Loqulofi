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

        <!-- WhatsApp Quick Chat Action -->
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $primaryDirector['raw_phone']) }}?text=Hello%20Liqulofi%20Team,%20I%20am%20interested%20in%20high-ticket%20funding%20solutions%20(1%20CR%20-%201000%20CR).%20Please%20connect%20with%20me." 
           target="_blank" 
           rel="noopener noreferrer" 
           class="mob-action-btn mob-whatsapp-btn" 
           title="WhatsApp Executive Chat">
            <span class="mob-btn-icon">
                <i class="fa-brands fa-whatsapp"></i>
            </span>
            <span class="mob-btn-label">WhatsApp</span>
        </a>

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

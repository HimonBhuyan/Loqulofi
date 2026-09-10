@php
    $servicesList = $services ?? [];
    $companyData = $company ?? [];
@endphp

<div class="modal-backdrop" id="inquiry-modal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content glass-card">
            <!-- Modal Header -->
            <div class="modal-header">
                <div class="modal-title-group">
                    <div class="gold-pill-tag">DIRECT EXECUTIVE DESK</div>
                    <h3 class="modal-title">REQUEST FUNDING CONSULTATION</h3>
                    <p class="modal-subtitle">Directly evaluated by our Leadership Team • Fast Assessment</p>
                </div>
                <button type="button" class="modal-close-btn" aria-label="Close modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div id="modal-alert-box" style="display: none;" class="alert-box"></div>

                <form id="funding-inquiry-form" method="POST" action="index.php?action=inquire">
                    <div class="form-row">
                        <div class="form-group col-half">
                            <label for="modal-name">Full Name / Entity Name <span class="req">*</span></label>
                            <input type="text" id="modal-name" name="name" class="form-control" placeholder="e.g. Rahul Sharma / Apex Developers" required>
                        </div>
                        <div class="form-group col-half">
                            <label for="modal-phone">Contact Phone / Mobile <span class="req">*</span></label>
                            <input type="tel" id="modal-phone" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-half">
                            <label for="modal-email">Email Address <span class="req">*</span></label>
                            <input type="email" id="modal-email" name="email" class="form-control" placeholder="info@company.com" required>
                        </div>
                        <div class="form-group col-half">
                            <label for="modal-location">City / State / Location <span class="req">*</span></label>
                            <input type="text" id="modal-location" name="location" class="form-control" placeholder="Gujarat / MP / Pan India" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-half">
                            <label for="modal-service">Funding Product / Solution <span class="req">*</span></label>
                            <div class="select-wrapper">
                                <select id="modal-service" name="service_id" class="form-control" required>
                                    <option value="" disabled selected>Select Funding Category</option>
                                    @foreach($servicesList as $srv)
                                        <option value="{{ $srv['id'] }}">{{ $srv['title'] }} ({{ $srv['ticket_size'] }})</option>
                                    @endforeach
                                    <option value="valuation-project-report">Valuation & Project Report (VP Services)</option>
                                    <option value="other-tailored-funding">Other Structured Debt / Customized</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-half">
                            <label for="modal-ticket">Required Ticket Size <span class="req">*</span></label>
                            <div class="select-wrapper">
                                <select id="modal-ticket" name="ticket_size" class="form-control" required>
                                    <option value="" disabled selected>Select Ticket Range</option>
                                    <option value="₹1 Cr - ₹5 Cr">₹1 Cr to ₹5 Cr (Retail / Prime)</option>
                                    <option value="₹5 Cr - ₹25 Cr">₹5 Cr to ₹25 Cr</option>
                                    <option value="₹25 Cr - ₹100 Cr">₹25 Cr to ₹100 Cr</option>
                                    <option value="₹100 Cr - ₹500 Cr">₹100 Cr to ₹500 Cr (Institutional)</option>
                                    <option value="₹500 Cr - ₹1000 Cr">₹500 Cr to ₹1,000 Cr (Mega Projects)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="modal-message">Project Brief / Funding Purpose</label>
                        <textarea id="modal-message" name="message" class="form-control" rows="3" placeholder="Provide brief details about property, project location, current debt, or specific financial requirements..."></textarea>
                    </div>

                    <div class="modal-directors-strip">
                        <span class="strip-label">Direct Director Lines:</span>
                        <div class="directors-pills">
                            @foreach($companyData['directors'] ?? [] as $dir)
                                <a href="tel:{{ $dir['raw_phone'] }}" class="dir-mini-pill">
                                    <span class="dir-n">{{ $dir['name'] }}</span>: {{ $dir['phone'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn-outline modal-cancel-btn">Cancel</button>
                        <button type="submit" class="btn-gold" id="modal-submit-btn">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Submit Consultation Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

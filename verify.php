<?php
$routes = [
    '/' => 'Home Page (All 16 Sections)',
    '/?page=about' => 'About Us, Vision & Mission',
    '/?page=services' => 'All 10 Funding Portfolios Directory',
    '/?page=service&id=prime-home-loans' => 'Page 6: Prime Home Loans (5 Cr Only)',
    '/?page=service&id=mortgage-loans' => 'Page 7: Mortgage Loans (1-500 Cr + VP Report)',
    '/?page=service&id=builder-project-finance' => 'Page 8: Builder Project Finance (1-500 Cr)',
    '/?page=service&id=residential-property-funding' => 'Page 9: Residential Property Funding (1-1000 Cr)',
    '/?page=service&id=commercial-project-funding' => 'Page 10: Commercial Project Funding (1-1000 Cr)',
    '/?page=service&id=industrial-property-funding' => 'Page 11: Industrial Property Funding (1-1000 Cr)',
    '/?page=service&id=hotel-resort-property-funding' => 'Page 12: Hotel & Resort Funding (1-1000 Cr)',
    '/?page=service&id=hospital-property-funding' => 'Page 13: Hospital Property Funding (1-1000 Cr)',
    '/?page=service&id=working-capital-solutions' => 'Page 14: Working Capital Solutions (1-1000 Cr)',
    '/?page=service&id=smart-funding-solutions' => 'Page 15: Smart Funding Solutions (1-1000 Cr)',
    '/?page=calculator' => 'Interactive High-Ticket EMI Calculator',
    '/?page=partners' => 'Page 16: Connecting All Banks Tie-Up Network',
    '/?page=contact' => 'Directors & Corporate Contact Desk'
];

echo "========================================================================================\n";
echo " LIQULOFI PRIVATE LIMITED - ROUTE & FORM VERIFICATION MATRIX\n";
echo "========================================================================================\n";

$passCount = 0;
foreach ($routes as $route => $name) {
    $url = 'http://127.0.0.1:8088' . $route;
    $content = @file_get_contents($url);
    if ($content !== false && strlen($content) > 1000) {
        $passCount++;
        printf(" [PASS] 200 OK | %7d bytes | %-42s | %s\n", strlen($content), $name, $route);
    } else {
        printf(" [FAIL]        | %-42s | %s\n", $name, $route);
    }
}

// Test AJAX POST inquiry
$postData = http_build_query([
    'name' => 'Apex Realty Developers',
    'phone' => '+91 9876543210',
    'email' => 'contact@apexrealty.com',
    'location' => 'Ahmedabad, Gujarat',
    'service_id' => 'commercial-project-funding',
    'ticket_size' => '₹100 Cr - ₹500 Cr',
    'message' => 'Seeking construction finance for a commercial IT park in GIFT City.'
]);

$opts = [
    'http' => [
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\nX-Requested-With: XMLHttpRequest\r\n",
        'content' => $postData
    ]
];
$context = stream_context_create($opts);
$postResult = @file_get_contents('http://127.0.0.1:8088/index.php?action=inquire', false, $context);
$postJson = json_decode($postResult, true);

if ($postJson && ($postJson['status'] ?? '') === 'success') {
    $passCount++;
    printf(" [PASS] 200 OK | %7d bytes | %-42s | %s\n", strlen($postResult), 'AJAX Lead Submission API', '/index.php?action=inquire');
} else {
    printf(" [FAIL]        | %-42s | %s\n", 'AJAX Lead Submission API', '/index.php?action=inquire');
}

// Check subsectors on Smart Funding Solutions page
$smartHtml = @file_get_contents('http://127.0.0.1:8088/?page=service&id=smart-funding-solutions');
$checks = [
    'Cold Storage Doodle Banner' => (strpos($smartHtml, 'cold-storage-doodle.jpg') !== false),
    'Warehouse Doodle Banner' => (strpos($smartHtml, 'warehouse-doodle.jpg') !== false),
    'Dairy Farm Doodle Banner' => (strpos($smartHtml, 'dairy-farm-doodle.jpg') !== false),
    'Specialized Verticals Section' => (strpos($smartHtml, 'SPECIALIZED INDUSTRY VERTICALS') !== false),
    'Expanded Vertical Card' => (strpos($smartHtml, 'expanded-vertical-card') !== false),
    'We Finance Strip' => (strpos($smartHtml, 'vertical-finance-strip') !== false),
];

// Verify Preloader is ONLY present on Home page and omitted on all subpages
$homeHtml = @file_get_contents('http://127.0.0.1:8088/');
$aboutHtml = @file_get_contents('http://127.0.0.1:8088/?page=about');
$servicesHtml = @file_get_contents('http://127.0.0.1:8088/?page=services');
$contactHtml = @file_get_contents('http://127.0.0.1:8088/?page=contact');

$preloaderChecks = [
    'Home Page Has Intro Preloader' => (strpos($homeHtml, 'luxury-preloader') !== false),
    'About Page Omits Preloader (Instant Load)' => (strpos($aboutHtml, 'luxury-preloader') === false),
    'Services Page Omits Preloader (Instant Load)' => (strpos($servicesHtml, 'luxury-preloader') === false),
    'Contact Page Omits Preloader (Instant Load)' => (strpos($contactHtml, 'luxury-preloader') === false),
];

echo "----------------------------------------------------------------------------------------\n";
echo " PRELOADER ROUTE ISOLATION VERIFICATION:\n";
echo "----------------------------------------------------------------------------------------\n";
foreach ($preloaderChecks as $chkName => $status) {
    if ($status) {
        printf(" [PASS] %s\n", $chkName);
    } else {
        printf(" [FAIL] %s\n", $chkName);
    }
}

echo "========================================================================================\n";
echo " TOTAL PASSED: $passCount / " . (count($routes) + 1) . "\n";
echo "========================================================================================\n";

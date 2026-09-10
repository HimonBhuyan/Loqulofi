<?php
/**
 * LIQULOFI PRIVATE LIMITED - Web Application
 * Capital Beyond Limits
 * 
 * Powered by BladeOne Templating Engine
 */

// If running under PHP built-in web server, serve existing static files directly
if (php_sapi_name() === 'cli-server') {
    $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $filePath = __DIR__ . $urlPath;
    if ($urlPath !== '/' && $urlPath !== '/index.php' && is_file($filePath)) {
        return false;
    }
}

require_once __DIR__ . '/vendor/autoload.php';

use eftec\bladeone\BladeOne;

// Ensure cache and views directories exist
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
if (!is_dir($cache)) {
    mkdir($cache, 0777, true);
}

// Initialize BladeOne (MODE_AUTO compiles views when modified)
$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

// --- Master Data matching Brochure (16 Pages) ---
$company = [
    'name' => 'LIQULOFI PRIVATE LIMITED',
    'short_name' => 'Liqulofi',
    'tagline' => 'CAPITAL BEYOND LIMITS',
    'offices' => 'Gujarat | Madhya Pradesh',
    'address' => 'Office No. 203, Scheme No. 54, Dhan Trident, Vijay Nagar, Indore, Madhya Pradesh',
    'headquarters' => 'Office No. 203, Scheme No. 54, Dhan Trident, Vijay Nagar, Indore, Madhya Pradesh',
    'coverage' => 'Working PAN INDIA',
    'ticket_size_range' => '1 CR to 1000 CR',
    'email' => 'finance@liqulofipvtltd.com',
    'website' => 'www.liqulofi.com',
    'directors' => [
        [
            'name' => 'RITU RAMI',
            'phone' => '+91 8780181897',
            'raw_phone' => '+918780181897',
            'role' => 'Director',
            'avatar_initials' => 'RR',
            'image' => 'assets/images/directors/ritu-rami.jpg'
        ],
        [
            'name' => 'ABHISHEK BHATNAGAR',
            'phone' => '+91 62320 46473',
            'raw_phone' => '+916232046473',
            'role' => 'Director',
            'avatar_initials' => 'AB',
            'image' => 'assets/images/directors/abhishek-bhatnagar.jpg'
        ],
        [
            'name' => 'SAKET DUBEY',
            'phone' => '+91 92329 78262',
            'raw_phone' => '+919232978262',
            'role' => 'Director',
            'avatar_initials' => 'SD',
            'image' => 'assets/images/directors/saket-dubey.jpg'
        ]
    ]
];

$about = [
    'lead' => 'Liqulofi Private Limited is a trusted and dynamic financial solutions provider, committed to empowering individuals, businesses, and institutions with reliable and customized funding solutions. We bridge the gap between ambition and achievement by offering smart, flexible and hassle-free financial services.',
    'sublead' => 'With a strong pan-India presence and a client-first approach, we aim to be the most preferred financial partner for all your funding needs.',
    'pillars' => [
        [
            'title' => 'TRUST',
            'desc' => 'We build long-term relationships based on transparency and reliability.',
            'icon' => 'handshake'
        ],
        [
            'title' => 'EXPERTISE',
            'desc' => 'Our experienced team delivers smart and effective financial solutions.',
            'icon' => 'user-tie'
        ],
        [
            'title' => 'INTEGRITY',
            'desc' => 'We operate with the highest standards of ethics and honesty.',
            'icon' => 'shield-check'
        ],
        [
            'title' => 'COMMITMENT',
            'desc' => 'We are committed to your growth and financial success.',
            'icon' => 'bullseye'
        ]
    ],
    'approach' => 'We believe in understanding your unique needs and providing solutions that drive real growth. Our streamlined process, expert guidance, and quick turnaround ensure a seamless experience from start to finish.',
    'quote' => 'Your Goals. Our Funding. Endless Possibilities.'
];

$vision = [
    'lead' => "To be India's most trusted financial partner, empowering individuals, businesses, and institutions to achieve financial growth, stability, and long-term success.",
    'quote' => 'Create endless financial opportunities and value through trust, innovation and excellence.',
    'pillars' => [
        [
            'title' => 'FINANCIAL GROWTH',
            'desc' => 'Empowering our clients with tailored financial solutions that drive sustainable growth and long-term prosperity.',
            'icon' => 'trending-up'
        ],
        [
            'title' => 'TRUST & TRANSPARENCY',
            'desc' => 'Building lasting relationships based on integrity, transparency, and mutual trust.',
            'icon' => 'shield'
        ],
        [
            'title' => 'INNOVATION',
            'desc' => 'Continuously embracing new ideas and technologies to deliver smarter, faster and better financial solutions.',
            'icon' => 'lightbulb'
        ],
        [
            'title' => 'NATION BUILDING',
            'desc' => "Contributing to India's economic progress by supporting entrepreneurial dreams and business ambitions.",
            'icon' => 'globe'
        ]
    ],
    'footer_note' => 'We envision a future where everyone has the financial strength to dream bigger, achieve more and live better.'
];

$mission = [
    'lead' => 'Our mission is to empower individuals, businesses, and institutions by providing innovative, reliable, and tailored financial solutions. We are committed to simplifying the funding process and delivering value that drives growth, stability, and long-term success.',
    'slogan' => 'WE EXIST TO FUEL AMBITIONS BUILD FUTURES',
    'pillars' => [
        [
            'title' => 'EMPOWER GROWTH',
            'desc' => 'Deliver customized financial solutions that empower our clients to achieve their goals and scale new heights.',
            'icon' => 'rocket'
        ],
        [
            'title' => 'BUILD TRUST',
            'desc' => 'Uphold the highest standards of integrity, transparency, and professionalism in every engagement.',
            'icon' => 'handshake'
        ],
        [
            'title' => 'DRIVE INNOVATION',
            'desc' => 'Continuously innovate to offer smarter, faster, and more efficient financial solutions.',
            'icon' => 'cpu'
        ],
        [
            'title' => 'CREATE LASTING IMPACT',
            'desc' => "Contribute meaningfully to our clients' success and the economic growth of our nation.",
            'icon' => 'award'
        ]
    ],
    'values' => [
        ['label' => 'FOCUS', 'text' => 'Focused on creating opportunities.'],
        ['label' => 'COMMITMENT', 'text' => 'Committed to excellence in every step.'],
        ['label' => 'RESULTS', 'text' => 'Driven by results, measured by trust.']
    ],
    'quote' => 'We are on a mission to be the most trusted financial partner, enabling our clients to turn possibilities into progress.'
];

$why_choose = [
    'tagline' => 'MORE THAN FINANCE, WE DELIVER VALUE',
    'subtitle' => 'At Liqulofi Private Limited, we go beyond funding — we build lasting partnerships that drive your success.',
    'items' => [
        [
            'title' => 'FASTER TURNAROUND TIME',
            'desc' => 'Quick evaluation, swift approvals and timely disbursals to keep your plans on track.',
            'icon' => 'clock'
        ],
        [
            'title' => 'CLIENT FIRST APPROACH',
            'desc' => 'Your goals are our priority. We listen, understand and provide solutions that truly fit your needs.',
            'icon' => 'users'
        ],
        [
            'title' => 'WIDE RANGE OF FUNDING SOLUTIONS',
            'desc' => 'From secured to structured finance, we offer customized funding options across multiple sectors and ticket sizes.',
            'icon' => 'coins'
        ],
        [
            'title' => 'TRANSPARENCY & INTEGRITY',
            'desc' => 'Clear communication, no hidden charges and complete transparency at every step.',
            'icon' => 'check-circle'
        ],
        [
            'title' => 'STRONG LENDER NETWORK',
            'desc' => 'Access to a pan-India network of trusted banks, NBFCs, and financial institutions for the best outcomes.',
            'icon' => 'network'
        ],
        [
            'title' => 'EXPERTISE YOU CAN TRUST',
            'desc' => 'Experienced professionals with deep industry knowledge to structure deals that maximize value.',
            'icon' => 'bar-chart'
        ],
        [
            'title' => 'PAN INDIA PRESENCE',
            'desc' => 'Serving clients across India with local insights and national reach for seamless support.',
            'icon' => 'map-pin'
        ],
        [
            'title' => 'COMPLETE CONFIDENTIALITY',
            'desc' => 'Your information is safe with us. We value your trust and maintain complete confidentiality.',
            'icon' => 'lock'
        ],
        [
            'title' => 'FLEXIBLE & INNOVATIVE SOLUTIONS',
            'desc' => 'We think beyond the ordinary to create flexible structures that help you achieve more with ease.',
            'icon' => 'sparkles'
        ],
        [
            'title' => 'LONG TERM PARTNERSHIP',
            'desc' => "We don't just close deals, we build relationships that last a lifetime.",
            'icon' => 'heart-handshake'
        ]
    ],
    'footer_note' => 'Liqulofi Private Limited is your trusted partner in transforming financial possibilities into real success.'
];

$process_steps = [
    [
        'step' => '01',
        'title' => 'UNDERSTAND',
        'desc' => 'We analyze your project, business plan & funding requirement.',
        'icon' => 'file-search'
    ],
    [
        'step' => '02',
        'title' => 'EVALUATE',
        'desc' => 'In-depth assessment of project viability, cash flow & documents.',
        'icon' => 'clipboard-check'
    ],
    [
        'step' => '03',
        'title' => 'STRUCTURE',
        'desc' => 'Customized funding structure with the best terms & flexibility.',
        'icon' => 'pie-chart'
    ],
    [
        'step' => '04',
        'title' => 'APPROVE',
        'desc' => 'Quick approvals with minimal documentation & transparency.',
        'icon' => 'thumbs-up'
    ],
    [
        'step' => '05',
        'title' => 'DISBURSE & SUPPORT',
        'desc' => 'Timely disbursal & continuous support till project success.',
        'icon' => 'arrow-up-right'
    ]
];

// All 10 Funding Products from brochure
$services = [
    'prime-home-loans' => [
        'id' => 'prime-home-loans',
        'title' => 'PRIME HOME LOANS',
        'subtitle' => 'Turn Your Dream Home into a Reality',
        'category' => 'Retail & High Net-Worth',
        'page_num' => 6,
        'ticket_size' => '5 CR ONLY',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 5,
        'slogan' => 'MORE SPACE. MORE COMFORT. More Life.',
        'short_desc' => 'Access substantial funding up to ₹5 Crore to own your luxury dream home with flexible repayment and fast approvals.',
        'key_points' => [
            ['title' => 'Higher Loan Amounts', 'desc' => 'Access substantial funding up to ₹5 Crore to own your dream home.'],
            ['title' => 'Competitive Interest Rates', 'desc' => 'Enjoy attractive rates with flexible repayment options.'],
            ['title' => 'Quick & Hassle-Free Process', 'desc' => 'Minimal documentation and faster approvals.'],
            ['title' => 'Secure & Reliable', 'desc' => 'Backed by trusted financial partners for a worry-free experience.'],
            ['title' => 'Personalized Service', 'desc' => 'Dedicated support to help you at every step.']
        ],
        'features_grid' => [
            ['title' => 'FLEXIBLE TENURE', 'desc' => 'Up to 20 Years', 'icon' => 'calendar'],
            ['title' => 'TOP-UP FACILITY', 'desc' => 'For future needs', 'icon' => 'plus-circle'],
            ['title' => 'PART PAYMENT', 'desc' => 'Options available', 'icon' => 'layers'],
            ['title' => 'BALANCE TRANSFER', 'desc' => 'Switch & save more', 'icon' => 'refresh-cw'],
            ['title' => 'TAX BENEFITS', 'desc' => 'As per government norms', 'icon' => 'percent']
        ],
        'icon' => 'home'
    ],
    'mortgage-loans' => [
        'id' => 'mortgage-loans',
        'title' => 'MORTGAGE LOANS',
        'subtitle' => 'Flexible Financing Solutions Secured by Your Property, Fueling Your Ambitions.',
        'category' => 'Secured Finance',
        'page_num' => 7,
        'ticket_size' => '1 CR TO 500 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 500,
        'slogan' => 'YOUR PROPERTY. OUR COMMITMENT. YOUR GROWTH.',
        'short_desc' => 'Unlock the true value of your property and get high-ticket liquidity for purchase, construction, debt takeout, or business expansion.',
        'purposes' => [
            ['title' => 'PURCHASE', 'desc' => 'Finance your dream property with ease.'],
            ['title' => 'CONSTRUCTION', 'desc' => 'Fund your construction plans seamlessly.'],
            ['title' => 'TAKE OVER', 'desc' => 'Take over existing loans & manage better.'],
            ['title' => 'BT TOP UP', 'desc' => 'Top up your existing loan for additional needs.'],
            ['title' => 'WHATEVER IT TAKES', 'desc' => 'Any other purpose, we are here to make it happen.']
        ],
        'special_feature' => [
            'badge' => 'WE DO VP TOO',
            'title' => 'VALUATION & PROJECT REPORT',
            'desc' => 'We also provide Valuation & Project Report services to help you plan better and get stronger financing solutions.'
        ],
        'why_points' => [
            'High Loan Amount – Up to your requirement',
            'Flexible Repayment Options',
            'Competitive Interest Rates',
            'Quick Approvals & Hassle-Free Process',
            'Minimum Documentation',
            'Pan India Service',
            'Expert Support at Every Step'
        ],
        'badges' => [
            ['title' => 'SECURED LOANS', 'desc' => 'Backed by your property', 'icon' => 'shield'],
            ['title' => 'HIGHER FUNDING', 'desc' => 'Fulfill big plans without limits', 'icon' => 'trending-up'],
            ['title' => 'QUICK DISBURSAL', 'desc' => 'Fast processing, faster results', 'icon' => 'zap'],
            ['title' => 'TRUSTED PARTNER', 'desc' => 'Your growth is our priority', 'icon' => 'handshake']
        ],
        'icon' => 'building'
    ],
    'builder-project-finance' => [
        'id' => 'builder-project-finance',
        'title' => 'BUILDER PROJECT FINANCE',
        'subtitle' => 'Fueling Your Projects. Building the Future.',
        'category' => 'Real Estate & Infrastructure',
        'page_num' => 8,
        'ticket_size' => '1 CR TO 500 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 500,
        'slogan' => 'Strengthening Builders. Creating Landmarks.',
        'short_desc' => 'Tailored project financing structures for real estate developers and builders across residential, commercial, and industrial segments.',
        'empowering_points' => [
            ['title' => 'Timely Funding', 'desc' => 'To keep your projects on track and avoid execution bottlenecks.'],
            ['title' => 'Flexible Solutions', 'desc' => 'Tailored to your specific project needs and cash flow milestones.'],
            ['title' => 'Hassle-Free Process', 'desc' => 'With quick approval, minimum friction, and phased disbursals.']
        ],
        'visions' => [
            ['title' => 'RESIDENTIAL PROJECTS', 'desc' => 'Building Homes. Building Trust.', 'icon' => 'home'],
            ['title' => 'COMMERCIAL PROJECTS', 'desc' => 'Creating Spaces. Enabling Growth.', 'icon' => 'building-2'],
            ['title' => 'INDUSTRIAL PROJECTS', 'desc' => 'Powering Industry. Powering Progress.', 'icon' => 'factory']
        ],
        'callout' => 'YOUR PROJECT. OUR COMMITMENT. MUTUAL GROWTH.',
        'icon' => 'hard-hat'
    ],
    'residential-property-funding' => [
        'id' => 'residential-property-funding',
        'title' => 'RESIDENTIAL PROPERTY FUNDING',
        'subtitle' => 'Smart Funding for Your Dream Properties.',
        'category' => 'Real Estate',
        'page_num' => 9,
        'ticket_size' => '1 CR TO 1000 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 1000,
        'slogan' => 'Your Property. Our Funding. Your Growth.',
        'short_desc' => 'End-to-end funding solutions for residential property acquisition, large-scale construction, loan takeover, and plot development.',
        'key_points' => [
            ['title' => 'HIGHER LOAN AMOUNTS', 'desc' => 'Fund your residential property plans with higher ticket size.'],
            ['title' => 'COMPETITIVE INTEREST RATES', 'desc' => 'Attractive rates with flexible repayment options.'],
            ['title' => 'QUICK APPROVALS & DISBURSAL', 'desc' => 'Minimal documentation and fast processing for a hassle-free experience.'],
            ['title' => 'SECURE & RELIABLE', 'desc' => 'Backed by trusted financial partners you can rely on.'],
            ['title' => 'TAILORED SOLUTIONS', 'desc' => 'Customized funding solutions as per your property needs.']
        ],
        'funding_for' => [
            'Purchase of Residential Property',
            'Construction of Residential Property',
            'Take Over of Existing Loan',
            'Balance Transfer',
            'Top Up Loan',
            'Renovation & Extension',
            'Plot + Construction'
        ],
        'why_points' => [
            'Up to 1000 Cr Funding',
            'Pan India Presence',
            'Transparent Process',
            'Expert Guidance at Every Step',
            'End to End Support'
        ],
        'icon' => 'home'
    ],
    'commercial-project-funding' => [
        'id' => 'commercial-project-funding',
        'title' => 'COMMERCIAL PROJECT FUNDING',
        'subtitle' => 'Fueling Business Spaces. Building Success.',
        'category' => 'Commercial & Retail',
        'page_num' => 10,
        'ticket_size' => '1 CR TO 1000 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 1000,
        'slogan' => 'YOUR VISION. OUR FUNDING. Together, we create landmarks.',
        'short_desc' => 'Comprehensive debt & structured financing for commercial real estate, corporate offices, shopping malls, and IT tech parks.',
        'financing_for' => [
            ['title' => 'Office Spaces', 'icon' => 'briefcase'],
            ['title' => 'Retail & Malls', 'icon' => 'shopping-bag'],
            ['title' => 'IT Parks & Tech Parks', 'icon' => 'cpu'],
            ['title' => 'Mixed Use Developments', 'icon' => 'grid'],
            ['title' => 'Business Parks & More', 'icon' => 'building']
        ],
        'why_points' => [
            'Flexible Funding – Term Loan / Construction Finance / Mezzanine',
            'High Ticket Size – Up to 1000 Cr',
            'Competitive Interest Rates',
            'Quick Turnaround Time',
            'Experienced Team with Deep Industry Knowledge',
            'End to End Support'
        ],
        'we_finance_note' => 'COMMERCIAL PROJECTS: Develop Today. Lead Tomorrow.',
        'icon' => 'briefcase'
    ],
    'industrial-property-funding' => [
        'id' => 'industrial-property-funding',
        'title' => 'INDUSTRIAL PROPERTY FUNDING',
        'subtitle' => 'Powering Industries. Funding Growth.',
        'category' => 'Industrial & Manufacturing',
        'page_num' => 11,
        'ticket_size' => '1 CR TO 1000 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 1000,
        'slogan' => 'YOUR INDUSTRY. OUR FINANCING. MUTUAL GROWTH.',
        'short_desc' => 'Specialized funding solutions for industrial parks, manufacturing plants, logistics hubs, and Lease Rental Discounting (LRD).',
        'purposes' => [
            ['title' => 'PURCHASE', 'desc' => 'Finance for purchase of industrial property.', 'icon' => 'shopping-cart'],
            ['title' => 'PLOT + CONSTRUCTION', 'desc' => 'Funding for land purchase and construction.', 'icon' => 'tool'],
            ['title' => 'TAKE OVER', 'desc' => 'Take over existing loans & manage better.', 'icon' => 'refresh-ccw'],
            ['title' => 'LEASE AGREEMENT', 'desc' => 'Lease rental support through structured financing.', 'icon' => 'file-text']
        ],
        'why_points' => [
            'High Ticket Size – Up to 1000 Cr',
            'Flexible Funding Solutions',
            'Competitive Interest Rates',
            'Quick Approvals & Hassle-Free Process',
            'Minimum Documentation',
            'Pan India Presence',
            'End to End Support'
        ],
        'focus_points' => [
            'Focused on Long Term Relationships',
            'Industry Experts by Your Side',
            'Solutions that Drive Progress'
        ],
        'icon' => 'factory'
    ],
    'hotel-resort-property-funding' => [
        'id' => 'hotel-resort-property-funding',
        'title' => 'HOTEL & RESORT PROPERTY FUNDING',
        'subtitle' => 'Funding Iconic Stays. Building Lasting Experiences.',
        'category' => 'Hospitality & Leisure',
        'page_num' => 12,
        'ticket_size' => '1 CR TO 1000 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 1000,
        'slogan' => 'YOUR VISION. OUR FUNDING. MUTUAL GROWTH.',
        'short_desc' => 'Bespoke financing for luxury hotels, boutique resorts, heritage properties, new construction, takeout of running/non-running units, and renovation.',
        'purposes' => [
            ['title' => 'PURCHASE', 'desc' => 'Finance for purchase of hotel & resort properties.', 'icon' => 'key'],
            ['title' => 'CONSTRUCTION', 'desc' => 'Funding for new construction of hotels & resorts from the ground up.', 'icon' => 'layers'],
            ['title' => 'TAKE OVER', 'desc' => 'Take over existing running or non-running hotels & resorts and manage better.', 'icon' => 'refresh-cw'],
            ['title' => 'LEASE AGREEMENT', 'desc' => 'Lease rental support through structured financing.', 'icon' => 'file-check'],
            ['title' => 'EXPANSION & RENOVATION', 'desc' => 'Funds for expansion, renovation & upgradation.', 'icon' => 'sparkles']
        ],
        'why_points' => [
            'High Ticket Size – Up to 1000 Cr',
            'Flexible Funding Solutions',
            'Competitive Interest Rates',
            'Quick Approvals & Hassle-Free Process',
            'Minimum Documentation',
            'Pan India Presence',
            'End to End Support'
        ],
        'trust_points' => [
            ['title' => 'Trusted by Developers & Hospitality Professionals', 'icon' => 'user-check'],
            ['title' => 'Strong Relationships with Leading Financial Institutions', 'icon' => 'landmark'],
            ['title' => 'Transparent Process & Reliable Commitment', 'icon' => 'shield-check']
        ],
        'icon' => 'bed'
    ],
    'hospital-property-funding' => [
        'id' => 'hospital-property-funding',
        'title' => 'HOSPITAL PROPERTY FUNDING',
        'subtitle' => 'Building Healthcare. Funding Hope.',
        'category' => 'Healthcare & Medical',
        'page_num' => 13,
        'ticket_size' => '1 CR TO 1000 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 1000,
        'slogan' => 'YOUR VISION. OUR FUNDING. BETTER HEALTHCARE. STRONGER TOMORROW.',
        'short_desc' => 'Dedicated institutional funding for hospitals, super-specialty clinics, medical institutes, land acquisition, construction, and modernization.',
        'purposes' => [
            ['title' => 'PURCHASE', 'desc' => 'Finance for purchase of existing hospital property.', 'icon' => 'plus-square'],
            ['title' => 'PLOT + CONSTRUCTION', 'desc' => 'Funding for land purchase & construction of hospital from the ground up.', 'icon' => 'activity'],
            ['title' => 'TAKE OVER', 'desc' => 'Take over existing loans & manage your hospital better.', 'icon' => 'refresh-cw'],
            ['title' => 'LEASE AGREEMENT', 'desc' => 'Lease rental support through structured financing.', 'icon' => 'file-text']
        ],
        'why_points' => [
            'High Ticket Size – Up to 1000 Cr',
            'Flexible Funding Solutions',
            'Competitive Interest Rates',
            'Quick Approvals & Hassle-Free Process',
            'Minimum Documentation',
            'Pan India Presence',
            'End to End Support'
        ],
        'trust_points' => [
            ['title' => 'Trusted by Healthcare Professionals', 'icon' => 'heart'],
            ['title' => 'Strong Relationships with Leading Financial Institutions', 'icon' => 'landmark'],
            ['title' => 'Transparent Process & Reliable Commitment', 'icon' => 'shield-check']
        ],
        'icon' => 'cross'
    ],
    'working-capital-solutions' => [
        'id' => 'working-capital-solutions',
        'title' => 'WORKING CAPITAL SOLUTIONS',
        'subtitle' => 'To Power Your Business Growth',
        'category' => 'Corporate Finance',
        'page_num' => 14,
        'ticket_size' => '1 CR TO 1000 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 1000,
        'slogan' => 'QUICK APPROVALS • FLEXIBLE SOLUTIONS • COMPETITIVE RATES • TRUSTED PARTNER',
        'short_desc' => 'Comprehensive liquidity facilities including CC/OD limits, Bank Guarantees, Government Subsidized Schemes, and CGTMSE collateral-free lines.',
        'services' => [
            [
                'title' => 'CC / OD LIMIT',
                'desc' => 'Flexible working capital limits to manage your day-to-day business operations seamlessly.',
                'icon' => 'trending-up'
            ],
            [
                'title' => 'BANK GUARANTEE',
                'desc' => 'Secure bank guarantees for your business commitments and contractual obligations.',
                'icon' => 'landmark'
            ],
            [
                'title' => 'GOVERNMENT SCHEMES',
                'desc' => 'Access a wide range of government backed schemes to grow your business with ease.',
                'icon' => 'award'
            ],
            [
                'title' => 'CGTMSE',
                'desc' => 'Collateral free loans through CGTMSE scheme to empower small & growing businesses.',
                'icon' => 'shield'
            ]
        ],
        'why_points' => [
            'High Ticket Size – Up to 1000 Cr',
            'Quick Turnaround Time',
            'Expert Team & Personalized Support',
            'Transparent Process & Trusted Service',
            'Competitive Rates & Flexible Solutions'
        ],
        'icon' => 'dollar-sign'
    ],
    'smart-funding-solutions' => [
        'id' => 'smart-funding-solutions',
        'title' => 'SMART FUNDING SOLUTIONS',
        'subtitle' => 'For Your Business Growth',
        'category' => 'Agri & Logistics',
        'page_num' => 15,
        'ticket_size' => '1 CR TO 1000 CR',
        'ticket_numeric_min' => 1,
        'ticket_numeric_max' => 1000,
        'slogan' => 'QUICK APPROVALS • FLEXIBLE FINANCING • COMPETITIVE RATES • TRUSTED PARTNER',
        'short_desc' => 'Specialized infrastructure funding for Cold Storage facilities, Warehouses & Logistics Hubs, and Large-Scale Dairy Farms.',
        'sub_sectors' => [
            [
                'id' => 'cold-storage',
                'title' => 'COLD STORAGE FUNDING',
                'tagline' => 'Powering Preservation. Securing Tomorrow.',
                'icon' => 'fa-snowflake',
                'banner_img' => 'assets/images/services/cold-storage-doodle.jpg',
                'photo_img' => 'assets/images/services/cold-storage-photo.jpg',
                'features' => [
                    'Construction / Setup of Cold Storage Facilities',
                    'Modern & Energy Efficient Infrastructure',
                    'Refrigeration Solutions for Every Need'
                ],
                'we_finance' => ['Land Purchase', 'Construction', 'Machinery & Equipment', 'Working Capital']
            ],
            [
                'id' => 'warehouse',
                'title' => 'WAREHOUSE FUNDING',
                'tagline' => 'Stronger Storage. Smoother Supply Chain.',
                'icon' => 'fa-warehouse',
                'banner_img' => 'assets/images/services/warehouse-doodle.jpg',
                'photo_img' => 'assets/images/services/warehouse-photo.jpg',
                'features' => [
                    'Custom Built Warehouse Solutions',
                    'Advanced & Durable Infrastructure',
                    'Efficient Space for Maximum Productivity'
                ],
                'we_finance' => ['Land Purchase', 'Construction', 'Infrastructure & Equipment', 'Working Capital']
            ],
            [
                'id' => 'dairy-farm',
                'title' => 'DAIRY FARM FUNDING',
                'tagline' => 'Healthy Livestock. Profitable Future.',
                'icon' => 'fa-cow',
                'banner_img' => 'assets/images/services/dairy-farm-doodle.jpg',
                'photo_img' => 'assets/images/services/dairy-farm-photo.jpg',
                'features' => [
                    'Dairy Farm Setup & Expansion',
                    'Modern Equipment & Milking Systems',
                    'Feed Units, Infrastructure & Working Capital'
                ],
                'we_finance' => ['Land Purchase', 'Construction', 'Equipment & Infrastructure', 'Working Capital']
            ]
        ],
        'why_points' => [
            'High Ticket Size – Up to 1000 Cr',
            'Flexible Solutions tailored to your needs',
            'Competitive Rates – Best terms for your business',
            'Quick Turnaround Time – Hassle-free process',
            'Expert Team – Industry experts by your side',
            'End to End Support – From approval to disbursement'
        ],
        'icon' => 'truck'
    ]
];

// Bank Tie-Up Partners from Page 16
$banks = [
    'title' => 'CONNECTING ALL BANKS',
    'subtitle' => 'ALL BANKS TIE UP',
    'lead' => 'We truly appreciate your time and the opportunity to connect with you. TOGETHER, WE GROW.',
    'slogan' => 'YOUR TRUST. OUR COMMITMENT. STRONGER RELATIONSHIPS. ENDLESS POSSIBILITIES.',
    'categories' => [
        [
            'name' => 'GOVERNMENT BANKS',
            'type' => 'Government',
            'icon' => 'landmark',
            'banks' => [
                ['name' => 'State Bank of India', 'short' => 'SBI', 'badge' => 'Govt PSU', 'logo' => 'assets/images/banks/sbi.svg'],
                ['name' => 'Bank of Baroda', 'short' => 'BOB', 'badge' => 'Govt PSU', 'logo' => 'assets/images/banks/bob.svg'],
                ['name' => 'Punjab National Bank', 'short' => 'PNB', 'badge' => 'Govt PSU', 'logo' => 'assets/images/banks/pnb.svg'],
                ['name' => 'Union Bank of India', 'short' => 'UBI', 'badge' => 'Govt PSU', 'logo' => 'assets/images/banks/ubi.svg'],
                ['name' => 'Canara Bank', 'short' => 'Canara', 'badge' => 'Govt PSU', 'logo' => 'assets/images/banks/canara.svg']
            ]
        ],
        [
            'name' => 'PRIVATE BANKS',
            'type' => 'Private',
            'icon' => 'building',
            'banks' => [
                ['name' => 'HDFC Bank', 'short' => 'HDFC', 'badge' => 'Private Leading', 'logo' => 'assets/images/banks/hdfc.svg'],
                ['name' => 'ICICI Bank', 'short' => 'ICICI', 'badge' => 'Private Leading', 'logo' => 'assets/images/banks/icici.svg'],
                ['name' => 'Axis Bank', 'short' => 'Axis', 'badge' => 'Private Leading', 'logo' => 'assets/images/banks/axis.svg'],
                ['name' => 'Kotak Mahindra Bank', 'short' => 'Kotak', 'badge' => 'Private Leading', 'logo' => 'assets/images/banks/kotak.svg'],
                ['name' => 'IndusInd Bank', 'short' => 'IndusInd', 'badge' => 'Private Leading', 'logo' => 'assets/images/banks/indusind.svg']
            ]
        ],
        [
            'name' => 'NON-BANKING FINANCIAL COMPANIES (NBFC)',
            'type' => 'NBFC',
            'icon' => 'coins',
            'banks' => [
                ['name' => 'Bajaj Finserv', 'short' => 'Bajaj', 'badge' => 'Top NBFC', 'logo' => 'assets/images/banks/bajaj.svg'],
                ['name' => 'Tata Capital', 'short' => 'Tata', 'badge' => 'Top NBFC', 'logo' => 'assets/images/banks/tata.svg'],
                ['name' => 'Piramal Finance', 'short' => 'Piramal', 'badge' => 'Top NBFC', 'logo' => 'assets/images/banks/piramal.svg'],
                ['name' => 'Cholamandalam Finance', 'short' => 'Chola', 'badge' => 'Top NBFC', 'logo' => 'assets/images/banks/chola.svg'],
                ['name' => 'L&T Finance', 'short' => 'L&T', 'badge' => 'Top NBFC', 'logo' => 'assets/images/banks/lnt.svg']
            ]
        ]
    ],
    'pillars' => [
        [
            'title' => 'WIDE NETWORK',
            'desc' => 'Strong tie-ups across all leading banks and NBFCs nationwide.',
            'icon' => 'globe'
        ],
        [
            'title' => 'BEST SOLUTIONS',
            'desc' => 'Customized funding solutions structured for every business need.',
            'icon' => 'sliders'
        ],
        [
            'title' => 'QUICK APPROVALS',
            'desc' => 'Hassle-free process with fast, transparent, and efficient approvals.',
            'icon' => 'zap'
        ],
        [
            'title' => 'END TO END SUPPORT',
            'desc' => 'From initial documentation to final disbursement, we are with you.',
            'icon' => 'shield-check'
        ]
    ]
];

// --- Request Routing & Handling ---
$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? null;

// Handle consultation / inquiry submission
if ($action === 'inquire' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $service_id = trim($_POST['service_id'] ?? '');
    $ticket_size = trim($_POST['ticket_size'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // In a production static site, this could log or send email
    $lead_data = [
        'timestamp' => date('Y-m-d H:i:s'),
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'service' => $service_id,
        'ticket_size' => $ticket_size,
        'location' => $location,
        'message' => $message
    ];

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'message' => 'Thank you! Your funding consultation request has been received. Our directors will get in touch with you shortly.',
            'lead' => $lead_data
        ]);
        exit;
    }

    $success_msg = 'Thank you! Your funding consultation request has been received. Our directors will get in touch with you shortly.';
    echo $blade->run('pages.home', compact('company', 'about', 'vision', 'mission', 'why_choose', 'process_steps', 'services', 'banks', 'success_msg'));
    exit;
}

// Master view context
$is_home = ($page === 'home' || empty($page));
$viewData = compact('company', 'about', 'vision', 'mission', 'why_choose', 'process_steps', 'services', 'banks', 'page', 'is_home');

// Route Dispatching
switch ($page) {
    case 'about':
        echo $blade->run('pages.about', $viewData);
        break;

    case 'services':
        echo $blade->run('pages.services', $viewData);
        break;

    case 'service':
        $service_id = $_GET['id'] ?? 'prime-home-loans';
        if (!isset($services[$service_id])) {
            $service_id = 'prime-home-loans';
        }
        $current_service = $services[$service_id];
        $viewData['service'] = $current_service;
        echo $blade->run('pages.service-detail', $viewData);
        break;

    case 'calculator':
        echo $blade->run('pages.calculator', $viewData);
        break;

    case 'partners':
        echo $blade->run('pages.partners', $viewData);
        break;

    case 'contact':
        echo $blade->run('pages.contact', $viewData);
        break;

    case 'home':
    default:
        echo $blade->run('pages.home', $viewData);
        break;
}

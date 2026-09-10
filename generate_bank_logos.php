<?php
$bankDir = __DIR__ . '/assets/images/banks';
if (!is_dir($bankDir)) {
    mkdir($bankDir, 0777, true);
}

$logos = [
    // 1. SBI - State Bank of India
    'sbi' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <circle cx="50" cy="50" r="46" fill="#0082CA"/>
        <circle cx="50" cy="42" r="16" fill="#FFFFFF"/>
        <rect x="44" y="42" width="12" height="36" fill="#FFFFFF"/>
    </svg>',

    // 2. Bank of Baroda (Baroda Sun)
    'bob' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <path d="M12 50 A38 38 0 0 1 88 50 A38 38 0 0 1 12 50" fill="none" stroke="#F26522" stroke-width="8"/>
        <path d="M26 50 A24 24 0 0 1 74 50 A24 24 0 0 1 26 50" fill="none" stroke="#F26522" stroke-width="8"/>
        <circle cx="50" cy="50" r="10" fill="#F26522"/>
        <line x1="12" y1="50" x2="88" y2="50" stroke="#FAF6EE" stroke-width="4"/>
    </svg>',

    // 3. Punjab National Bank
    'pnb' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <rect x="10" y="10" width="80" height="80" rx="16" fill="#A20034"/>
        <circle cx="50" cy="46" r="22" fill="#FDB913"/>
        <path d="M42 36 L58 36 L58 56 L42 56 Z" fill="#A20034"/>
        <circle cx="50" cy="46" r="8" fill="#FDB913"/>
        <rect x="46" y="56" width="8" height="18" fill="#FDB913"/>
    </svg>',

    // 4. Union Bank of India
    'ubi' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <path d="M24 20 L38 20 L38 60 C38 68 44 72 50 72 C56 72 62 68 62 60 L62 20 L76 20 L76 60 C76 78 64 86 50 86 C36 86 24 78 24 60 Z" fill="#D31F26"/>
        <path d="M38 20 L52 20 L52 46 C52 52 56 55 60 55 C64 55 68 52 68 46 L68 20 L82 20 L82 46 C82 60 72 66 60 66 C48 66 38 60 38 46 Z" fill="#005A9C"/>
    </svg>',

    // 5. Canara Bank
    'canara' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <polygon points="50,14 86,78 14,78" fill="#0086CE"/>
        <polygon points="50,86 14,22 86,22" fill="#FDB913" opacity="0.9"/>
        <polygon points="50,35 68,68 32,68" fill="#FAF6EE"/>
    </svg>',

    // 6. HDFC Bank
    'hdfc' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <rect x="10" y="10" width="80" height="80" rx="8" fill="#004C8F"/>
        <rect x="38" y="10" width="24" height="80" fill="#ED232A"/>
        <rect x="10" y="38" width="80" height="24" fill="#ED232A"/>
        <rect x="38" y="38" width="24" height="24" fill="#004C8F"/>
        <rect x="42" y="42" width="16" height="16" fill="#FFFFFF"/>
    </svg>',

    // 7. ICICI Bank
    'icici' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <circle cx="50" cy="50" r="45" fill="#8E191D"/>
        <path d="M50 18 C32 18 20 32 20 50 C20 68 32 82 50 82 C65 82 76 72 79 58 L66 58 C63 65 57 70 50 70 C38 70 31 61 31 50 C31 39 38 30 50 30 C57 30 63 35 66 42 L79 42 C76 28 65 18 50 18 Z" fill="#F37021"/>
        <circle cx="50" cy="50" r="9" fill="#F37021"/>
    </svg>',

    // 8. Axis Bank
    'axis' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <path d="M50 12 L86 82 L64 82 L50 54 L36 82 L14 82 Z" fill="#97144D"/>
        <polygon points="50,28 68,64 32,64" fill="#FAF6EE"/>
        <polygon points="50,38 61,60 39,60" fill="#97144D"/>
    </svg>',

    // 9. Kotak Mahindra Bank
    'kotak' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <circle cx="50" cy="50" r="44" fill="#ED1C24"/>
        <path d="M34 50 C34 42 40 36 48 36 C55 36 60 41 64 46 C68 41 73 36 80 36 C88 36 94 42 94 50 C94 58 88 64 80 64 C73 64 68 59 64 54 C60 59 55 64 48 64 C40 64 34 58 34 50 Z" fill="#FAF6EE" transform="scale(0.8) translate(12, 12)"/>
        <circle cx="43" cy="50" r="4" fill="#ED1C24"/>
        <circle cx="57" cy="50" r="4" fill="#ED1C24"/>
    </svg>',

    // 10. IndusInd Bank
    'indusind' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <rect x="10" y="10" width="80" height="80" rx="16" fill="#8B0000"/>
        <!-- Zebu Bull Silhouette -->
        <path d="M28 65 C32 55 40 46 52 46 C58 40 66 36 76 34 C76 38 72 42 68 45 C74 48 78 54 80 65 L70 65 C68 58 64 54 58 54 C54 54 50 58 48 65 Z" fill="#FFFFFF"/>
        <circle cx="68" cy="38" r="3" fill="#8B0000"/>
    </svg>',

    // 11. Bajaj Finserv
    'bajaj' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <circle cx="50" cy="50" r="44" fill="#005691"/>
        <path d="M30 68 L48 32 L58 32 L40 68 Z" fill="#FFFFFF"/>
        <path d="M48 68 L66 32 L76 32 L58 68 Z" fill="#0099DA"/>
    </svg>',

    // 12. Tata Capital
    'tata' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <rect x="10" y="10" width="80" height="80" rx="18" fill="#005B94"/>
        <path d="M28 32 L72 32 L72 42 L56 42 L56 74 L44 74 L44 42 L28 42 Z" fill="#FFFFFF"/>
        <circle cx="50" cy="24" r="3.5" fill="#00B2E2"/>
    </svg>',

    // 13. Piramal Finance
    'piramal' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <circle cx="50" cy="50" r="44" fill="#FAF6EE" stroke="#E2D4BD" stroke-width="2"/>
        <path d="M50 20 C50 35 35 50 20 50 C35 50 50 65 50 80 C50 65 65 50 80 50 C65 50 50 35 50 20 Z" fill="#F26522"/>
        <circle cx="50" cy="50" r="10" fill="#D8232A"/>
    </svg>',

    // 14. Cholamandalam Finance (Chola)
    'chola' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <circle cx="50" cy="50" r="44" fill="#0A2540"/>
        <path d="M30 50 C30 38 38 30 50 30 C58 30 65 35 68 42 L56 42 C54 38 52 36 50 36 C42 36 38 42 38 50 C38 58 42 64 50 64 C53 64 56 61 58 56 L70 56 C67 65 59 70 50 70 C38 70 30 62 30 50 Z" fill="#FBB03B"/>
        <polygon points="56,48 76,48 66,32" fill="#FBB03B"/>
    </svg>',

    // 15. L&T Finance
    'lnt' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
        <circle cx="50" cy="50" r="44" fill="#004F9F"/>
        <circle cx="50" cy="50" r="36" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-dasharray="8 4"/>
        <text x="50" y="58" font-family="Arial, sans-serif" font-weight="900" font-size="24" fill="#FFFFFF" text-anchor="middle" letter-spacing="1">L&amp;T</text>
    </svg>'
];

foreach ($logos as $key => $svg) {
    file_put_contents($bankDir . "/{$key}.svg", trim($svg));
    echo "Generated {$key}.svg\n";
}

echo "All 15 bank logos generated successfully!\n";

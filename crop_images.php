<?php
$pages = [
    6 => 'prime-home-loans',
    7 => 'mortgage-loans',
    8 => 'builder-project-finance',
    9 => 'residential-property-funding',
    10 => 'commercial-project-funding',
    11 => 'industrial-property-funding',
    12 => 'hotel-resort-property-funding',
    13 => 'hospital-property-funding',
    14 => 'working-capital-solutions',
    15 => 'smart-funding-solutions'
];

if (!is_dir('assets/images/services')) {
    mkdir('assets/images/services', 0777, true);
}

foreach ($pages as $num => $slug) {
    $padNum = str_pad($num, 4, '0', STR_PAD_LEFT);
    $filename = "assets/images/pages/Liqulofi_Private_Limited_page-{$padNum}.jpg";
    if (file_exists($filename)) {
        $img = imagecreatefromjpeg($filename);
        $w = imagesx($img);
        $h = imagesy($img);
        echo "Page $num ($slug): {$w}x{$h}\n";
        
        // Let's create two crops:
        // 1. The upper architectural visual block (approx Y: 12% to 60%, X: 0 to 100%)
        $cropY = (int)($h * 0.12);
        $cropH = (int)($h * 0.48);
        $cropW = $w;
        $cropX = 0;
        
        $crop = imagecrop($img, ['x' => $cropX, 'y' => $cropY, 'width' => $cropW, 'height' => $cropH]);
        if ($crop) {
            imagejpeg($crop, "assets/images/services/{$slug}-hero.jpg", 92);
            imagedestroy($crop);
        }

        // 2. A full card backdrop (Y: 5% to 80%)
        $cardCropY = (int)($h * 0.05);
        $cardCropH = (int)($h * 0.75);
        $cardCrop = imagecrop($img, ['x' => 0, 'y' => $cardCropY, 'width' => $w, 'height' => $cardCropH]);
        if ($cardCrop) {
            imagejpeg($cardCrop, "assets/images/services/{$slug}-bg.jpg", 88);
            imagedestroy($cardCrop);
        }
        
        imagedestroy($img);
    }
}
echo "Extraction completed successfully!\n";

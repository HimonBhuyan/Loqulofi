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

        // 1. Clean photo crop (the architectural scene on the right side)
        $pX = (int)($w * 0.35);
        $pY = (int)($h * 0.15);
        $pW = $w - $pX;
        $pH = (int)($h * 0.42);

        $cropPhoto = imagecrop($img, ['x' => $pX, 'y' => $pY, 'width' => $pW, 'height' => $pH]);
        if ($cropPhoto) {
            imagejpeg($cropPhoto, "assets/images/services/{$slug}-photo.jpg", 95);
            imagedestroy($cropPhoto);
        }

        // 2. Wide visual banner (full width including gradient blend)
        $bY = (int)($h * 0.14);
        $bH = (int)($h * 0.40);
        $cropBanner = imagecrop($img, ['x' => 0, 'y' => $bY, 'width' => $w, 'height' => $bH]);
        if ($cropBanner) {
            imagejpeg($cropBanner, "assets/images/services/{$slug}-banner.jpg", 95);
            imagedestroy($cropBanner);
        }

        imagedestroy($img);
    }
}
echo "Clean photo crops created!\n";

<?php
$targetDir = __DIR__ . "/assets/images/services/";

// Target banner dimensions: 1200x520 (approx 2.3:1 banner ratio for cards)
$bannerW = 1200;
$bannerH = 540;

// 1. Cold Storage Doodle (from 1792x1024 image)
$coldStorageSource = "C:/Users/User/.gemini/antigravity-ide/brain/064b4508-caa9-4681-8c7c-f13bcfb77bfd/cold_storage_doodle_1788879460128.jpg";
if (file_exists($coldStorageSource)) {
    $src = imagecreatefromjpeg($coldStorageSource);
    $dst = imagecreatetruecolor($bannerW, $bannerH);
    // Fill with #FAF5EB
    $bg = imagecolorallocate($dst, 250, 245, 235);
    imagefilledrectangle($dst, 0, 0, $bannerW, $bannerH, $bg);
    
    // Fit source into dst
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $bannerW, $bannerH, imagesx($src), imagesy($src));
    imagejpeg($dst, $targetDir . "cold-storage-doodle.jpg", 95);
    imagedestroy($src);
    imagedestroy($dst);
    echo "1. cold-storage-doodle.jpg generated\n";
}

// 2. Warehouse Doodle
$smartDoodle = "C:/Users/User/.gemini/antigravity-ide/brain/064b4508-caa9-4681-8c7c-f13bcfb77bfd/smart_funding_doodle_1788877309832.jpg";
if (file_exists($smartDoodle)) {
    $src = imagecreatefromjpeg($smartDoodle);
    $sw = imagesx($src);
    $sh = imagesy($src);

    // Warehouse: crop top-right
    $whCrop = imagecrop($src, [
        'x' => (int)($sw * 0.48),
        'y' => (int)($sh * 0.04),
        'width' => (int)($sw * 0.51),
        'height' => (int)($sh * 0.46)
    ]);
    if ($whCrop) {
        $dst = imagecreatetruecolor($bannerW, $bannerH);
        $bg = imagecolorallocate($dst, 250, 245, 235);
        imagefilledrectangle($dst, 0, 0, $bannerW, $bannerH, $bg);
        
        // Center the crop in the banner
        imagecopyresampled($dst, $whCrop, 0, 0, 0, 0, $bannerW, $bannerH, imagesx($whCrop), imagesy($whCrop));
        imagejpeg($dst, $targetDir . "warehouse-doodle.jpg", 95);
        imagedestroy($whCrop);
        imagedestroy($dst);
        echo "2. warehouse-doodle.jpg generated\n";
    }

    // Dairy Farm: crop bottom-right
    $dfCrop = imagecrop($src, [
        'x' => (int)($sw * 0.49),
        'y' => (int)($sh * 0.49),
        'width' => (int)($sw * 0.50),
        'height' => (int)($sh * 0.49)
    ]);
    if ($dfCrop) {
        $dst = imagecreatetruecolor($bannerW, $bannerH);
        $bg = imagecolorallocate($dst, 250, 245, 235);
        imagefilledrectangle($dst, 0, 0, $bannerW, $bannerH, $bg);
        
        imagecopyresampled($dst, $dfCrop, 0, 0, 0, 0, $bannerW, $bannerH, imagesx($dfCrop), imagesy($dfCrop));
        imagejpeg($dst, $targetDir . "dairy-farm-doodle.jpg", 95);
        imagedestroy($dfCrop);
        imagedestroy($dst);
        echo "3. dairy-farm-doodle.jpg generated\n";
    }

    imagedestroy($src);
}
echo "All 3 subsectors doodle banners processed!\n";

